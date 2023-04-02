<section id="portfolio" class="section portfolio">
    <div class="container">
      <div class="heading-meta-container">
        <h2 class="heading-title">Portfolio</h2>
        <h6 class="description">See My Ausome Work</h6>
      </div>
      <div class="row">
        <!--   Portfolio Filters   -->
        <ul id="portfolio-filter" class="list-inline col-lg-12 portfolio-filter text-center">
          <li class="list-inline-item">
            <a href="javascript:void(0)" data-filter="*" class="active">All</a>
          </li>
          <li class="list-inline-item">
            <a href="javascript:void(0)" data-filter=".Web">Web Applications</a>
          </li>
          <li class="list-inline-item">
            <a href="javascript:void(0)" data-filter=".Mobile">Mobile Applications</a>
          </li>
         
        </ul>
      </div>
      <div class="portfolio-items border-line-v row">
        @foreach ($myWorks as $myWorks )
        <div class="col-md-6 col-lg-4 portfolio-item {{$myWorks->category}}">
          <a href="/my-work/{{ $myWorks->slug}}" class="portfolio-box">
            <div class="portfolio-image">
              <img src="{{config('app.S3_URL') .  $myWorks->image}}" alt="/">
              <div class="portfolio-icon">
                <span class="ajax-page-load">
                  <i class="bi bi-file-earmark-text"></i>
                </span>
              </div>
            </div>
            <div class="portfolio-content">
              <h6 class="blog-header">{{$myWorks->title}}</h6>
              <p class="mb-0">image</p>
            </div>
          </a>
        </div>
        @endforeach
        {{-- <!-- Item 01 -->
        <div class="col-md-6 col-lg-4 portfolio-item sound">
          <div class="portfolio-box">
            <div class="portfolio-image">
              <img src="https://via.placeholder.com/510x765" alt="/">
              <div class="portfolio-icon">
                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&#038;color=%23ff5500&#038;auto_play=false&#038;hide_related=false&#038;show_comments=true&#038;show_user=true&#038;show_reposts=false&#038;show_teaser=true&#038;visual=true" class="portfolio-magnific mfp-iframe">
                  <i class="bi bi-music-note-beamed"></i>
                </a>
              </div>
            </div>
            <div class="portfolio-content">
              <h6 class="blog-header">Tak photo on the waves</h6>
              <p class="mb-0">image</p>
            </div>
          </div>
        </div>
        <!-- Item 02 -->
        <div class="col-md-6 col-lg-4 portfolio-item sound">
          <div class="portfolio-box">
            <div class="portfolio-image">
              <img src="https://via.placeholder.com/510x510" alt="/">
              <div class="portfolio-icon">
                <a href="https://player.vimeo.com/video/158284739" class="portfolio-magnific mfp-iframe">
                  <i class="bi bi-camera-video"></i>
                </a>
              </div>
            </div>
            <div class="portfolio-content">
              <h6 class="blog-header">Tak photo on the waves</h6>
              <p class="mb-0">image</p>
            </div>
          </div>
        </div>
        <!-- Item 03 -->
        <div class="col-md-6 col-lg-4 portfolio-item sound">
          <div class="portfolio-box">
            <div class="portfolio-image">
              <img src="https://via.placeholder.com/510x640" alt="/">
              <div class="portfolio-icon">
                <a href="portfolio-01.html" class="ajax-page-load">
                  <i class="bi bi-file-earmark-text"></i>
                </a>
              </div>
            </div>
            <div class="portfolio-content">
              <h6 class="blog-header">Tak photo on the waves</h6>
              <p class="mb-0">image</p>
            </div>
          </div>
        </div>
        <!-- Item 04 -->
        <div class="col-md-6 col-lg-4 portfolio-item mobiledesign webdesign">
          <div class="portfolio-image">
            <img src="https://via.placeholder.com/510x640" alt="/">
            <div class="portfolio-icon">
              <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&#038;color=%23ff5500&#038;auto_play=false&#038;hide_related=false&#038;show_comments=true&#038;show_user=true&#038;show_reposts=false&#038;show_teaser=true&#038;visual=true" class="portfolio-magnific mfp-iframe">
                <i class="bi bi-music-note-beamed"></i>
              </a>
            </div>
          </div>
          <div class="portfolio-content">
            <h6 class="blog-header">Detailed Project 2</h6>
            <p class="mb-0">image</p>
          </div>
        </div>
        <!-- Item 05 -->
        <div class="col-md-6 col-lg-4 portfolio-item mobiledesign sound">
          <div class="portfolio-image">
            <img src="https://via.placeholder.com/510x510" alt="/">
            <div class="portfolio-icon">
              <a href="https://player.vimeo.com/video/158284739" class="portfolio-magnific mfp-iframe">
                <i class="bi bi-camera-video"></i>
              </a>
            </div>
          </div>
          <div class="portfolio-content">
            <h6 class="blog-header">Detailed Project 2</h6>
            <p class="mb-0">image</p>
          </div>
        </div>
        <!-- Item 06 -->
        <div class="col-md-6 col-lg-4 portfolio-item mobiledesign">
          <div class="portfolio-image">
            <img src="https://via.placeholder.com/510x510" alt="/">
            <div class="portfolio-icon">
              <a href="portfolio-01.html" class="ajax-page-load">
                <i class="bi bi-file-earmark-text"></i>
              </a>
            </div>
          </div>
          <div class="portfolio-content">
            <h6 class="blog-header">Detailed Project 2</h6>
            <p class="mb-0">image</p>
          </div>
        </div> --}}
      </div>
    </div>
  </section>