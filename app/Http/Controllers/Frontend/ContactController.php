<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.pages.contact');
    }


    public function postContact(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
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
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        $createData = Contact::insert($data);

        if($createData){
            return redirect()->back()->with('success','Thank You for Contacting Us. We will get back to you soon.');
        }
        else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }
}
