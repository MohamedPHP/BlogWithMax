<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MessageController extends Controller
{
    public function getContactIndex()
    { // views the contact page
        return view('frontend.other.contact');
    }
}
