<section id="blog" class="section blog">
    <div class="container">
      <h3 class="subtitle">Latest News</h3>
      <div class="boxes">
        <div class="row vertical-line">
          <!-- Item 01 -->
          @foreach ($posts as $post)
          <div class="col-md-6">
            <a href="{{'https://boystack.com/' . $post->slug}}" target="_blank" class="blog-box">
              <div class="blog-image">
                <img src="{{config('app.S3_URL') . $post->image}}" alt="/">
                <div class="blog-icon">
                  <i class="bi bi-journal-text"></i>
                </div>
              </div>
              <div class="blog-post-content">
                <div class="blog-dates">
                  <span>{{$post->created_at}}</span>
                </div>
                <h6 class="blog-header">{{$post->title}}</h6>
                <p class="mb-0">{{$post->summary}}</p>
              </div>
            </a>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </section>