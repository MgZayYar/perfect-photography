@extends('frontend.master')

@section('content')

<section id="wedding" class="wedding">
      <div class="container-fluid">
        <div class="section-title" data-aos="fade-up">
          <h2 style="text-align: center;" class="my-5" >Wedding Photography</h2>
        </div>
        <div class="row">
          @foreach($types as $type)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="{{$type->photo}}" class="img-fluid" alt="">
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