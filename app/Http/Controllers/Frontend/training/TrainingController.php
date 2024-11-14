<?php

namespace App\Http\Controllers\Frontend\training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Training page
     */
    public function training()
    {
        return view('frontend.training.training');
    }

    /**
     * Training schedule page
     */
    public function trainingSchedule()
    {
        return view('frontend.training.training-schedule');
    }
}
