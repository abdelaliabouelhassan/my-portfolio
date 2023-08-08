<section id="about" class="section about">
    <div class="container">
      <!-- Introducce Me -->
      <div class="about-boxes">
        <div class="row">
          <div class="col-lg-5">
            <div class="about-img">
              <img src="{{asset('/images/me2.jpg')}}" alt="/">
              <div class="border-img"></div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="about-description">
              <h3 class="mb-3">A short story about me , my mission, thinking and craft.</h3>
              <p class="about-text">
                I'm a seasoned FULL-STACK web & mobile developer    with over 4 years of experience in the field. I specialize in creating custom websites and optimizing them for peak performance and SEO. Additionally, I love to blog about web development and tech-related topics, and I'm always looking for new ways to help others grow in their careers. If you need web development or design services, or if you're interested in learning more about the industry, please feel free to reach out and let's chat!
              </p>
            </div>
            <!-- Personal Info -->
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled personal-info">
                  <li>Email : <small>abdelaliabouelhassan@gmail.com</small>
                  </li>
                  <li>Phone : <small>+212 07 08 25 88 70 </small>
                  </li>
                  <li>City : <small> Marrakesh, Morocco</small>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled personal-info">
                  <li>Age : <small>23</small>
                  </li>
                  <li>Experience : <small>+4</small>
                  </li>
                  <li>Freelance : <small>Available</small>
                  </li>
                </ul>
              </div>
              <div class="col-12">
                <a href="#contact" class="to-contact primary-button mt-2">Contact me</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  Count up  -->
      <div id="count-up" class="count-up text-center box-border">
        <div class="row">
          <!-- Item-01 -->
          <div class="col-6 col-lg-3 my-4 count-item">
            <div class="count-icon">
              <i class="bi bi-laptop"></i>
            </div>
            <span class="timer count-number" data-from="0" data-to="254" data-speed="5000">0</span>
            <p class="mb-0">Web Development Projects</p>
          </div>
          <!-- Item-02 -->
          <div class="col-6 col-lg-3 my-4 count-item">
            <div class="count-icon">
              <i class="bi bi-phone"></i>
            </div>
            <span class="timer count-number" data-from="0" data-to="7" data-speed="5000">0</span>
            <p class="mb-0">Mobile Development Projects</p>
          </div>
          <!-- Item-03 -->
          <div class="col-6 col-lg-3 my-4 count-item">
            <div class="count-icon">
              <i class="bi bi-translate"></i>
            </div>
            <span class="timer count-number" data-from="0" data-to="10" data-speed="5000">0</span>
            <p class="mb-0">Programming Languages</p>
          </div>
          <!-- Item-04 -->
          <div class="col-6 col-lg-3 my-4 count-item">
            <div class="count-icon">
              <i class="bi bi-gear-wide-connected"></i>
            </div>
            <span class="timer count-number" data-from="0" data-to="22" data-speed="5000">0</span>
            <p class="mb-0">Frameworks and Tools</p>
          </div>
        </div>
         <!-- Item-04 -->
         <div class="col-6 col-lg-3 my-4 count-item  align-items-center mx-auto">
          <div class="count-icon">
            <i class="bi bi-emoji-laughing"></i>
          </div>
          <span class="timer count-number" data-from="0" data-to="261" data-speed="5000">261</span>
          <p class="mb-0">Happy Clients</p>
        </div>
      </div>
       <!--  Client  -->
       <div class="testimonial mt-5">
        <div class="owl-carousel">
          <!-- Item 01 -->
          @foreach ($reviews as  $review)
          <div class="testimonial-box">
            <p class="testimonial-comment">"{{$review->review}}"</p>
            <div class="testimonial-item">
              <div class="testimonial-image">
                <img src="{{$review->image ? config('app.S3_URL') . $review->image : 'https://api.dicebear.com/6.x/initials/svg?seed=' . $review->name }}" alt="/">
              </div>
              <div class="testimonial-info">
                <p class="mb-0">{{$review->name}}</p>
                <small class="testimonial-jub">{{$review->country}}</small>
              </div>
            </div>
          </div>
          @endforeach
          
          
        </div>
      </div>
      <!--  Skills  -->
      <div class="skills">
        <div class="row pt-5">
          <div class="col-lg-7">
            <div class="skill-description">
              <h3 class="mb-3">I have been able to experience & developing this type of skill.</h3>
              <p class="mb-0">I've always been committed to delivering cost-effective, high-quality products that meet the needs of my clients worldwide. To achieve this, I've taken every opportunity to gain valuable experience and expand my skill set.</p>
            </div>
          </div>
          <div class="col-lg-5">
            <ul class="knowledge-item">
              <li>Front End</li>
              <li>Back end</li>
              <li>Mobile Apps</li>
              <li>Database</li>
            </ul>
          </div>
        </div>
      </div>
      <!--  Skillbar  -->
      <div class="row mt-5 skills">
        <div class="col-lg-6">
          <h3 class="subtitle">My Skills</h3>
          <div id="skills">
            <!-- Item 01 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">php</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="100%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
            <!-- Item 02 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Laravel</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="100%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
            <!-- Item 03 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Mysql & PostgreSQL & SqlServer</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="100%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
            <!-- Item 04 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Javascript</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="100%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
            <!-- Item 05 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Vue js</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="100%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
            <!-- Item 06 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Nuxt.js</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="100%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
            <!-- Item 07 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Html</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="100%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
            <!-- Item 08 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Css</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="100%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
            <!-- Item 09 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Tailwindcss</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="100%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
             <!-- Item 10 -->
             <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Git</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="100%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
            <!-- Item 11 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Ionic</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="80" data-speed="4000">80</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="80%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
             <!-- Item 12 -->
             <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">React js</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="75" data-speed="4000">75</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="75%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
             <!-- Item 13 -->
             <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">C#</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="60" data-speed="4000">60</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="60%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
             <!-- Item 14 -->
             <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Asp.net</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="60" data-speed="4000">60</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="60%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
             <!-- Item 15 -->
             <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Godot Engin</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="60" data-speed="4000">55</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="55%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
            <!-- Item 16 -->
            <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Unity Engine</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="50" data-speed="4000">50</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="50%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
             <!-- Item 17 -->
             <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">Flutter</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="40" data-speed="4000">40</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="40%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
             <!-- Item 18 -->
             <div class="col-lg-12 skill-box">
              <div class="skill-text">
                <div class="skillbar-title">C</div>
                <div class="skill-bar-percent"><span data-from="0" data-to="40" data-speed="4000">40</span>%</div>
              </div>
              <div class="skillbar clearfix" data-percent="40%">
                <div class="skillbar-bar"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 ms-auto mt-5 mt-lg-0">
          <h3 class="subtitle">Language</h3>
          <div class="language-bar">
            <!-- Item 01 -->
            <div class="language-skill">
              <h6 class="mb-0">Arabic <span> Native</span>
              </h6>
              <ul class="list-inline text-right">
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
              </ul>
            </div>
            <!-- Item 02 -->
            <div class="language-skill">
              <h6 class="mb-0">Amazigh <span> Native</span>
              </h6>
              <ul class="list-inline text-right">
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
              </ul>
            </div>
            <!-- Item 03 -->
            <div class="language-skill">
              <h6 class="mb-0">English <span> Fluent</span>
              </h6>
              <ul class="list-inline text-right">
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-fill"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle-half"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle"></i>
                </li>
                <li class="list-inline-item">
                  <i class="bi bi-circle"></i>
                </li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
     
    </div>
  </section>