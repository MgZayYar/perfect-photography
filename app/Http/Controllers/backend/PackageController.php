<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package;
use App\Subphotography;
use App\Type;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Package::all();
        return view('backend.packages.index',compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subphotography = Subphotography::all();
        $type = Type::all();
        $package = Package::all();
        return view('backend.packages.create',compact('type','subphotography','package'));
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
            'photo'=>'required',
            'photo.*'=>'required|mimes:jpeg,bmp,png,jpg,webp',
            'subphotography_id'=>'required',
            'type_id'=>'required',
            'price'=>'required',
            
        ]);

        if($request->hasfile('photo'))
        {
            $i=1;
            foreach ($request->file('photo') as $file) {
                $imageName= time().$i.'.'.$file->extension();
                $file->move(public_path('images'),$imageName);
                $data[] ='images/'.$imageName;
                $i++;
            }
        }

            $package = new Package;
            $package->subphotography_id = $request->subphotography_id;
            $package->type_id = $request->type_id;
            $package->price = $request->price;
            $package->photo = json_encode($data);

            $package->save();
            //dd($package);die();

            return redirect()->route('packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.packages.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subphotography = Subphotography::all();
        $type = Type::all();
        $package = Package::find($id); 
         return view('backend.packages.edit',compact('subphotography','type','package'));
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
            'photo'=>'required',
            'photo.*'=>'sometimes|mimes:jpeg,bmp,png,jpg,webp',
            'subphotography_id'=>'required',
            'type_id'=>'required',
            'price'=>'required',
            
        ]);

if ($request->hasFile('photo')) 
{
            $i=1;
            foreach ($request->file('photo') as $file) {
                $imageName= time().$i.'.'.$file->extension();
                $file->move(public_path('images/packages'),$imageName);
                $data[] ='images/packages/'.$imageName;
                $i++;
            }
             foreach (json_decode($request->oldphoto) as $oldphoto){
                if(\File::exists(public_path($oldphoto))){
                    \File::delete(public_path($oldphoto));
                }
            }        
           
        }else{
            $data = json_decode($request->oldphoto);
        }
            $package = Package::find($id);
            $package->photo = $data;
            $package->subphotography_id = $request->subphotography_id;
            $package->type_id = $request->type_id;
            $package->price = $request->price;
            $package->photo = json_encode($data);

            $package->save();


            return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        $package -> delete();
        return redirect()->route('packages.index'); 
    }
}
