<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\Generics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    use Generics;

    public function login()
    {
        return view('/login');
    }

    //checks the users inputs and perform sign in
    public function do_login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (User::Where('email', $req->email)->exists() == true) {

            $credentials = ['email' => $req->email, 'password' => $req->password];
            if (Auth::validate($credentials) == true) {
                Auth::attempt($credentials, $req->remember_me == 'on' ? true : false);

                return redirect()->to(route('upload'));
            } else {
                return redirect()->back()->with('info', 'Incorrect password!, please check your credentials and try again.')->withInput($req->only('loginEmail'));
            }
        } else {
            return redirect()->back()->with('infoEmail', 'Email address does not exist!, please check your credentials and try again.');
        }
    }

    public function upload()
    {
        return view('upload');
    }

    public function contact()
    {
        return view('contact');
    }
    public function blog_detail()
    {
        return view('blog_detail');
    }

    public function upload_now(Request $req)
    {
        return $req->subject;
    }
    //logout method
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
