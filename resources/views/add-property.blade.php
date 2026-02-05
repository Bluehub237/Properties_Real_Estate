@extends('template.house')

@section('title')
    Housa - Real Esate Template
@endsection
@section('style')
<style>
/* Style personnalisé pour le message de succès */
.custom-success-alert {
  position: fixed;
  top: 120px;
  right: 20px;
  z-index: 1050;
  min-width: 280px;
  max-width: 420px;
  border-radius: 8px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
  font-weight: 500;
}

@media (max-width: 576px) {
  .custom-success-alert { right: 12px; left: 12px; min-width: auto; }
}
</style>
@endsection
@section('content')
  <!--===== HERO AREA STARTS =======-->
  <div class="inner-header-area">
  </div>
  <!--===== HERO AREA ENDS =======-->
  <div class="space30"></div>
  <!--===== DASHBOARD AREA STARTS =======-->
  <div class="add-property-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="property-boxarea">
            <h3>Add New Property</h3>
            <div class="space40"></div>


            <form action="{{ route('property.store') }}" method="POST" id="propertyForm" enctype="multipart/form-data" novalidate>
                        @csrf
                @if(session('success'))
                  <div class="alert alert-success alert-dismissible fade show custom-success-alert" role="alert">
                    <strong>Succès —</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

            <div class="all-tabs-boxarea">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1. Description</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2. Media</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">3. Location</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact1-tab" data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1" aria-selected="false">4. Details</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">5. Amenities</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                  <div class="space48"></div>
                  <h4>Property Description</h4>
                  <div class="space28"></div>
                  <h5>Title Your Home*</h5>
                  <div class="space16"></div>
                  <div class="col-lg-12">
                    <div class="input-area">
                      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Tittle Name" required>
                      @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="space32"></div>
                    <h5>Description Note*</h5>
                    <div class="space16"></div>
                    <div class="input-area">
                      <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Your Message">{{ old('description') }}</textarea>
                      @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6">
                      <div class="space30"></div>
                      <div class="input-area">
                        <h5>Select Category*</h5>
                        <div class="space16"></div>
                        <select class="nice-select @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required>
                          <option value="Apartment">Apartment</option>
                          <option value="Studio">Studio</option>
                          <option value="Bedroom">Bedroom</option>
                          <option value="Office">Office</option>
                          <option value="Store">Store</option>
                          <option value="Villa">Villa</option>
                        </select>
                        @error('category') <div class="invalid-feedback">{{ $message }}</div> @enderror
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="space30"></div>
                        <div class="input-area">
                          <h5>Price In FCFA</h5>
                          <div class="space16"></div>
                          <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" placeholder="Your Price" required>
                          @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="space30"></div>
                        <div class="input-area">
                          <h5>Deposit </h5>
                          <div class="space16"></div>
                          <input type="text" name="deposit" class="form-control @error('deposit') is-invalid @enderror" value="{{ old('deposit') }}" placeholder="Deposit" required>
                          @error('deposit') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                       <div class="space30"></div>
                       <div class="input-area">
                        <h5>Nbres de mois </h5>
                        <div class="space16"></div>
                        <select name="months" class="nice-select @error('months') is-invalid @enderror" value="{{ old('months') }}" required>
                          <option value="3">3 months</option>
                          <option value="6">6 months</option>
                          <option value="12">12 months</option>
                        </select>
                        @error('months') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="space40"></div>
                        <div class="btn-area1 text-end">
                          <button type="button" class="vl-btn1" data-bs-toggle="pill" data-bs-target="#pills-profile">Update To Next Step <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                  <div class="property-main-boxarea">
                    <div class="space48"></div>
                    <h4>Upload Photos Of Your Property</h4>
                    <div class="space38"></div>
                    <div class="box-uploadfile text-center">
                      <div class="uploadfile">
                        <div class="btn-upload vl-btn1 text-center">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.9998 6V3C6.9998 2.44772 7.44752 2 7.9998 2H19.9998C20.5521 2 20.9998 2.44772 20.9998 3V17C20.9998 17.5523 20.5521 18 19.9998 18H16.9998V20.9991C16.9998 21.5519 16.5499 22 15.993 22H4.00666C3.45059 22 3 21.5554 3 20.9991L3.0026 7.00087C3.0027 6.44811 3.45264 6 4.00942 6H6.9998ZM5.00242 8L5.00019 20H14.9998V8H5.00242ZM8.9998 6H16.9998V16H18.9998V4H8.9998V6Z"></path>
                          </svg>
                          Select Property Photos
                          <input type="file" id="photoInput" name="photos[]" class="ip-file @error('photos') is-invalid @enderror" multiple accept="image/*">
                        </div>
                        <p class="file-name fw-5">or drag photos here <br>
                          <span>(Exactly 4 photos required)</span>
                          @error('photos') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </p>
                        <div id="photoCount" style="color: #666; margin-top: 10px; font-weight: bold;">0/4 images sélectionnées</div>
                      </div>
                      <div class="space20"></div>
                      <div class="box-img-upload">
                        <div class="item-upload file-delete" id="preview-1">
                          <img id="img-1" src="https://housa-html-demo.vercel.app/assets/img/all-images/others/add-img1.png" alt="housa" style="display: block;">
                          <div id="placeholder-1" style="display: none; text-align: center; padding: 40px 20px; background: #f5f5f5;">
                            <p style="color: #999;">Image 1</p>
                          </div>
                          <span class="remove-file" onclick="removePhoto(1)" style="cursor: pointer; display: none;" id="remove-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                              <path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path>
                            </svg></span>
                        </div>
                        <div class="item-upload file-delete" id="preview-2">
                          <img id="img-2" src="https://housa-html-demo.vercel.app/assets/img/all-images/others/add-img2.png" alt="housa" style="display: block;">
                          <div id="placeholder-2" style="display: none; text-align: center; padding: 40px 20px; background: #f5f5f5;">
                            <p style="color: #999;">Image 2</p>
                          </div>
                          <span class="remove-file" onclick="removePhoto(2)" style="cursor: pointer; display: none;" id="remove-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                              <path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path>
                            </svg></span>
                        </div>
                        <div class="item-upload file-delete" id="preview-3">
                          <img id="img-3" src="https://housa-html-demo.vercel.app/assets/img/all-images/others/add-img3.png" alt="housa" style="display: block;">
                          <div id="placeholder-3" style="display: none; text-align: center; padding: 40px 20px; background: #f5f5f5;">
                            <p style="color: #999;">Image 3</p>
                          </div>
                          <span class="remove-file" onclick="removePhoto(3)" style="cursor: pointer; display: none;" id="remove-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                              <path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44752 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path>
                            </svg></span>
                        </div>
                        <div class="item-upload file-delete" id="preview-4">
                          <img id="img-4" src="https://housa-html-demo.vercel.app/assets/img/all-images/others/add-img4.png" alt="housa" style="display: block;">
                          <div id="placeholder-4" style="display: none; text-align: center; padding: 40px 20px; background: #f5f5f5;">
                            <p style="color: #999;">Image 4</p>
                          </div>
                          <span class="remove-file" onclick="removePhoto(4)" style="cursor: pointer; display: none;" id="remove-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                              <path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path>
                            </svg></span>
                        </div>
                      </div>
                    </div>
                    <div class="space30"></div>
                    <h4>Video Option</h4>
                    <div class="space20"></div>
                    <div class="row">
                      <div class="col-lg-12 co-md-6">
                        <div class="input-area">
                          <h5>Select Video</h5>
                          <div class="space16"></div>
                          <input type="file" name="video" class="form-control @error('video') is-invalid @enderror" placeholder="video">
                          @error('video') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                      </div>
                      <div class="space40"></div>
                      <div class="col-lg-12">
                        <div class="btn-area1 text-end">
                          <button type="button" class="vl-btn1" data-bs-toggle="pill" data-bs-target="#pills-contact">Update To Next Step <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                  <div class="upload-main-boxarea">
                    <div class="space48"></div>
                    <h4>Listing Property Location</h4>
                    <div class="space32"></div>
                    <div class="input-area">
                      <h5>Address</h5>
                      <div class="space16"></div>
                      <input type="text" name="address" class="form-control @error('video') is-invalid @enderror" value="{{ old('address') }}" placeholder="Property Address" required>
                      @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-md-6">
                       <div class="space30"></div>
                       <div class="input-area">
                        <h5>City </h5>
                        <div class="space16"></div>
                        <select name="city" class="nice-select @error('city') is-invalid @enderror" required>
                          <option value="Douala">Douala</option>
                          <option value="Yaoundé">Yaoundé</option>
                        </select>
                        @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="space28"></div>
                        <div class="input-area">
                          <h5>Neighborhood*</h5>
                          <div class="space16"></div>
                          <input type="text" name="neighborhood" class="form-control @error('neighborhood') is-invalid @enderror" value="{{ old('neighborhood') }}" placeholder="Neighborhood*" required>
                          @error('neighborhood') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="space48"></div>
                        <div class="mapouter">
                          <div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="space40"></div>
                        <div class="btn-area1 text-end">
                          <button type="button" class="vl-btn1" data-bs-toggle="pill" data-bs-target="#pills-contact1">Update To Next Step <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact1-tab" tabindex="0">
                  <div class="upload-main-boxarea">
                    <div class="space48"></div>
                    <h4>Listing Details</h4>
                    <div class="space4"></div>
                    <div class="row">
                      <div class="col-lg-4 col-md-6">
                        <div class="space28"></div>
                        <div class="input-area">
                          <h5>Lot size in m² (only numbers)</h5>
                          <div class="space16"></div>
                          <input type="text" name="lot_size" class="form-control @error('lot_size') is-invalid @enderror" value="{{ old('lot_size') }}" placeholder="Lot size in ft (only numbers)" required>
                          @error('lot_size') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="space28"></div>
                        <div class="input-area">
                          <h5>Room</h5>
                          <div class="space16"></div>
                          <input type="text" name="rooms" class="form-control @error('rooms') is-invalid @enderror" value="{{ old('rooms') }}" placeholder="Rooms" required>
                          @error('rooms') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="space28"></div>
                        <div class="input-area">
                          <h5>Bedrooms</h5>
                          <div class="space16"></div>
                          <input type="text" name="bedrooms" class="form-control @error('bedrooms') is-invalid @enderror" value="{{ old('bedrooms') }}" placeholder="Bedrooms" required>
                          @error('bedrooms') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="space28"></div>
                        <div class="input-area">
                          <h5>Bathrooms</h5>
                          <div class="space16"></div>
                          <input type="text" name="bathrooms" class="form-control @error('bathrooms') is-invalid @enderror" value="{{ old('bathrooms') }}" placeholder="Bathrooms" required>
                          @error('bathrooms') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                       <div class="space30"></div>
                       <div class="input-area">
                        <h5>Floor number </h5>
                        <div class="space16"></div>
                        <select name="floors" class="nice-select @error('floors') is-invalid @enderror" required>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                        @error('floors') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="space40"></div>
                        <div class="btn-area1 text-end">
                          <button type="button" class="vl-btn1" data-bs-toggle="pill" data-bs-target="#pills-contact2">Update To Next Step <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab" tabindex="0">
                  <div class="upload-main-boxarea">
                    <div class="space48"></div>
                    <h4>Amenities*</h4>
                    <div class="space16"></div>
                    <div class="row">
                      <div class="col-lg-2 col-md-6">
                        <fieldset class="checkbox-item style-1">
                          <label>
                            <input type="checkbox" name="amenities[]" value="Air Condition">
                            <span class="btn-checkbox"></span>
                            <span class="text-4">Air Condition </span>
                          </label>
                        </fieldset>
                        <fieldset class="checkbox-item style-1">
                          <label>
                            <input type="checkbox" name="amenities[]" value="Parking">
                            <span class="btn-checkbox"></span>
                            <span class="text-4">Parking</span>
                          </label>
                        </fieldset>
                        <fieldset class="checkbox-item style-1">
                          <label>
                            <input type="checkbox" name="amenities[]" value="Furnishing">
                            <span class="btn-checkbox"></span>
                            <span class="text-4">Furnishing</span>
                          </label>
                        </fieldset>
                      </div>
                      <div class="col-lg-2 col-md-6">
                        <fieldset class="checkbox-item style-1">
                          <label>
                            <input type="checkbox" name="amenities[]" value="Floor">
                            <span class="btn-checkbox"></span>
                            <span class="text-4">Floor</span>
                          </label>
                        </fieldset>
                        <fieldset class="checkbox-item style-1">
                          <label>
                            <input type="checkbox" name="amenities[]" value="Renovation">
                            <span class="btn-checkbox"></span>
                            <span class="text-4">Renovation</span>
                          </label>
                        </fieldset>
                        <fieldset class="checkbox-item style-1">
                          <label>
                            <input type="checkbox" name="amenities[]" value="Cable TV">
                            <span class="btn-checkbox"></span>
                            <span class="text-4">Cable TV</span>
                          </label>
                        </fieldset>
                      </div>
                      <div class="col-lg-2 col-md-6">
                        <fieldset class="checkbox-item style-1">
                          <label>
                            <input type="checkbox" name="amenities[]" value="Garden">
                            <span class="btn-checkbox"></span>
                            <span class="text-4">Garden</span>
                          </label>
                        </fieldset>
                        <fieldset class="checkbox-item style-1">
                          <label>
                            <input type="checkbox" name="amenities[]" value="Wifi">
                            <span class="btn-checkbox"></span>
                            <span class="text-4">Wifi</span>
                          </label>
                        </fieldset>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="space40"></div>
                        <div class="btn-area1 text-end">
                          <button type="submit" class="vl-btn1">Upload Your property<span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--===== DASHBOARD AREA ENDS =======-->
  <div class="space30"></div>
@endsection

@section('script')
<script>
// Gestion des photos - Max 4 images
let selectedPhotos = [];

function handlePhotoInput(e) {
    const files = Array.from(e.target.files);

    if (files.length > 4) {
        alert('Vous pouvez sélectionner maximum 4 images');
        e.target.value = '';
        return;
    }

    selectedPhotos = files;
    updatePhotoPreviews();
    updatePhotoCount();
}

function updatePhotoPreviews() {
    for (let i = 1; i <= 4; i++) {
        const img = document.getElementById(`img-${i}`);
        const placeholder = document.getElementById(`placeholder-${i}`);
        const removeBtn = document.getElementById(`remove-${i}`);

        if (selectedPhotos[i - 1]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                img.src = e.target.result;
                img.style.display = 'block';
                placeholder.style.display = 'none';
                removeBtn.style.display = 'block';
            };
            reader.readAsDataURL(selectedPhotos[i - 1]);
        } else {
            img.src = 'https://housa-html-demo.vercel.app/assets/img/all-images/others/add-img' + i + '.png';
            img.style.display = 'block';
            placeholder.style.display = 'none';
            removeBtn.style.display = 'none';
        }
    }
}

function removePhoto(index) {
    selectedPhotos.splice(index - 1, 1);
    selectedPhotos = [...selectedPhotos]; // Remplit les vides
    updatePhotoPreviews();
    updatePhotoCount();
    // Réinitialise l'input file
    document.getElementById('photoInput').value = '';
}

function updatePhotoCount() {
    document.getElementById('photoCount').textContent = selectedPhotos.length + '/4 images sélectionnées';
}

// Écoute les changements du fichier
document.getElementById('photoInput').addEventListener('change', handlePhotoInput);

// Gestion des tabs et validation
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('propertyForm');
    const nextButtons = document.querySelectorAll('button[data-bs-toggle="pill"]');

    nextButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            // Obtient le parent tab-pane actuel
            const currentTab = this.closest('.tab-pane');

            // Validation spéciale pour le tab "Media"
            if (currentTab.id === 'pills-profile') {
                if (selectedPhotos.length !== 4) {
                    alert('Vous devez sélectionner exactement 4 images');
                    return;
                }
            }

            // Valide les champs du tab actuel
            const inputs = currentTab.querySelectorAll('input, textarea, select');
            let isValid = true;

            inputs.forEach(input => {
                // Ignore le fichier photo car on le valide autrement
                if (input.name === 'photos[]') return;

                if (!input.checkValidity()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            // Si tout est valide, va au prochain tab
            if (isValid) {
                const targetId = this.getAttribute('data-bs-target');
                const tabTrigger = new bootstrap.Tab(document.querySelector(targetId + '-tab'));
                tabTrigger.show();
            }
        });
    });

    // Convertit les photos sélectionnées en FormData lors de la soumission
    form.addEventListener('submit', function(e) {
        // Crée un objet DataTransfer pour ajouter les fichiers à l'input
        const dt = new DataTransfer();
        selectedPhotos.forEach(photo => {
            dt.items.add(photo);
        });
        document.getElementById('photoInput').files = dt.files;
    });
});
</script>
@endsection
