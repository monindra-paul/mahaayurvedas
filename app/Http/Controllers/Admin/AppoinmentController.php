<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appionment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    public function index(){
        $appoinments = Appionment::all();
       
        return view('admin.appoinment.index', compact('appoinments'));
    }

    public function show($id){

        $appoinments = Appionment::find($id);
        if ( is_null ($appoinments) ){
            
            return redirect('admin.appoinment.index');
        }
        else{
          
            $data = compact('appoinments');
            return view('admin.appoinment.show')->with($data);
        }
    }
}
