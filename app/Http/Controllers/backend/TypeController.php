<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('backend.types.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.types.create');
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
            'photo' => 'required|mimes:jpeg,bmp,png,jpg,webp'
        ]);

       $imageName= time().'.'.$request->photo->extension();
       $request->photo->move(public_path('images'),$imageName);
       $filepath ='images/'.$imageName;

        $type = new Type;
        $type->name = $request->name;
        $type->photo = $filepath;


        $type->save();

        return redirect()->route('types.index')->with('success', 'An type has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.types.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::find($id); 
         return view('backend.types.edit',compact('type'));
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
            'name'=>'required|max:191',
            'photo' => 'sometimes|mimes:jpeg,bmp,png,jpg,webp'
        ]);

        if ($request->hasFile('photo')) {
            
        $imageName= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
            $filepath ='images/'.$imageName;   
            unlink($request->oldphoto);
        }else{
            $filepath = $request->oldphoto;
        }
            //data update
            $type =  Type::find($id); //need model
            $type->name = $request->name;
            $type->photo = $filepath;
            $type->save();

            return redirect()->route('types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::find($id);
        $type -> delete();
        return redirect()->route('types.index'); 
    }
}
