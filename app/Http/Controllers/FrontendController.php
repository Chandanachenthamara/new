<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Homecontent;
use App\Models\Hotel;
use App\Models\Visits;
use App\Models\Newcustomer;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;


class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        
    }

   
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
 // dd(11);
        $banner =Banner::where('type', 1)->get();
        $homecontent =Homecontent::where('type', 1)->get();
        $home =Homecontent::where('type', 2)->get();
        return view('frontend.front.home',compact(['banner', 'homecontent', 'home']));                                                                                                                                                                                                                  
    }

   
        
    

    public function about()
    {
        $homecontent =Homecontent::where('type', 1)->get();
        return view('frontend.front.about',compact('homecontent'));
    }

    public function contact()
    {
        
        return view('frontend.front.contact');
    }

    public function services()
    {


        return view('frontend.front.services');
    }
    public function hotel()
    {
        $hotel =Hotel::all();
        return view('frontend.front.hotel',compact('hotel'));
    }

    public function faq()
    {
        return view('frontend.front.faq');
    }

    public function example()
    {
        return view('frontend.front.example');
    }
     public function register()
    {
        return view('frontend.front.register');
    }
    
    public function registerstore(Request $request)
    {
       // dd($request);

      

        // $validatedData = $request->validate([
        // 'fname' => 'required|max:50',
        // 'lname' => 'required|max:50',
        // 'address' => 'required',
        // 'phone' => 'required|min:10',
        // 'email' => 'required|email',
        // 'username' => 'required',
        // 'password' => 'min:6|required',
        // 'repassword' => 'min:6',



        $validatedData = $request->validate([
        'fname' => 'required|max:50',
        'lname' => 'required|max:50',
        'address' => 'required',
        'phone' => 'required|min:10',
        'email' => 'required|email',
        'username' => 'required',
        'password' => 'min:6|required',
        // 'repassword' => 'min:6',
        
        
    ]);
        
        
      
//dd($request);
        $customer = new Newcustomer();
        $customer->fname = $request->input('fname');
        $customer->lname = $request->input('lname');
        $customer->address = $request->input('address');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->username = $request->input('username');
        $customer->password = Hash::make($request->input('password'));
        $customer->save();


        return redirect()->route('frontend-register')->with('success', ' submitted Sucessfully');
    
     } 

   

}
