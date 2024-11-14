<?php

namespace App\Http\Controllers\Frontend\certificateCheck;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificateCheckController extends Controller
{
    /**
     * CertificateCheck page
     */
    public function certificateCheck()
    {
        return view('frontend.certificate-check.certificate-check');
    }
}
