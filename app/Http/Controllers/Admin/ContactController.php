<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
       
        return view('admin.contact.index', compact('contacts'));
    }

    public function show($id){

        $contacts = Contact::find($id);
        if ( is_null ($contacts) ){
            
            return redirect('admin.contact.index');
        }
        else{
          
            $data = compact('contacts');
            return view('admin.contact.show')->with($data);
        }
    }
}
