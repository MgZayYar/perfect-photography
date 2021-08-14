@extends('frontend.master')

@section('content')

<section id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
            <div class="form-header">
              <h1>Book Your Photographic</h1>
            </div>
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <span class="form-label">Name</span>
                    <input class="form-control" type="text" required name="name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <span class="form-label">Phone no</span>
                    <input class="form-control" type="text" required name="phone">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <span class="form-label">Email</span>
                    <input type="email" name="emil" class="form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <span class="form-label">Booking date</span>
                   <input type="date" name="booking" class="form-control">
                  </div>
                </div>                
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <span class="form-label">Description</span>
                    <textarea class="form-control" name="description"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-btn">
                <button class="submit-btn">Book Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection