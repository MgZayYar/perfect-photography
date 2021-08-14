<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Photography;
use App\Subphotography;
use App\Type;
use App\Package;
use App\Weddingdress;
use App\Collection;


class FrontendController extends Controller
{
    public function index($value='')
    {
        $photographies = Photography::all();
        $subphotographies = Subphotography::all();

    	return view('frontend.index',compact('photographies','subphotographies'));
    }
    
     public function about($value='')
    {
         $photographies = Photography::all();
         $subphotographies = Subphotography::take(4)->get();
        return view('frontend.about',compact('photographies','subphotographies'));
    }
    
     public function contact($value='')
    {
        $photographies = Photography::all();
    	return view('frontend.contact',compact('photographies'));
    }
    
     public function booking($value='')
    {
        $photographies = Photography::all();
    	return view('frontend.booking',compact('photographies'));
    }
    
    public function type($value='')
    {
        $types = Type::all();
        return view('frontend.type',compact('types'));
    }
    
     public function package($value='')
    {
        $photographies = Photography::all();
        $subphotographies = Subphotography::all();
        $packages = Package::all();
        return view('frontend.package',compact('packages','photographies','subphotographies'));
    }
     public function weddingdress($value='')
    {   
        $photographies = Photography::all();
        $weddingdresses = Weddingdress::all();
        return view('frontend.weddingdress',compact('weddingdresses','photographies'));
    }

     public function collection($value='')
    {
        $photographies = Photography::all();
        $collections = Collection::all();
        return view('frontend.collection',compact('photographies','collections'));
}
}
