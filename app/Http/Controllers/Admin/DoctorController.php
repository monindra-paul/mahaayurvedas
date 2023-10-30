<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorImage;
use App\Models\TempImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
Use Image;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(Request $request)
    {

        $doctors = Doctor::latest();

        // if (!empty($request->get('keyword'))) {
        //     $categories =  $categories->where('name', 'like', '%' . $request->get('keyword') . '%');
        // }

        $doctors =  $doctors->paginate(10);
        return view('admin.doctor.list', compact('doctors'));
    }


    public function create()
    {

        return view('admin.doctor.create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'designation' => 'required',
            'slug' => 'required|unique:doctors',

        ]);

        if ($validator->passes()) {

            $doctor = new Doctor();
            $doctor->name = $request->name;
            $doctor->slug = $request->slug;
            $doctor->designation = $request->designation;
            $doctor->status = $request->status;
            $doctor->showHome = $request->showHome;
            $doctor->save();

            //save image

            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $doctor->id . '.' . $ext;

                $sPath = public_path() .'/temp/'.$tempImage->name;
                $dPath = public_path() .'/uploads/doctor/'.$newImageName;
                File::copy($sPath, $dPath);

                //resize

                $dPath = public_path() .'/uploads/doctor/thumb/'.$newImageName;
                $img = Image::make($sPath);
                // $img->resize(300, 200);
                $img->fit(350, 550, function ($constraint) {
                    $constraint->upsize();
                });
                $img->save($dPath);


                $doctor->image = $newImageName;
                $doctor->save();
            }



            $request->session()->flash('success', 'Doctor Added Successfully');

            return response()->json([
                'status' => true,
                'message' => 'Doctor Added Successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function edit($id, Request $request)
    {

        $doctors = Doctor::find($id);
        if (empty($doctors)) {
            $request->session()->flash('error', 'Not Found');
            return redirect()->route('doctor.index');
            // return response()->json([
            //     'status'=>false,
            //     'notFound'=>true,
            //     'message'=>'Category Not Found',
            // ]);
        }


        return view('admin.doctor.edit', compact('doctors'));
    }


    public function update($id, Request $request)
    {
        $doctor = Doctor::find($id);
        if (empty($doctor)) {
            $request->session()->flash('error', 'Doctor Not Found');
            return response()->json([
                'status' => false,
                'notFound' => true,
                'message' => 'Doctor Not Found',
            ]);
            // return redirect()->route('categories.index');
        }


        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'designation' => 'required',
            'slug' => 'required|unique:doctors,slug,' . $doctor->id . ',id',

        ]);

        if ($validator->passes()) {

            $doctor->name = $request->name;
            $doctor->slug = $request->slug;
            $doctor->designation = $request->designation;
            $doctor->status = $request->status;
            $doctor->showHome = $request->showHome;
            $doctor->save();

            $oldImage = $doctor->image;

            //save image

            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);

                $newImageName = $doctor->id . '-' . time() . '.' . $ext;

                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/uploads/doctor/' . $newImageName;
                File::copy($sPath, $dPath);

                //resize

                $dPath = public_path() . '/uploads/doctor/thumb/' . $newImageName;
                $img = Image::make($sPath);
                // $img->resize(300, 200);
                $img->fit(350, 550, function ($constraint) {
                    $constraint->upsize();
                });
                $img->save($dPath);



                $doctor->image = $newImageName;
                $doctor->save();


                //delete old images

                File::delete(public_path() . '/uploads/doctor/thumb/' . $oldImage);
                File::delete(public_path() . '/uploads/doctor/' . $oldImage);
            }



            $request->session()->flash('success', 'Doctor Updated Successfully');

            return response()->json([
                'status' => true,
                'message' => 'Doctor Updated Successfully'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function destroy($id, Request $request)
    {

        $doctor = Doctor::find($id);
        if (empty($doctor)) {
            $request->session()->flash('error', 'Doctor Not Found');
            return response()->json([
                'status' => true,
                'message' => 'Doctor not found',
            ]);
            // return redirect()->route('categories.index');
        }

        File::delete(public_path() . '/uploads/doctor/thumb/' . $doctor->image);
        File::delete(public_path() . '/uploads/doctor/' . $doctor->image);

        $doctor->delete();
        $request->session()->flash('success', 'Doctor Deleted Successfully');

        return response()->json([
            'status' => true,
            'message' => 'Doctor Deleted Successfully',
        ]);
    }
}