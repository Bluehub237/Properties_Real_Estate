<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $users = User::paginate(5);
        $totalUsers = User::count();
        $administrateurs = User::where('rule', 'admin')->count();
        $locataires = User::where('rule', 'locataire')->count();
        $bailleurs = User::where('rule', 'bailleur')->count();
        return view('admin.dashboard_user', compact('users', 'totalUsers', 'locataires', 'bailleurs', 'administrateurs'));
    }
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'rule' => 'required|in:admin,bailleur,locataire',
        ]);

        $user->rule = $request->input('rule');
        $user->save();

        return redirect()->back()->with('success', 'User role updated successfully.');
    }
}
