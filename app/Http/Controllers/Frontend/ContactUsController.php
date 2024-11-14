<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * About page
     */
    public function contact()
    {
        return view('frontend.contact.contact');
    }
}
