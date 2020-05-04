<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
    	$data['menu'] = 'dashboard';
    	return view('admin.dashboard', $data);
    }
}
