<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin/principal');
    
    }

    public function adminlogin(){
        
        return view('admin/adminlogin');
    }
}
