@extends('layouts.main')

@section('title')
<title>Abdelali Abouelhassan | My Portfolio</title>

<meta property="og:title" content="Experienced Full-Stack Web Developer and Mobile App Developer" />
<meta property="og:description" content="Discover the diverse skills and expertise of a seasoned full-stack web developer and mobile app developer. With a focus on creating custom solutions and optimizing for peak performance and SEO, I am dedicated to delivering high-quality work that exceeds client expectations. Explore my portfolio and contact me to discuss how I can help bring your vision to life." />
<meta property="og:image" content="{{ asset('images/me2.jpg') }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Abdelali Abouelhassan Portfolio" />
<meta property="og:locale" content="en_US" />

{{-- Twitter --}}

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@abdelali" />
<meta name="twitter:creator" content="@abdelali" />
<meta name="twitter:title" content="Experienced Full-Stack Web Developer and Mobile App Developer" />
<meta name="twitter:description" content="Discover the diverse skills and expertise of a seasoned full-stack web developer and mobile app developer. With a focus on creating custom solutions and optimizing for peak performance and SEO, I am dedicated to delivering high-quality work that exceeds client expectations. Explore my portfolio and contact me to discuss how I can help bring your vision to life." />
<meta name="twitter:image" content="{{ asset('images/me2.jpg') }}" />
@endsection

@section('content')

    <!-- Preloader -->
    <div id="line-loader">
      <div class="middle-line"></div>
    </div>

    <!--   Menu Overlay Mobile -->
    <div class="menu-overlay d-none"></div>

    <!--   Right Side Start  -->
    <div class="right-side d-none d-lg-block">
      <div id="date"></div>
      <div class="social-box">
        <div class="follow-label">
          <span>Follow Me</span>
        </div>
        <div class="social d-none d-lg-block ">
          <div style="padding-bottom: 10px;">
            <a href="https://github.com/abdelaliabouelhassan" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" id="github"><path d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z"></path></svg>
            </a>
          </div>
          <div style="padding-bottom: 10px;">
            <a href="https://www.upwork.com/freelancers/~01045a44054481c1f0" target="_blank" >
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="upwork"><rect width="5.493" height=".134" x="1.75"></rect><rect width="5.493" height=".134" x="16.757"></rect><path d="M18.561,5.024c-2.539,0-4.51,1.648-5.31,4.362c-1.22-1.832-2.148-4.032-2.687-5.887H7.828v7.105c-0.002,1.405-1.141,2.543-2.547,2.545c-1.405-0.002-2.543-1.142-2.545-2.545V3.5H0v7.105c0,2.911,2.37,5.298,5.281,5.298c2.913,0,5.283-2.387,5.283-5.298V9.416c0.529,1.106,1.182,2.227,1.974,3.218L10.865,20.5h2.797l1.213-5.705c1.063,0.678,2.285,1.108,3.686,1.108c3,0,5.439-2.45,5.439-5.445C24,7.461,21.561,5.024,18.561,5.024z M18.561,13.157c-1.102,0-2.135-0.467-3.074-1.226l0.228-1.075l0.008-0.042c0.207-1.142,0.849-3.057,2.839-3.057c1.492,0,2.703,1.211,2.703,2.7C21.264,11.945,20.053,13.157,18.561,13.157z"></path></svg>
            </a>
          </div>
         <div>
          <a href="https://www.fiverr.com/abouelhass"  target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" id="fiverr"><path d="M13 13V5H5v-.5C5 3.673 5.673 3 6.5 3H8V0H6.5A4.505 4.505 0 0 0 2 4.5V5H0v3h2v5H0v3h7v-3H5V8h5.028v5H8v3h7v-3h-2z"></path><circle cx="11.5" cy="1.5" r="1.5"></circle></svg>
          </a>
         </div>
        </div>
      </div>
      <div class="next-prev-page">
        <button type="button" class="prev-page bg-base-color hstack">
          <i class="bi bi-chevron-compact-up mx-auto"></i>
        </button>
        <button type="button" class="next-page bg-base-color mt-3 hstack">
          <i class="bi bi-chevron-compact-down mx-auto"></i>
        </button>
      </div>
    </div>
    <!--  Right Side End  -->

    <!--  Left Side Start  -->
    @include('partiels.LeftSide')
    <!--  Left Side End  -->

    <!--  Main Start  -->
    <main id="main" class="main-2">

      <!--  Hero Start  -->
      @include('partiels.Hero')
      <!--  Hero End  -->

      <!--  About Start  -->
      @include('partiels.About')
      <!--  About End  -->

      <!--  Resume Start  -->
      @include('partiels.Resume')
      <!--  Resume End  -->

      <!--  Portfolio Start  -->
      @include('partiels.Portfolio')
      <!--  Portfolio End  -->

      <!--  Blog Start  -->
      @include('partiels.Blog')
      <!--  Blog End  -->

      <!-- Contact Start -->
      @include('partiels.Contact')
      <!--  Contact End  -->

    </main>
    <!--  Main End  -->

    <!--  Mobile Next and Prev Button Start -->
    <div class="next-prev-page d-block d-lg-none">
      <button type="button" class="prev-page bg-base-color hstack">      
        <i class="bi bi-chevron-compact-left mx-auto"></i>
      </button>
      <button type="button" class="next-page bg-base-color mt-1 mt-lg-3 hstack">
        <i class="bi bi-chevron-compact-right mx-auto"></i>
      </button>
    </div>
    <!--  Mobile Next and Prev Button End -->

    <!--  Navbar Button Mobile Start -->
    <div class="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <!--  Navbar Button Mobile End -->

    <!--  Background Shapes Start  -->
    <div class="area">
      <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <!--  Background Shapes End  -->

    <!-- Mouase Magic Cursor Start -->
    <div class="m-magic-cursor mmc-outer"></div>
	  <div class="m-magic-cursor mmc-inner"></div>
    <!-- Mouase Magic Cursor End -->

@endsection