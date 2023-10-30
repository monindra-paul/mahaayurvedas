<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view ('admin.login.login');
    }

    public function authenticate(Request $request){
        
        $validator = Validator::make($request->all(),[

            'mobile'=> 'required',
            'password'=> 'required'

        ]);
        
        if($validator->passes()){

          if(Auth::guard('admin')->attempt(
            [
                'mobile'=> $request->mobile,
                'password' => $request->password
            ],
            $request->get('remember'))){

            $admin = Auth::guard('admin')->user();
            if($admin->role == 1){
              return redirect()->route('admin.dashboard');
            }
            else{
              Auth::guard('admin')->logout();
              return redirect()->route('admin.login.login')->with('error','You Are Not Authorized');
            }         
          }
          else{
            return redirect()->route('admin.login.login')->with('error' , 'Mobile No. or Password is Incorrect');
          }
        }
        
        else{
            return redirect()->route('admin.login.login')
            ->withErrors($validator)
            ->withInput($request->only('mobile'));
        }

    }
}
