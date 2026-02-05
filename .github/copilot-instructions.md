# Copilot Instructions: Gestion Immobilière - Laravel App

## Project Overview
**Gestion Immobilière** is a property management platform built with Laravel 12, featuring property listings, admin dashboards, contact management, and media handling. The application separates concerns between frontend (public pages) and backend (admin panel with property CRUD operations).

## Architecture

### Core Components
- **Frontend** (`ImmoController`): Routes public pages (index, about, property-list, blog, profiles, wallet)
- **Admin** (`PropertyController`, `DashboardController`): RESTful resource for property management with pagination and status filtering
- **Models**: `Property`, `User`, `Contact` with typed relationships and casts
- **Media Storage**: Images/videos stored in `storage/` using Laravel's `store()` method

### Key Entry Points
- **Routes** (`routes/web.php`): 30+ endpoints, mostly GET for views + POST for forms
- **Front Controllers**: `ImmoController` (22 methods returning views), `ContactController` (index/store)
- **Admin Controllers**: `PropertyController` (index/create/store/edit/update/destroy - RESTful)

## Development Workflow

### Running the Project
```bash
# All-in-one dev: Laravel server + queue listener + logs + Vite
npm run dev

# Or separately:
php artisan serve
npm run dev
php artisan queue:listen --tries=1
php artisan pail --timeout=0
```

### Database
- **Driver**: SQLite (default via Laravel config)
- **Migrations**: Located in `database/migrations/` 
  - Key tables: `users`, `properties`, `contacts`, `cache`, `jobs`
- **Seeders**: In `database/seeders/` (use `php artisan db:seed`)

### Testing & Validation
```bash
# Run tests (clears config cache first)
npm run test

# Code formatting
php artisan pint

# Validation rules in PropertyRequest enforce media constraints:
# - Images: JPEG/PNG/GIF, max 10MB
# - Videos: MP4/AVI/MKV/MOV, max 50MB
```

## Project-Specific Patterns

### Property Model Handling
```php
// In PropertyController::store():
// Photos stored as JSON array in DB (see Property::$fillable & $casts)
$photos[] = $photo->store(config('images.path'), 'public');
$data['photos'] = json_encode($photos);

// Amenities also JSON-encoded (checked in store method)
$data['amenities'] = json_encode($amenities ?? []);
```
**Pattern**: Array fields use `json_encode()` for storage; Property model casts `photos` and `amenities` as arrays via `protected $casts`.

### Form Validation Pattern
- Use `Requests/` classes (`PropertyRequest`) for validation rules
- All property fields validated with `required|string`, `numeric`, file constraints
- `authorize()` returns `true` (no permission checks currently)

### View Organization
- **Template**: `resources/views/template/sidebar.blade.php` (base layout with asset loading)
- **Admin Views**: `resources/views/admin/dashboard_property`, `dashboard_user`
- **Frontend Views**: `resources/views/index`, `property-list`, `add-property`, etc.
- Use `@yield('title')`, `@yield('style')` for page-specific content

### Asset Management
- **CSS/JS**: Vite-managed via `vite.config.js` with Tailwind CSS v4
- **Images**: Stored in `public/assets/` (static) and `storage/app/public/` (uploaded)
- **Entry Point**: `resources/css/app.css` and `resources/js/app.js`
- Asset helper: `{{ asset('path') }}` generates URLs automatically

### Configuration Files (`.env` driven)
- App name, debug mode, URL in `config/app.php`
- Database credentials in `config/database.php`
- File storage paths: `config/images.php` (image storage path), `config/videos.php` (video storage path)

## Common Tasks

### Adding a New Property Field
1. Create migration: `php artisan make:migration add_field_to_properties_table`
2. Add to `Property::$fillable` array
3. Add validation rule to `PropertyRequest::rules()`
4. Update form blade template if needed

### Handling Property Media
- Images: Multi-file upload stored as JSON array
- Videos: Single file, stored as string path
- Use `Storage::url()` in views to generate URLs: `{{ Storage::url($property->video) }}`

### Creating Admin Views
- Inherit from `template/sidebar.blade.php` layout
- Pass data to compact: `return view('admin.dashboard_property', compact('properties', 'total', 'pending', 'rent'))`
- Paginated results: `Property::paginate(5)` returns 5 items per page

## Important Conventions

1. **Controllers**: Extend `Controller` base class; return `view()` for rendering
2. **Naming**: Controllers use PascalCase (`PropertyController`), migrations use timestamps
3. **JSON Fields**: Cast arrays to JSON; decode on retrieval automatically
4. **Status Field**: `Property::status` used for filtering (values: 'pending', 'rent')
5. **Blade Syntax**: Always escape output: `{{ $variable }}`, use `@forelse` for safe iterations

## Integration Points

- **External Mail**: `ContactController` sends emails (Mail class not shown; check `app/Mail/`)
- **File Storage**: Uses `Storage` facade with `public` disk for media access
- **Pagination**: Built-in Laravel pagination with `paginate()` method
- **Validation**: Leverages Laravel's form request validation layer

## Gotchas & Notes

- No authentication middleware applied currently (routes accessible without login)
- `ImmoController` has 5 unimplemented methods returning empty/undefined views (fix before deployment)
- Media paths stored relative to `storage/` - ensure `storage:link` symlink exists in production
- `Property::months` field limited to values 3, 6, or 12 (lease duration)
