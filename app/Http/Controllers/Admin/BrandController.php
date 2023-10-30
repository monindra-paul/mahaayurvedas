<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $brands = Brand::latest('id');

        if ($request->get('keyword')) {
            $brands = $brands->where('name', 'like', '%' . $request->keyword . '%');
        }
        $brands = $brands->paginate(10);

        return view('admin.brands.list', compact('brands'));
    }


    public function create()
    {
        return view('admin.brands.create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'slug' => 'required|unique:brands',

        ]);

        if ($validator->passes()) {

            $brand = new Brand();
            $brand->name = $request->name;
            $brand->slug = $request->slug;
            $brand->status = $request->status;
            $brand->save();

            $request->session()->flash('success', 'Brand Created Successfully');

            return response([
                'status' => true,
                'message' => 'Brand Created Successfully'
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
        $brand = Brand::find($id);

        if (empty($brand)) {
            $request->session()->flash('error', 'Record Not Found');
            return redirect()->route('brands.index');
        }

        $data['brand'] = $brand;
        return view('admin.brands.edit', $data);
    }


    public function update($id, Request $request)
    {


        $brand = Brand::find($id);

        if (empty($brand)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
            // return redirect()->route('sub-categories.index');
        }


        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'slug' => 'required|unique:brands,slug,' . $brand->id . ',id',
            'status' => 'required',

        ]);

        if ($validator->passes()) {

            $brand->name = $request->name;
            $brand->slug = $request->slug;
            $brand->status = $request->status;
            $brand->save();


            $request->session()->flash('success', 'Brand Updated Successfully');

            return response([
                'status' => true,
                'message' => 'Brand Updated Successfully'

            ]);
        } else {
            return response([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function destroy($id, Request $request)
    {

        $brand = Brand::find($id);

        if (empty($brand)) {
            $request->session()->flash('error', 'Record No Found');
            return response([
                'status' => false,
                'notFound' => true
            ]);
        }

        $brand->delete();

        $request->session()->flash('success', 'Brand Deleted Successfully');
        return response([
            'status' => true,
            'message' => 'Brand Deleted Successfully'

        ]);
    }
}
