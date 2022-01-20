@extends('site_layout')

@section('main')

<section class="home-slider js-fullheight owl-carousel">
    <div class="slider-item js-fullheight" style="background-image:url({{asset('assets/images/bg_1.jpg')}});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">About</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>
      

      <section class="ftco-section ftc-no-pb">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('assets/images/about.jpg')}});">
                      <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                          <span class="icon-play"></span>
                      </a>
                  </div>
                  <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section mb-5 pl-md-5">
                <div class="pl-md-5 ml-md-5">
                    <span class="subheading">Company Overview</span>
                  <h2 class="mb-4">Learned about the Law</h2>
              </div>
            </div>
            <div class="pl-md-5 ml-md-5 mb-5">
                          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                          <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                          <p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="container">
          <div class="row d-md-flex align-items-center">
              <div class="col-lg-4">
                  <div class="heading-section pl-md-5 heading-section-white">
                <div class="ftco-animate">
                    <span class="subheading">Some</span>
                  <h2 class="mb-4">Interesting Facts</h2>
              </div>
            </div>
              </div>
              <div class="col-lg-8">
                  <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="18000">0</strong>
                      <span>Trusted clients</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="1000">0</strong>
                      <span>Solved Cases</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="1230">0</strong>
                      <span>Awards Win</span>
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="800">0</strong>
                      <span>Winning Case</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      </div>
  </section>

  <section class="ftco-section ftc-no-pb">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last" style="background-image: url({{asset('assets/images/about-2.jpg')}});">
                  </div>
                  <div class="col-md-7 wrap-about ftco-animate">
            <div class="heading-section mb-5 pl-md-5">
                <div class="pr-md-5 mr-md-5 text-md-right">
                    <span class="subheading">Company Help Intro</span>
                  <h2 class="mb-4">The People We Help</h2>
              </div>
            </div>
            <div class="pr-md-5 pl-md-5 mr-md-5 mb-5">
              <div class="services-wrap d-flex">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-balance"></span>
                </div>
                <div class="media-body pr-4 order-md-first text-md-right">
                  <h3 class="heading">Fight for Justice</h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
              </div>
              <div class="services-wrap d-flex">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-balance"></span>
                </div>
                <div class="media-body pr-4 order-md-first text-md-right">
                  <h3 class="heading">Best Case Strategy</h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
              </div>
              <div class="services-wrap d-flex">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class="flaticon-balance"></span>
                </div>
                <div class="media-body pr-4 order-md-first text-md-right">
                  <h3 class="heading">Experience Attorneys</h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                </div>
              </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Testimony</span>
          <h2 class="mb-4">Our satisfied customer says</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url({{asset('assets/images/person_1.jpg')}})">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">Marketing Manager</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url({{asset('assets/images/person_2.jpg')}})">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">Interface Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url({{asset('assets/images/person_3.jpg')}})">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">UI Designer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url({{asset('assets/images/person_1.jpg')}})">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">Web Developer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 pb-5">
                <div class="user-img mb-5" style="background-image: url({{asset('assets/images/person_1.jpg')}})">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Garreth Smith</p>
                  <span class="position">System Analyst</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      <section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-md-5" id="map">
                  </div>
                  <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section mb-md-5 pl-md-5 mt-5 pt-3">
                <div class="pl-md-5 ml-md-5">
                    <span class="subheading">Contact Information</span>
                  <h2 class="mb-4">You may Contact Us here</h2>
              </div>
            </div>
            <div class="pl-md-5 ml-md-5">
                <div class="info-contact mb-5">
                    <p><span>Phone:</span> <span>(00) 123 - 456 - 789</span></p>
                    <p><span>Fax:</span> <span>(00) 123 - 456 - 789</span></p>
                    <p><span>E-Mail:</span> <span><a href="#">info@emial.com</a></span></p>
                </div>
                <div class="info-contact mb-5">
                    <h3>Address Information</h3>
                    <p><span>Address</span> <span> 203 Fake St. Mountain View, San Francisco, California, USA</span></p>
                    <p><span>Fax:</span> <span>(00) 123 - 456 - 789</span></p>
                    <p><span>E-Mail:</span> <span><a href="#">info@emial.com</a></span></p>
                </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>




@endsection