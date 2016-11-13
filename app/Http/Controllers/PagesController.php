<?php

namespace blog\Http\Controllers;

use blog\Post;

class PagesController extends Controller {

    public function getIndex(){
        # process variable data or params
        # talk to model
        # recieve from the model
        # compile or process data from model if needed
        # pass that data to view.

        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout(){
        $first = 'Dake';
        $last = 'Zhang';
        
        $full = $first . " " . $last;
        $email = 'tribute.zhang@gmail.com';
        $data=[];
        $data['email'] = $email;
        $data['fullname']=$full;
        return view('pages.about')->withdata($data);
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(){

    }
}