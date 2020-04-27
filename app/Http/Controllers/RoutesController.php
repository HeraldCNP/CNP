<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class RoutesController extends Controller
{
    public function inicio()
    {
        $posts = Post::Published()->get();

        return view('welcome', compact('posts'));
    }
    public function audio()
    {
        return view('modules.audio');
    }
    public function banda(){
        return view('modules.banda');
    }
    public function colegio(){
        return view('modules.colegio');
    }
    public function calche(){
        return view('modules.calche');
    }
    public function cnp(){
        return view('modules.cnp');
    }
    public function contacto(){
        return view('modules.contacto');
    }
    public function team(){
        return view('modules.team');
    }
}
