<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appionment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{


    public function index(){

        
        $doctors = Doctor::orderBy('name','DESC')->where('status',1)->get();

        $data['doctors'] = $doctors;
        return view('frontend.appoinment.appoinment',$data);
    }

    public function postAppoinment(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'age'=>'required',
            'doctor'=>'required',
            'date'=>'required',
            'address'=>'required',
            'message'=>'required'
        ]);

        // $contact = new Contact;
        // $contact -> name = $request['name'];
        // $contact -> email = $request['email'];
        // $contact -> subject = $request['subject'];
        // $contact -> query = $request['query'];
        // $contact -> save();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'age' => $request->age,
            'doctor' => $request->doctor,
            'date' => $request->date,
            'address' => $request->address,
            'message' => $request->message,
        ];

        $createData = Appionment::insert($data);

        if($createData){
            return redirect()->back()->with('success','Thank You for Contacting Us. We will get back to you soon.');
        }
        else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }
}
