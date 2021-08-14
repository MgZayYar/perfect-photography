@extends('frontend.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  @foreach($packages as $package)
          @php $i=0; $photos = json_decode($package->photo); @endphp
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset($photos[$i++])}}" class="d-block w-50" alt="...">
    </div>
    
  </div>
  @endforeach
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




{{--<section id="package" class="package">
      <div class="container-fluid">
        <div class="section-title" data-aos="fade-up">
          <h2 style="text-align: center;" class="my-5" >Our Packages</h2>
        </div>
        <div class="row">

          @foreach($packages as $package)
          @php $photos = json_decode($package->photo) @endphp

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch my-3">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="{{asset($photos[0])}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 my-3">
          	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          	<p>{{$package->price}}MMK</p>
          	<button style="background-color: green;">Enquire</button>
          </div>
          @endforeach

      </div>
    </div>
    </section>--}}


@endsection