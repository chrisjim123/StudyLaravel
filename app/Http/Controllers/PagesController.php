<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.index')
    		->with('name', 'Chris Jim')
    		->with('lastname', 'Egot');
    }

    public function profile()
    {
    	return view('pages.profile');
    }
} 
