<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use Session;


class BannerController extends Controller
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
        $banners = Banner::latest()->paginate(5);
    
        return view('banners_list',compact('banners'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners.create');
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
            'image' => 'required',
        ]);
    // $data= new Postimage();
        // dd($request->image);
        // if($request->file('image')){
        //     $file= $request->file('image');
        //     $filename= date('YmdHi').$file->getClientOriginalName();
        //     $file-> move(public_path('public/Image'), $filename);
        //     $request->image= $filename;
        // }
        // dd($request->image);
      $imageName = time().'-'.$request->image->getClientOriginalName();
    // $request->image->move(public_path('images'), $imageName);
    $request->image->storeAs('public/images', $imageName);
    // dd($imageName);
   $store_array=array('title'=>$request->title,'image'=>$imageName,'type'=>$request->type);
        Banner::create($store_array);
     
        return redirect()->route('banners')
                        ->with('success','Banner created successfully.');
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
         $banner =Banner::where('id', $id)->first();
         // dd($banner);
        return view('banners.show', compact(['banner']));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id='')
    {                                                                     
        $banner =Banner::where('id', $id)->first();
        return view('banners.edit', compact('banner'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Banner $banner)
    {
        // dd($banner->image);
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);
    // dd($request->banner_id);
         $imageName = '';
    if ($request->hasFile('image')) {
      $imageName = $request->type.'-'.time() . '.' . $request->image->extension();
      $request->image->storeAs('public/images', $imageName);
      if ($banner->image) {
        Storage::delete('public/images/' . $banner->image);
      }
    } else {
      $imageName = $banner->image;
    }
         $banner = Banner::where('id',$request->banner_id)->first();
         
        // Getting values from the blade template form
        $banner->title =  $request->title;
        // dd($banner->title);
        $banner->image = $request->image;
        $banner->type = $request->type;
        $banner->update();
        // Banner::where('id',$request->id)->update($banner);
    
        return redirect()->route('banners')
                        ->with('success','Banner updated successfully');
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
        $banner =Banner::where('id',$id)->first();
        Storage::delete('public/images/' . $banner->image);
        Banner::where('id',$id)->delete();
    
        return redirect()->route('banners')
                        ->with('success','Banner deleted successfully');
    }
    


        

        
    




}
