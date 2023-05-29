<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Session;


class ContactController extends Controller
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
 //dd(11);
        return view('frontend.front.home');                                                                                                                                                                                                                  
    }
   public function store(Request $request)
{
// dd($request->all());
    $validatedData = $request->validate([
        'fullname' => 'required|max:50',
        'email' => 'required|email',
        'phoneno' => 'required|min:10',
        'hotel' => 'required',
        'state' => 'required',
        'city' => 'required',
        'zip' => 'required|numeric',
        'bookno' => 'required',
        'comments' => 'required',
    ]);
    $arraydata=array('name'=>$request->fullname,'email'=>$request->email,'phoneno'=>$request->phoneno,'hotel'=>$request->hotel,'state'=>$request->state,'city'=>$request->city,'zip'=>$request->zip,'bookref_no'=>$request->bookno,'comments'=>$request->comments);
    Contact::create($arraydata);

    return view('frontend.front.contact');

}
   
        
   public function contacts()
    {
        $contacts=Contact::all();
        return view('contacts_view', compact(['contacts']));
    }  

   
    


        

        
    




}
