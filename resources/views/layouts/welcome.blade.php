@extends('layouts.app')
@section('content')
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="">IT<span>.</span>Community</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
           <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
           {{-- <li><a class="nav-link scrollto" href="#footer">Profile</a></li> --}}
        </ul> 
      </nav>
    
    </div>
  </header>
  <section id="hero" class="d-flex align-items justify-content-center">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        @if(Auth::user()->role_id == 1)
        <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="bi bi-people-fill"></i>
              <h3><a href="{{route('userList')}}">Users</a></h3>
            </div>  
          </div>
          <div class="col-xl-2 col-md-4 ">
            <div class="icon-box">
              <i class="ri-calendar-todo-line"></i>
              <h3><a href="{{route('categoryList')}}">Categories</a></h3>
            </div>
          </div>
        </div>
        @endif
        <div class="mb-3"></div>
        <div class="">
          <div class="icon-box">
            <i class="bi bi-globe"></i>
            <h3><a href="{{route('categoryIndex')}}">Community Directions</a></h3>
          </div>
        </div>    
      </section>
  <main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-9.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://t.me/dont_stop_m"><i class="bi bi-telegram"></i></a>
                  <a href="https://www.facebook.com/mirshoodaslonov/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/mirshood_/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/mirshodaslonov/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mirshod Aslonov</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-telegram"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-telegram"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-telegram"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
      
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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

