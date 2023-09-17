<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

use App\users;
use App\car;
use App\brand;
use App\show;
use App\cart;
use App\transaction;


class user_control extends Controller
{
    public function index(Request $request){
        $name = $request->input('search'); 
        $name1 = $request->input('b'); 
        $name2 = $request->input('p'); 
        $name3 = $request->input('a'); 
        $auth = Auth::check();
        $show = car::all();
        $showbran = brand::all();

        if($name != NULL){
            $show = car::where('car_name','like',"%$name%")->get();
            return view('/User/user_home',['cars'=>$show,'auth'=>$auth,'brans'=>$showbran]);
        }

        else if($name1 != NULL){
            $show = car::where('brand_id','=',"$name1")->get();
            return view('/User/user_home',['cars'=>$show,'auth'=>$auth,'brans'=>$showbran]);
        }

        else if($name2 != NULL ){
            $show = car::orderBy('price','desc')->get();
            return view('/User/user_home',['cars'=>$show,'auth'=>$auth,'brans'=>$showbran]);
        }
        else if($name3 != NULL ){
            $show = car::orderBy('car_name')->get();
            return view('/User/user_home',['cars'=>$show,'auth'=>$auth,'brans'=>$showbran]);
        }
        return view('/User/user_home',['cars'=>$show,'auth'=>$auth,'brans'=>$showbran]);
    }

    public function loginpage(){
        $auth = Auth::check();
        return view('/User/login',['auth'=>$auth]);
    }

    public function login(Request $request){
        
        $userlogin = $request->only('email','password');
        
        $this->validate($request,
        [
            'email'=>'required|email',
            'password' => 'required',
        ],
        [
            'email.required'=>'Email must not empty!',
            'email.email'=>'Email must be an email form!',
            'password.required' => 'Password must not empty!',
        ]
        );
        
        
        if(Auth::Attempt($userlogin) && Auth::User()->role == 'user'){
            return redirect()->to('/');
            
        }
        else if(Auth::Attempt($userlogin) && Auth::User()->role == 'admin'){
            return view('/Admin/admin_home',['auth'=>true]);
        }
        else{
            return back()->withInput()->withErrors(['email' => 'Email or Password is invalid']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function cart($id){
        $totalprice = 0;
        $auth = Auth::check();
        $cart = cart::where('user_id','=',"$id")->get();

        $id = Auth::User()->id;
        $car = cart::where('user_id','=',"$id")->count();

        foreach($cart as $c){
            $totalsum = car::where('id','=',"$c->car_id")->sum('price');
            $totalprice += $totalsum;
        }

        return view('/User/user_cart',['carts'=>$cart,'auth'=>$auth],compact('car','totalprice'));
    }

    public function compare($id){
        $auth = Auth::check();
        $show = car::find($id);
        $show1 = car::where('id','!=',"$id")->paginate(1);
        return view('/User/user_comper',['cars'=>$show,'cars1'=>$show1,'auth'=>$auth]);
    }
    public function show(Request $request){
        $name = $request->input('search');
        $auth = Auth::check();
        $show = show::get();
        $show = show::where('show_name','like',"%$name%")->get();
        if(!empty($request->input('s'))){
            $name = $request->input('s'); 
            $show = show::where('show_type','like',"%$name%")->get();
            return view('/User/user_show',['shows'=>$show,'auth'=>$auth]);
        }
        else if(!empty($request->input('w'))){
            $name = $request->input('w'); 
            $show = show::where('show_type','like',"%$name%")->get();
            return view('/User/user_show',['shows'=>$show,'auth'=>$auth]);
        }
            return view('/User/user_show',['shows'=>$show,'auth'=>$auth]);
    }

    public function productdetail($id){
        $auth = Auth::check();
        $show = car::find($id);
        return view('/User/user_productdetail',['cars'=>$show,'auth'=>$auth]);
    }

    public function productdetailinsert(Request $request,$user_id,$car_id){
        
        $insert = new \App\cart();

        $insert->user_id = $user_id;
        $insert->car_id = $car_id;
    
        $insert->save();

        return redirect('/');
    }

    public function productdetaildelete($id){
        $delete = cart::find($id);
        $delete->delete();
        return redirect()->back();
    }

    public function transaction(){
        $auth = Auth::check();
        $id = Auth::User()->id;
        $show = transaction::select( DB::raw("DATE(created_at) as date"),DB::raw("TIME(created_at) as time"))->where('user_id','=',"$id")->groupBy('created_at')->get();
        return view('/User/user_transaction',['transactions'=>$show,'auth'=>$auth]);
    }

    public function transactiondetail($date,$time){
        $auth = Auth::check();
        $id = Auth::User()->id;
        $show = transaction::where('created_at','=',"$date $time")->Where('user_id','=',"$id")->get();
        return view('/User/user_transactiondetail',['transactions'=>$show,'auth'=>$auth]);
    }

    public function transactioninsert(){
        $auth = Auth::check();
        $id = Auth::User()->id;
        $show = cart::where('user_id','=',"$id")->get();
        foreach($show as $s){
            $insert = new \App\transaction();

            $insert->user_id = $s->user_id;
            $insert->car_id = $s->car_id;
            $insert->save();

            $s->delete();
        }
        return redirect()->back();
    }
}
