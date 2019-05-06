<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Laravel Blog Project</title>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}">

</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</div>


<!-- HOME SECTION -->
<section id="home" class="parallax-section">
     <div class="container">
          <div class="row">
            @foreach($latest as $latestpost)
               <div class="col-md-offset-5 col-md-7 col-sm-12">
                    <div class="home-thumb">
                         <h1 class="wow fadeInUp" data-wow-delay="0.4s">{{ $latestpost['title'] }}</h1>
                         <p class="wow fadeInUp white-color" data-wow-delay="0.6s">{{ $latestpost['content'] }}</p>
                         <a href="#service" class="wow fadeInUp smoothScroll btn btn-default section-btn" data-wow-delay="1s">discover more</a>
                    </div>
               </div>
            @endforeach
          </div>
     </div>
</section>


<!-- SERVICE SECTION -->
<section id="service" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                    <!-- SECTION TITLE -->
                    <h2>All Old Posts</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
               </div>
               <?php
                      $newposts = json_decode(json_encode($posts), true);
                          //print_r($newposts[0]['title']); ?>
               @foreach($old as $oldposts)
                 <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                      <div class="service-thumb">
                           <i class="fa fa-smile-o"></i>
                           <h4>{{ $oldposts['title'] }}</h4>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing morbi venenatis.</p>
                      </div>
                 </div>
               @endforeach



          </div>
     </div>
</section>


<!-- ABOUT SECTION -->
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-4 col-sm-8">
                    <div class="about-image-thumb">
                         <img src="images/profile-image.png" class="wow fadeInUp img-responsive" data-wow-delay="0.2s" alt="about image">
                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-facebook"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-behance"></a></li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-8 col-sm-12">
                    <div class="about-thumb">
                         <!-- SECTION TITLE -->
                         <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                              <h2>www.arrowempire.com</h2>
                              <p>Visit Us Today</p>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p>Praesent eleifend tristique nisl, nec finibus urna posuere nec. Quisque vel nunc eget arcu maximus facilisis non eu nisi. Aliquam ullamcorper est a nisl imperdiet luctus.</p>
                              <p>Sed sed convallis odio. Nulla scelerisque libero efficitur diam fermentum, quis tincidunt urna placerat. Maecenas sed tortor sed nisi semper ultricies. Nulla ornare metus in massa mollis scelerisque.</p>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- WORK SECTION -->
<section id="work" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                         <h2>Latest Posts</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
                    </div>
               </div>
               <?php
                      $newposts = json_decode(json_encode($posts), true);
                          //print_r($newposts[0]['title']); ?>
               @foreach($newposts as $posts)
                   <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.4s">
                        <!-- WORK THUMB -->
                        <div class="work-thumb">
                             <a href="images/{{ $posts['featured'] }}" class="image-popup">
                                  <div class="work-thumb-overlay">
                                       <h4 class="white-color">{{ $posts['title'] }}</h4>
                                  </div>
                                  <img src="{{ $posts['featured'] }}" class="img-responsive" alt="Work 1">
                             </a>
                        </div>
                   </div>
               @endforeach

          </div>
     </div>
</section>


<!-- CONTACT SECTION -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                         <h2>Get in touch</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
                    </div>
               </div>

               <div class="col-md-7 col-sm-10">
                    <!-- CONTACT FORM HERE -->
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <form id="contact-form" action="#" method="get">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" name="name" placeholder="Name" required="">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" name="email" placeholder="Email" required="">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="5" name="message" placeholder="Message" required=""></textarea>
                              </div>
                              <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                                   <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
                              </div>
                        </form>
                    </div>
               </div>

               <div class="col-md-5 col-sm-8">
                    <!-- CONTACT INFO -->
                    <div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                         <div class="section-title">
                              <h2>Contact Info</h2>
                              <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis et tortor consectetur adipisicing lacinia tortor morbi ultricies.</p>
                         </div>

                         <p><i class="fa fa-map-marker"></i> 456 New Street 22000, New York City, USA</p>
                         <p><i class="fa fa-comment"></i> <a href="mailto:info@company.com">info@company.com</a></p>
                         <p><i class="fa fa-phone"></i> 010-020-0340</p>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- FOOTER SECTION -->
<footer>
    <div class="container">
        <div class="row">

               <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.8s">
                    <p class="white-color">Copyright &copy; 2019 Your Company
                    </p>
                    <div class="wow fadeInUp" data-wow-delay="1s">
                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-facebook"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                              <li><a href="#" class="fa fa-behance"></a></li>
                              <li><a href="#" class="fa fa-github"></a></li>
                         </ul>
                    </div>
          </div>
     </div>
</footer>

<!-- SCRIPTS -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.parallax.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
