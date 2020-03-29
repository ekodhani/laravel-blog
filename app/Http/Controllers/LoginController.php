<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // menampilkan halaman login
    public function index()
    {
        return view('login');
    }

    // untuk menjalankan login
    public function loginPost(Request $request)
    {
        // 
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email', $email)->first();
        if ($data) { //apakah email tersebut ada atau tidak
            if (md5($password) == $data->password) {
                Session::put('id', $data->id);
                Session::put('image', $data->image);
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('/', TRUE);
                return redirect('dashboard');
            } else {
                return redirect('/')->with('alert', 'Password Salah Kayaknya !');
            }
        } else {
            return redirect('/')->with('alert', 'Mungkin Akun Kamu Ga Ada!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/')->with('alert-success', 'Kamu Udah Log Out Makasih Ya!');
    }
}
