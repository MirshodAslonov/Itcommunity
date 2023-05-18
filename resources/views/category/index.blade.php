@extends('layouts.app')
@section('content')
  <main id="main">
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>It.Community</h2>
          <p>Directions</p>
        </div>
        <div class="row">
            @foreach ($categories as $category )
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">                
                <div class="member-info">
                  <a href="{{route('postList',['category_id'=>$category->id])}}"><h4>{{$category->title}}</h4></a>
                </div>
              </div>
            </div> 
            @endforeach
         
    </section><!-- End Team Section -->
  </main><!-- End #main -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
            <div class="footer-info">
              <h3>L<span>.</span>Mir</h3>
                <strong>Phone:</strong> (90)-019-65-03 <br>
                <strong>Email:</strong> mirshodaslonov@gmail.com<br>
              <div class="social-links mt-3">
                <a href="https://github.com/MirshodAslonov" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://www.facebook.com/mirshoodaslonov/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/mirshood_/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/mirshodaslonov/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="https://t.me/dont_stop_m" class="telegram"><i class="bx bxl-telegram"></i></a>
              </div>
            </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>LoroMir</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Maked by <a href="https://t.me/dont_stop_m">Mirshod Aslonov</a>
      </div>
    </div>
  </footer><!-- End Footer -->
@endsection

