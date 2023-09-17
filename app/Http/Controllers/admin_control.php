<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

use App\car;
use App\brand;
use App\show;

class admin_control extends Controller
{
    public function index(){
        $auth = Auth::check();
        return view('/Admin/admin_home',['auth'=>$auth]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    // Car

    public function car(){
        $auth = Auth::check();
        $show = brand::get();
        return view('/Admin/admin_add_car',['brans'=>$show ,'auth'=>$auth]);    
    }

    public function addcar(Request $request){

        $this->validate($request,
        [
            'name' => 'required|unique:App\car,car_name',
            'vtype' => 'required',
            'engine' => 'required',
            'price' => 'required|numeric|min:100000',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:10000',
        ],
        [
            'name.required' => 'Car Name must not empty!',
            'name.unique' => 'Car Name already taken!',
            'vtype.required' => 'Vehicle Type must not empty!',
            'engine.required' => 'Engine name must not empty!',
            'price.required' => 'Price must not empty!',
            'price.numeric' => 'Price must be numeric!',
            'price.min' => 'Price must be at least 100000!',
            'file.required' => 'Image must not empty!',
            'file.file' => 'This file is not a File!',
            'file.image' => 'This file is not a Image!',
            'file.mimes' => 'This file extension must be (jpeg,png,jpg)!',
            'file.max' => 'This file is over 10000KB.',
        ]
        );
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/photo', $filename);

        $insert = new \App\car();

        $insert->car_name = request('name');
        $insert->brand_id = request('brand');
        $insert->tipe = request('vtype');
        $insert->engine = request('engine');
        $insert->transmisi = request('transmision');
        $insert->seat = request('seat');
        $insert->price = request('price');
        $insert->photo = $filename;
    
        $insert->save();
        return redirect()->back();
    }

    public function viewcar(){
        $auth = Auth::check();
        $show = car::get();
        return view('/Admin/admin_view_car',['cars'=>$show,'auth'=>$auth]);
    }
    
    public function deletecar($id){

        $file = car::find($id);
        $filename = $file->image;
        File::delete(public_path()."/photo/$filename");

        $delete = car::find($id);
        $delete->delete();

        return redirect()->back();
    }

    // Brand

    public function bran(){
        $auth = Auth::check();
        return view('/Admin/admin_add_bran',['auth'=>$auth]);
    }
    
    public function addbran(Request $request){

        $this->validate($request,
        [
            'name' => 'required|unique:App\brand,bran',
        ],
        [
            'name.required' => 'Brand Name must not empty!',
            'name.unique' => 'Brand Name already taken!',
        ]
        );

        $insert = new \App\brand();
        
        $insert->bran = request('name');
    
        $insert->save();
        return redirect()->back();
    }

    public function viewbran(){
        $auth = Auth::check();
        $showbrand = brand::get();
        return view('/Admin/admin_view_bran',['brans'=>$showbrand,'auth'=>$auth]);
        
    }

    //show

    public function show(){
        $auth = Auth::check();
        return view('/Admin/admin_add_show',['auth'=>$auth]);    
    }

    public function addshow(Request $request){

        $this->validate($request,
        [
            'name' => 'required|unique:App\show,show_name',
            'address' => 'required|unique:App\show,address',
            'hour' => 'required',
            'phone' => 'required|digits_between:6,10',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:10000',
        ],
        [
            'name.required' => 'Shop Name must not empty!',
            'name.unique' => 'Shop Name already taken!',
            'address.required' => 'Address must not empty!',
            'address.unique' => 'Address already taken!',
            'hour.required' => 'Hour must not empty!',
            'phone.required' => 'Phone number must not empty!',
            'phone.numeric' => 'Phone number must be numeric!',
            'phone.digits_between' => 'Phone number must be between 6 and 10 digits number!',
            'file.required' => 'Image must not empty!',
            'file.file' => 'This file is not a File!',
            'file.image' => 'This file is not a Image!',
            'file.mimes' => 'This file extension must be (jpeg,png,jpg)!',
            'file.max' => 'This file is over 10000KB.',
        ]
        );
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->move(public_path().'/photo', $filename);

        $insert = new \App\show();

        $insert->show_name = request('name');
        $insert->show_type = request('st');
        $insert->address = request('address');
        $insert->hour = request('hour');
        $insert->phone = request('phone');
        $insert->photo = $filename;
    
        $insert->save();
        return redirect()->back();
    }
    
    public function viewshow(){
        $auth = Auth::check();
        $show = show::get();
        return view('/Admin/admin_view_show',['shows'=>$show,'auth'=>$auth]);
    }

    public function deleteshow($id){

        $file = show::find($id);
        $filename = $file->image;
        File::delete(public_path()."/photo/$filename");

        $delete = show::find($id);
        $delete->delete();

        return redirect()->back();
    }
}
