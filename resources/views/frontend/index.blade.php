@extends('frontend.master')

@section('navbar')
<!-- <section id="hero" class="d-none d-lg-flex align-items-center fixed-top ">
  <div class="hero-container d-flex align-items-center">
    <div class="contact-info mr-auto">
      <ul>
        <li><i class="icofont-envelope"></i><a href="#">perfect1122@gmail.com</a></li>
        <li><i class="icofont-phone"></i> +95 9694225520</li>
        <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Mon-Sun 9am - 5pm</li>
      </ul>
    </div>
    <div class="login">
      <ul>
        <li><a href="#">Login</a></li>
        <li> <a href="#">Register</a></li>
      </ul>
    </div>
  </div>
</section> -->
@endsection

@section('content')
<div class="container-fluid">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="9"></li>

    </ol>
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/perfect/banner-10.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/perfect/banner-9.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/perfect/pwo1.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/perfect/5.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/perfect/9.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/perfect/38.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/perfect/54.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/perfect/go11.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/perfect/fi3.jpg" class="d-block" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/perfect/c13.jpg" class="d-block" alt="...">
      </div>
      </div>
      </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Welcome -->
<section class="welcome">
  <div class="section-title" data-aos="fade-up">
    <h2 style="text-align: center;" class="my-5" >Warmly Welcome</h2>
  </div>
  <div class="welcome">
    <p class="text-center">Please give us a few seconds and look our packages.</br>You'll see our beautiful packages.We promise you'll never regert if you choose us.We all give the sweetest services with our heart.</p>
  </div>
  
</section>
  <!-- wedding photography -->
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
                  <a href=""><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
         

      </div>
    </section>
    
      

    <section id="family">
      <hr>
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2 style="text-align: center;" class="my-5" >Family Photography</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 d-flex align-items-stretch my-5">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-img">
                <img src="images/perfect/fi2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>


<div id="sec04" class="container">
    <h2 class="text-center">My Satisfied Customer Says</h2>
    <p class="text-center"><i>Thanks for your valuable feedbacks & your words make us happy and get strength to go on.</i></p>
  </div>
  <div id="carouselIndicators" class="carousel slide my-5" data-ride="carousel">
    <div class="carousel-inner container">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bx-wink-smile'></i>
              
            </div>
            <p class="text-center mt-3">Perfect! Worth it to call perfect.</p>
            <h4 class="mt-5 text-center">Yan Paing</h4>
            <h6 class="text-center">Prewedding Photos Customer</h6>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bx-happy-heart-eyes'></i>
            </div>
            <p class="text-center mt-3">I love it.Cameraman and the staffs are very nice.</p>
            <h4 class="mt-5 text-center">Myat Noe Aye</h4>
            <h6 class="text-center">Graduation Photos Customer</h6>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bxs-heart' ></i>
            </div>
            <p class="text-center mt-3">Last week,we took the family photos in Perfect Studio.Now we got it.Perfect is right time and all the photos are very beautiful.</p>
            <h4 class="mt-5 text-center">May Thawdar</h4>
            <h6 class="text-center">Family Photos Customer</h6>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bxs-heart-circle' ></i>
            </div>
            <p class="text-center mt-3">My Baby photos are so sweet.Thanks Perfect!</p>
            <h4 class="mt-5 text-center">Thida Khine</h4>
            <h6 class="text-center">Baby Photos Customer</h6>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bx-happy' ></i>
            </div>
            <p class="text-center mt-3">Thanks for very patient.:-P We all got the really really perfect photos.</p>
            <h4 class="mt-5 text-center">Phyo Htet Kyaw</h4>
            <h6 class="text-center">Friends Photos Customer</h6>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bx-happy' ></i>
            </div>
            <p class="text-center mt-3">Thanks for giving our precious memory.</p>
            <h4 class="mt-5 text-center">Naing Phone Kyaw</h4>
            <h6 class="text-center">Wedding Photos Customer</h6>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bxs-heart' ></i>
            </div>
            <p class="text-center mt-3">Last week,we took the family photos in Perfect Studio.Now we got it.Perfect is right time and all the photos are very beautiful.</p>
            <h4 class="mt-5 text-center">May Thawdar</h4>
            <h6 class="text-center">Family Photos Customer</h6>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bx-happy-heart-eyes'></i>
            </div>
            <p class="text-center mt-3">I love it.Cameraman and the staffs are very nice.</p>
            <h4 class="mt-5 text-center">Myat Noe Aye</h4>
            <h6 class="text-center">Graduation Photos Customer</h6>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bx-wink-smile'></i>
              
            </div>
            <p class="text-center mt-3">Perfect! Worth it to call perfect.</p>
            <h4 class="mt-5 text-center">Yan Paing</h4>
            <h6 class="text-center">Prewedding Photos Customer</h6>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bx-happy-heart-eyes'></i>
            </div>
            <p class="text-center mt-3">I love it.Cameraman and the staffs are very nice.</p>
            <h4 class="mt-5 text-center">Myat Noe Aye</h4>
            <h6 class="text-center">Graduation Photos Customer</h6>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bxs-heart' ></i>
            </div>
            <p class="text-center mt-3">Last week,we took the family photos in Perfect Studio.Now we got it.Perfect is right time and all the photos are very beautiful.</p>
            <h4 class="mt-5 text-center">May Thawdar</h4>
            <h6 class="text-center">Family Photos Customer</h6>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div style="text-align: center;">
              <i class='bx bxs-heart-circle' ></i>
            </div>
            <p class="text-center mt-3">My Baby photos are so sweet.Thanks Perfect!</p>
            <h4 class="mt-5 text-center">Thida Khine</h4>
            <h6 class="text-center">Baby Photos Customer</h6>
          </div>
        </div>
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselIndicators" data-slide-to="1"></li>
      <li data-target="#carouselIndicators" data-slide-to="2"></li>
    </ol>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
      <span class="carousel-prev" aria-hidden="true"><i class="fas fa-chevron-left fa-2x prev"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
      <span class="carousel-next" aria-hidden="true"><i class="fas fa-chevron-right fa-2x next"></i></span>
    </a>
  </div>
@endsection