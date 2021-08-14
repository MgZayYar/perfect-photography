<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Collection;
use App\Subphotography;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::all();
        return view('backend.collections.index',compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subphotographies = Subphotography::all();
        $collections = Collection::all(); 
        return view('backend.collections.create',compact('subphotographies','collections'));
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
            'subphotography_id' => 'required',
            'photo' => 'required|mimes:jpeg,bmp,png,jpg,webp'
        ]);

       $imageName= time().'.'.$request->photo->extension();
       $request->photo->move(public_path('images'),$imageName);
       $filepath ='images/'.$imageName;

        $collections = new Collection;
        $collections->subphotography_id = $request->subphotography_id;
        $collections->photo = $filepath;


        $collections->save();

        return redirect()->route('collections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subphotographies = Subphotography::all();
        $collections = Collection::find($id); 
         return view('backend.collections.edit',compact('subphotographies','collections'));
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
            'subphotography_id' => 'required',
            'photo' => 'sometimes|mimes:jpeg,bmp,png,jpg,webp'
        ]);

        if ($request->hasFile('photo')) {
            
        $imageName= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
            $filepath ='images/'.$imageName;   
         
        }else{
            $filepath = $request->oldphoto;
        }
            
            $collections =  Collection::find($id);
            $collections->subphotography_id = $request->subphotography_id;
            $collections->photo = $filepath;
            $collections->save();

            return redirect()->route('collections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collections = Collection::find($id);
        $collections -> delete();
        return redirect()->route('collections.index');
    }
}
