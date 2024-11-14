<?php

namespace App\Http\Controllers\Frontend\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Audit page
     */
    public function audit()
    {
        return view('frontend.service.audit');
    }

    /**
     * Certification page
     */
    public function certification()
    {
        return view('frontend.service.certification');
    }
    /**
     * Verification page
     */
    public function verification()
    {
        return view('frontend.service.verification');
    }
}
