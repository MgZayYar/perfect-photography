<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Weddingdress;

class WeddingdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weddingdress = Weddingdress::all();
        return view('backend.weddingdresses.index',compact('weddingdress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $weddingdress = Weddingdress::all();
        return view('backend.weddingdresses.create',compact('weddingdress'));
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
            'photo' => 'required|mimes:jpeg,bmp,png,jpg,webp'
        ]);

       $imageName= time().'.'.$request->photo->extension();
       $request->photo->move(public_path('images'),$imageName);
       $filepath ='images/'.$imageName;

        $weddingdress = new Weddingdress;
        $weddingdress->photo = $filepath;


        $weddingdress->save();

        return redirect()->route('weddingdresses.index');
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
        $weddingdress = Weddingdress::find($id); 
        return view('backend.weddingdresses.edit',compact('weddingdress'));
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
            'photo' => 'sometimes|mimes:jpeg,bmp,png,jpg,webp'
        ]);

        if ($request->hasFile('photo')) {
            
        $imageName= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
        $filepath ='images/'.$imageName;   
            
        }else{
            $filepath = $request->oldphoto;
        }
           
            $weddingdress =  Weddingdress::find($id);
            $weddingdress->photo = $filepath;
            $weddingdress->save();

            return redirect()->route('weddingdresses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $weddingdress = Weddingdress::find($id);
        $weddingdress -> delete();
        return redirect()->route('weddingdresses.index'); 
    }
}
