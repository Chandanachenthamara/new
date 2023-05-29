<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homecontent;
use App\Models\Hotel;
use Illuminate\Support\Facades\Storage;
use Session;


class ContentManageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        
    }

   
  
public function index()
    {
        $homecontents = Homecontent::latest()->paginate(5);
    
        return view('homecontents_list',compact('homecontents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homecontents.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
   
      
   $store_array=array('title'=>$request->title,'content'=>$request->content,'type'=>$request->type);
        Homecontent::create($store_array);
     
        return redirect()->route('homecontents')
                        ->with('success','Homecontent created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id='')
    {
        // dd($id);
         $homecontent =Homecontent::where('id', $id)->first();
         // dd($banner);
        return view('homecontents.show', compact(['homecontent']));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id='')
    {                                                                     
        $homecontent =Homecontent::where('id', $id)->first();
        return view('homecontents.edit', compact('homecontent'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Homecontent $homecontent)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
    
         $homecontent = Homecontent::where('id',$request->homecontent_id)->first();
         
        // Getting values from the blade template form 
        $homecontent->title =  $request->title;
        // dd($banner->title);
        $homecontent->content = $request->content;
        $homecontent->type = $request->type;
        $homecontent->update();
    
        return redirect()->route('homecontents')
                        ->with('success','Homecontents updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id="")
    {
        // dd($id);
        
        Homecontent::where('id',$id)->delete();
    
        return redirect()->route('homecontents')
                        ->with('success','Homecontent deleted successfully');
    }
    

public function hotel_index()
    {
        $hotels = Hotel::latest()->paginate(5);
    
        return view('hotels_list',compact('hotels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hotel_create()
    {
        return view('hotels.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hotel_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'image' => 'required',
        ]);
   
      
  $imageName = time().'-'.$request->image->getClientOriginalName();
    // $request->image->move(public_path('images'), $imageName);
    $request->image->storeAs('public/images', $imageName);
    // dd($imageName);
   $store_array=array('name'=>$request->name,'address'=>$request->address,'image'=>$imageName);
        Hotel::create($store_array);
     
        return redirect()->route('hotels')
                        ->with('success','HotelDetails created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function hotel_show($id='')
    {
        // dd($id);
         $hotel =Hotel::where('id', $id)->first();
         // dd($banner);
        return view('hotels.show', compact(['hotel']));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function hotel_edit($id='')
    {                                                                     
        $hotel =Hotel::where('id', $id)->first();
        return view('hotels.edit', compact('hotel'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function hotel_update(Request $request,Hotel $hotel)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'image' => 'required',
        ]);
    
         $imageName = '';
    if ($request->hasFile('image')) {
      $imageName = $request->type.'-'.time() . '.' . $request->image->extension();
      $request->image->storeAs('public/images', $imageName);
      if ($hotel->image) {
        Storage::delete('public/images/' . $hotel->image);
      }
    } else {
      $imageName = $hotel->image;
    }
         $hotel = Hotel::where('id',$request->hotel_id)->first();
         
        // Getting values from the blade template form
        $hotel->name =  $request->name;
        // dd($banner->title);
        $hotel->address = $request->address;
        $hotel->image = $request->image;
        $hotel->update();
    
        return redirect()->route('hotels')
                        ->with('success','HotelDetails updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function hotel_destroy($id="")
    {
        // dd($id);
        $hotel =Hotel::where('id',$id)->first();
        Storage::delete('public/images/' . $hotel->image);
        Hotel::where('id',$id)->delete();
    
        return redirect()->route('hotels')
                        ->with('success','HotelDetails deleted successfully');
    }
    


        

        
    




}
