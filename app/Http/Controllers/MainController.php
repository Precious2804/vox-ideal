<?php

namespace App\Http\Controllers;

use App\Models\BlogMessages;
use App\Models\ContactMessages;
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
        $user = ['user' => User::where('user_id', Auth::user()->user_id)->first()];
        return view('upload')->with($user);
    }

    public function contact()
    {
        return view('contact');
    }
    public function blog_detail(Request $req)
    {
        $single_blog = ['single_blog' => BlogMessages::where('unique_id', $req->article)->first()];
        return view('blog_detail')->with($single_blog);
    }

    public function upload_now(Request $req)
    {
        $req->validate([
            'subject' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif,svg,jfif'
        ]);
        if ($req->file()) {
            $name = time() . '_' . $req->image->getClientOriginalName();
            $filePath = $req->file('image')->storeAs('uploads', $name, 'public');
            $storePhoto = '/storage/' . $filePath;
            // $storePhoto =  $filePath;

            $wrapped = mb_strimwidth($req->content, 0, 250);
            BlogMessages::create([
                'unique_id' => $this->createUniqueID('blog_messages', 'unique_id'),
                'subject' => $req->subject,
                'content' => $req->content,
                'posted_by' => "Admin",
                'half_content' => $wrapped,
                'image' => $storePhoto
            ]);
        }
        return back()->with('uploaded', "New Article has been uploaded successfully");
    }
    //logout method
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function contact_now(Request $req){
        ContactMessages::create([
            'message_id'=>$this->createUniqueID('contact_messages', 'message_id'),
            'fname'=>$req->fname,
            'lname'=>$req->lname,
            'email'=>$req->email,
            'message'=>$req->message
        ]);

        return back()->with('sent', "Message was Sent Successfully. Thank you!");
    }
}
