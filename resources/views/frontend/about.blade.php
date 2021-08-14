@extends('frontend.master')

@section('content')

<section id="wedding" class="wedding">
    <hr>
      <div class="container-fluid">
        <div class="section-title" data-aos="fade-up">
          <h2 style="text-align: center;" class="my-5" >Collections</h2>
        </div>
        <div class="row">
          @foreach($subphotographies as $subphotography)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="{{$subphotography->photo}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
         

      </div>
    </section>

@endsection