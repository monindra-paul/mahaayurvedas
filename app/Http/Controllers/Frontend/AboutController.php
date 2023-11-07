<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function about( $doctorSlug = null){

      $doctorSelected = "";

      if(!empty($doctorSlug)){
          $doctor = Doctor::where('slug',$doctorSlug)->first();
          $doctor = $doctor->where('id',$doctor->id);
          $doctorSelected = $doctor->id;
         }

      $doctors = Doctor::where('status',1)->get();
      $data['doctors'] = $doctors;

    return view('frontend.about.about',$data);
   }

   public function doctor($slug){
      $doctors = Doctor::where('slug',$slug)->first();


      $data['doctors'] = $doctors;

      return view('frontend.doctor.show',$data);
  }
}
