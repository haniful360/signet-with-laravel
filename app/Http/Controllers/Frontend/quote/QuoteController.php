<?php

namespace App\Http\Controllers\Frontend\quote;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Quote page
     */
    public function quote()
    {
        return view('frontend.quote.quote');
    }
}
