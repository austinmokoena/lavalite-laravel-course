<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
        
    }

    public function videosAdmin()
    {
        return view('admin.videos');
    }

    public function videosUpload()
    {
        return view('admin.upload');
    }
}
