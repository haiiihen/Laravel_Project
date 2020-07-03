<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    //
    public function blog()
    {
        $test = Post::all();
        return view('sites.singlepost',compact(['test']));
    }

    public function index()
    {
        return view('home');
    }

    public function home() 
    {
        $test = Post::all();
        return view('sites.home',compact(['test']));
    }

    public function about()
    {

    }

    public function register()
    {
        return view('sites.register');
    }

    public function postregister(Request $request)
    {
        // dd($request->all());
        //static function
        $user = new \App\User;
        $user->role = 'member';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table member
        $request->request->add(['user_id' => $user->id]);
        $member = \App\Member::create($request->all());

        return redirect('/')->with('sukses','Data Pendaftaran Berhasil Dikirim');
    }

    public function singlepost($slug)
    {
        $posts = Post::where('slug','=',$slug)->first();
        // dd($post);

        return view('sites.blog',['posts' => $posts]);
    }

    public function  post()
    {
        
    }
}
