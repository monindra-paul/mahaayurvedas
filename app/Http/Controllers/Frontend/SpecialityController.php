<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function speciality(){
        return view('frontend.speciality.speciality');
    }
}
