<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
        
    }
    public function thanks()
    {

        return view('thanks');
    }

    public function send()
    {
        return view('send');
    }
}
