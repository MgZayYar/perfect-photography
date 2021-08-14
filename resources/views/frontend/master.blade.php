<!DOCTYPE html>
<html>
<head>
	<title>Perfect Photography</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link rel="stylesheet" href="{{asset('frontendtemplate/bootstrap/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/bootstrap/icofont/icofont.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/bootstrap/boxicons/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/bootstrap/venobox/venobox.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/bootstrap/owl.carousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/bootstrap/aos/aos.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/css/style.css')}}">
</head>
<body>
  <div class="container-fluid">
    @yield('navbar')
  </div>
  <header id="header" class="d-flex align-items-center">
    <div class="container">

      <div class="logo d-block d-lg-none">
        <a href="#"><img src="images/logo2.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="nav-inner">
          <li class="active"><a href="{{route('index')}}">Home</a></li>
          <li><a href="{{route('about')}}">About</a>
          <li class="drop-down"><a href="#">Photography</a>
            <ul>
              @foreach($photographies as $photography)
              <li class="drop-down"><a href="#">{{$photography->name}}</a>

               
                <ul>
                  @foreach($photography->subphotographies as $subphotography )
                  <li><a href="{{route('collection',$subphotography->id)}}">{{$subphotography->name}}</a></li>
                  @endforeach
                </ul>

              
              </li>
               @endforeach
            </ul>
          </li>

          <li class="nav-logo"><a href="{{route('index')}}"><img src="images/logo2.jpg" width="70" alt="" class="img-fluid"></a></li>

          <li><a href="{{route('package')}}">Packages</a></li>
          <li><a href="{{route('contact')}}">Contact</a></li>
          <li><a href="{{route('weddingdress')}}">Wedding Dress</a></li>


        </ul>
      </nav>

    </div>
  </header>

 <div class="container-fluid">
    @yield('content')
 </div>  


<!-- footer -->
  <footer id="footer">

  <!--   <div class="footer-top">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header" class="scrollto footer-logo"><img src="images/logo2.jpg" alt=""></a>
            <h3>Perfect</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div> -->

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Perfect</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Perfect Studio</a>
      </div>
    </div>
  </footer>

  <script src="{{asset('frontendtemplate/bootstrap/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bootstrap/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bootstrap/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bootstrap/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontendtemplate/bootstrap/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bootstrap/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bootstrap/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bootstrap/aos/aos.js')}}"></script>
  <script src="{{asset('frontendtemplate/bootstrap/js/main.js')}}"></script>

</body>
</html>