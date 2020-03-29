<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        // 
        return view('admin.profile');
    }

    public function update(User $user)
    {
        //
        User::find($user->id);
        return view('admin.updateprofile', ['user' => $user]);
    }

    public function edit(Request $request, $id)
    {
        //
        if ($request->hasfile('image')) {
            $request->file('image')->move('assets/profile/', $request->file('image')->getClientOriginalName());
        }
        $user = User::find($id);
        $user->image = $request->file('image')->getClientOriginalName();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();

        return redirect('/profile')->with('alert-success', 'User Berhasil Di Update, Logout Segera Untuk Memperbarui Profile!');
    }
}
