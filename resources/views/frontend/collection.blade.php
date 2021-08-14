@extends('frontend.master')

@section('content')

</section>
  <!-- wedding photography -->
  <section id="wedding" class="wedding">
 
      <div class="container-fluid">
        <div class="section-title" data-aos="fade-up">
          <h2 style="text-align: center;" class="my-5" >Collections</h2>
      </div>
         <hr>
        <div class="row">
          @foreach($collections as $collection)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="{{asset($collection->photo)}}" class="img-fluid" alt="">
                <div class="social">
                  
                </div>
              </div>
            </div>
          </div>
          @endforeach
         

      </div>
    </section>

@endsection