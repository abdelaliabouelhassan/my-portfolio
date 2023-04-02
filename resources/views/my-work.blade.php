@extends('layouts.main')

@section('title')
<title>My Work : {{$myWork->title}}</title>


<meta property="og:title" content="{{$myWork->title}}" />
<meta property="og:description" content="{{$myWork->description}}" />
<meta property="og:image" content="{{config('app.S3_URL') .  $myWork->image}}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Abdelali Abouelhassan Portfolio" />
<meta property="og:locale" content="en_US" />

{{-- Twitter --}}

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@abdelali" />
<meta name="twitter:creator" content="@abdelali" />
<meta name="twitter:title" content="{{$myWork->title}}" />
<meta name="twitter:description" content="{{$myWork->description}}" />
<meta name="twitter:image" content="{{config('app.S3_URL') .  $myWork->image}}" />
@endsection

@section('content')
    <div id="ajax-page" class="ajax-page-content">
      <div class="single-portfolio-wrapper">
        <div class="container">
          <!-- Ajax-page-nav Start -->
          <div class="ajax-page-nav">
            <div class="nav-item ajax-page-prev-next">
              @if ($prev)
              <a class="ajax-page-load" href="/my-work/{{$prev->slug}}">
                <i class="bi bi-chevron-left"></i>
              </a>
              @endif
              @if ($next)
              <a class="ajax-page-load" href="/my-work/{{$next->slug}}">
                <i class="bi bi-chevron-right"></i>
              </a>
              @endif
              
            </div>
            <div class="nav-item ajax-page-close-button">
              <a class="ajax-page-close-button" href="/#portfolio">
                <i class="bi bi-x"></i>
              </a>
            </div>
          </div>
          <!-- Ajax-page-nav End -->
          <!--  Single Portfolio Start  -->
          <div class="portfolio-page-title">
            <h1>{{$myWork->title}}</h1>
          </div>
          <div class="row">
            <div class="col-lg-7 post-content">
              <div class="single-post">
                <div class="owl-carousel portfolio-page-carousel">
                  <!-- Item 01 -->
                  @foreach ($myWork->workImages as $image )
                  <div class="entry-image">
                    <img src="{{config('app.S3_URL') .  $image->image}}" alt="/">
                  </div>
                  @endforeach
                  
                </div>
                <div class="entry-content">
                  <h2>Project Overview</h2>
                  <p class="mb-0">
                    {{$myWork->overview}}
                  </p>
                </div>
              </div>
            </div>
            <aside class="col-lg-4 ms-auto sidebar mt-5 mt-lg-0">
              <div class="sidbar-wrap">
                <!-- Categories -->
                <div class="aside-box">
                  <div class="aside-title">
                    <h6>Project Details</h6>
                  </div>
                  <p>
                    {{$myWork->description}}
                  </p>
                  <div class="aside-item-portfolio">
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">Category: </a>
                        <span> 
                          {{$myWork->category}}
                        </span>
                      </li>
                      <li>
                        <a href="#">Client:</a>
                        <span>
                          {{$myWork->client}}
                        </span>
                      </li>
                      <li>
                        <a href="#">Location: </a>
                        <span>
                          {{$myWork->location}}
                        </span>
                      </li>
                      @if ($myWork->link)
                      <li>
                        <a href="#">Link: </a>
                        <a target="_blank" style="color:  white" href="{{$myWork->link}}">
                          {{$myWork->link}}
                        </a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </div>
              </div>
            </aside>
          </div>
          <!--  Single Portfolio End  -->
        </div>
      </div>
    </div>
    <!-- Mouase Magic Cursor Start -->
    <div class="m-magic-cursor mmc-outer"></div>
	  <div class="m-magic-cursor mmc-inner"></div>
    <!-- Mouase Magic Cursor End -->

@endsection
