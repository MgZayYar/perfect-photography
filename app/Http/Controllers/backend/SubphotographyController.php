<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subphotography;
use App\Photography;

class SubphotographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subphotography = Subphotography::all();
        return view('backend.subphotographies.index',compact('subphotography'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $photographies = Photography::all();
         $subphotographies = Subphotography::all(); //to show all data from Subategory.php
        // dd($photographies); die();
         return view('backend.subphotographies.create',compact('photographies','subphotographies'));

        
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
            'name' => 'required|max:191',
            'photography_id' => 'required',
            'photo' => 'required|mimes:jpeg,bmp,png,jpg,webp'
        ]);

       $imageName= time().'.'.$request->photo->extension();
       $request->photo->move(public_path('images'),$imageName);
       $filepath ='images/'.$imageName;

        $subphotography = new Subphotography;
        $subphotography->name = $request->name;
        $subphotography->photography_id = $request->photography_id;
        $subphotography->photo = $filepath;


        $subphotography->save();

        return redirect()->route('subphotographies.index')->with('success', 'An subphotography has been successfully added');

   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.subphotographies.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photographies = Photography::all();
        $subphotography = Subphotography::find($id); 
         return view('backend.subphotographies.edit',compact('photographies','subphotography'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
            'name'=>'required|min:5|max:191',
            'photography_id' => 'required',
            'photo' => 'sometimes|mimes:jpeg,bmp,png,jpg,webp'
        ]);

        if ($request->hasFile('photo')) {
            
        $imageName= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
            $filepath ='images/'.$imageName;   
            //unlink($request->oldphoto);
        }else{
            $filepath = $request->oldphoto;
        }
            //data update
            $subphotography =  Subphotography::find($id); //need model
            $subphotography->name = $request->name;
            $subphotography->photography_id = $request->photography_id;
            $subphotography->photo = $filepath;
            $subphotography->save();

            return redirect()->route('subphotographies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subphotography = Subphotography::find($id);
        $subphotography -> delete();
        return redirect()->route('subphotographies.index'); 
    }
}
