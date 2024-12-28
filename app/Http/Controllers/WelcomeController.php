<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $pageTitle = 'Welcome';
        return view('welcome', compact('pageTitle'));
    }
}