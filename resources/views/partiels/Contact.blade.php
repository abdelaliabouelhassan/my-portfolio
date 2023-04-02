<section id="contact" class="section contact w-100">
    <div class="container">
      <h3 class="subtitle">Get in Touch</h3>
      <!-- Map -->
      {{-- <div class="row mt-5">
        <div class="col-lg-12"><div id="my-map" data-location-lat="43.053454" data-location-lng="-76.144508" data-location-icon="https://via.placeholder.com/32x32"></div></div>
      </div> --}}
      <div class="row mt-4">
        <!-- Address Info -->
        <div class="col-12 col-xl-5">
          <div class="row">
            <!--  Item 01 -->
            <div class="col-lg-12">
              <div class="info-box">
                <div class="item-icon">
                  <i class="bi bi-envelope-open"></i>
                </div>
                <div class="info-text">
                  <h5>Mail Me</h5>
                  <small>abdelaliabouelhassan@gmail.com</small>
                </div>
              </div>
            </div>
            <!--  Item 02 -->
            <div class="col-lg-12">
              <div class="info-box">
                <div class="item-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="info-text">
                  <h5>Call Me On</h5>
                  <small>+212 07 08 25 88 70</small>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- Contact Form -->
        <div class="col-12 col-xl-7">
          <div class="contact-box">
            <div class="contact-form">
              <form id="contactForm" onsubmit="contactUs()">
                @csrf
                <div class="row">
                  <div class="col-lg-12 form-item">
                    <div class="form-group">
                      <input name="name" id="name" type="text" class="form-control" placeholder="Full Name*" required>
                    </div>
                  </div>
                  <div class="col-lg-12 form-item">
                    <div class="form-group">
                      <input name="email" id="email" type="email" class="form-control" placeholder="Email Address*" required>
                    </div>
                  </div>
                  <div class="col-lg-12 form-item">
                    <div class="form-group">
                      <input name="subject" id="subject" type="tel" class="form-control" placeholder="Phone number" >
                    </div>
                  </div>
                  <div class="col-12 form-item">
                    <div class="form-group">
                      <textarea name="comments" id="comments" rows="3" class="form-control textarea" placeholder="Your message..." required></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12 text-left">
                    <div class="pill-btn mt-4 mb-3">
                      <button type="submit" class="secondary-button"> Send Message </button>
                    </div>
                    
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>


        <script>
          function contactUs() {
            event.preventDefault();
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var tele = document.getElementById('subject').value;
            var comments = document.getElementById('comments').value;
            var _token = document.getElementsByName('_token')[0].value;
            var data = {
              name: name,
              email: email,
              tele: tele,
              comments: comments,
              _token: _token
            }
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/contact', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.send(JSON.stringify(data));
            xhr.onload = function() {
              if (xhr.status === 200) {
                alert('Thank you, Message sent successfully');
                 //clear form
                  document.getElementById('name').value = '';
                  document.getElementById('email').value = '';
                  document.getElementById('subject').value = '';
                  document.getElementById('comments').value = '';
              } else {
                alert('Message not sent, please try again or contact me directly');
              }

            }
          
          }
        </script>
      </div>
    </div>
  </section>