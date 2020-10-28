<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Madhushanka MicroCredit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
         <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="css/style.css" rel="stylesheet">


        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/fav/apple-icon-57x57.png') }}" >
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/fav/apple-icon-60x60.png') }}" >
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/fav/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/fav/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/fav/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/fav/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/fav/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/fav/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/fav/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/fav/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/fav/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/fav/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('img/fav/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('img/fav/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">

     

    </head>
   
    <body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <?php  
    $xx=0;  
$yy=0;
$zz=1;
?>
            @foreach($data['directors'] as $countdirectors)
       @if($countdirectors->hide)
       <?php $xx=$xx+$zz;  ?>
       @else
       <?php $yy=$yy+$zz;  ?>
       @endif
    @endforeach
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/#intro">Home</a></li>
          <li><a href="/#about">About Us</a></li>
          <li><a href="/#services">Services</a></li>
          <li><a href="/lands">Lands For Sale</a></li>
          @if($yy>0)
          <li><a href="/#team">Board Of Directors</a></li>
          @else
          <li><a href="/#testimonials">Testimonials</a></li>
          @endif
          <li><a href="/#contact">Contact Us</a></li>
          
          
          @if (Route::has('login') or Route::has('loginCus'))
                
                    @auth
                       <li> <a href="/admin" >My Account</a></li>
                    @else
                        <li><a href="{{ route('loginCus') }}" >Login</a></li>

                        @if (Route::has('register') or Route::has('registerCus'))
                            <li><a href="{{ route('registerCus') }}" >Register</a></li>
                        @endif
                    @endif



                    
                
            <!-- @endif -->
       

        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/logot.png" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>You are NOT alone<br><span>We </span><br>are HERE !</h2>
        <div>
          @if (Route::has('login')||Route::has('loginCus'))
                <div class="well">
                    @auth
                        <a href="/admin" class="btn-get-started">My Account</a>
                    @else
                        <a href="{{ route('loginCus') }}" class="btn-get-started">Login</a>

                        @if (Route::has('register')|| Route::has('registerCus'))
                            <a href="{{ route('registerCus') }}" class="btn-services">Register</a>
                        @endif
                    @endif
                </div>
            @endif
        </div>

        



      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>We Are An Innovative Investments That Registered companies act No.07 of 2007 of Sri Lanka, Company Registration No. P B 5311 As a Limited Liability Company In Sri Lanka. MICRO CREDIT LIMITED.</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
            First the company was registered in 2019 as “ Madhushanka MicroCredit(pvt)LTD” under the companies Act No. 07 of 2007.

            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Registered company</a></h4>
              <p class="description">Registered companies act No.07 of 2007 of Sri Lanka</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Registration No. P B 5311</a></h4>
              <p class="description">Company Registration No. P B 5311 As a Limited Liability Company In Sri Lanka</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Branch Network</a></h4>
              <p class="description">Island Wide Branch Network</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="img/about1.gif" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about2.gif" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Vision</h4>
            <p>
            We believe in an inclusive financial service that requires client advocacy and stewardship, a passion for leading-edge solutions and the delivery of services that exceed customer expectations.
            </p>
            
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/mission.gif" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Mission</h4>
            <p>
            Our mission is to help set the industry standard in Non-Bank Financial Services. We reach out to all Small and Medium Enterprises and provide them with affordable and convenient Financial Services tailored to their specific needs. 
            </p>
            
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p>Why Select Us?</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Dedicated Supervisory Board</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">In-House Advisor availability</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Wide network of branches</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Fully trained marketing staff</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Hassle free processes & procedures</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Authorized accounting standards</a></h4>
              <p class="description"></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p></p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
            <i class="fa fa-clock-o" aria-hidden="true"></i>

              <div class="card-body">
                <h5 class="card-title">24 Hours</h5>
                <p class="card-text">We provide 24 Hours Service.</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
            <i class="fa fa-user" aria-hidden="true"></i>

              <div class="card-body">
                <h5 class="card-title">Profile</h5>
                <p class="card-text">Every Customer Can Create Profile.</p>
                <a href="/registerCus" class="readmore">Create Profile NOW</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
            <i class="fa fa-users" aria-hidden="true"></i>

              <div class="card-body">
                <h5 class="card-title">Customer Service</h5>
                <p class="card-text">We always Try to give Good Service to You.</p>
                <a href="#contact" class="readmore">Send Message</a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1000</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">
            <?php  
$x=0;  
$y=0;
$z=1;
?>
            @foreach($data['branches'] as $bdata)
       @if($bdata->hide)
       <?php $x=$x+$z;  ?>
       @else
       <?php $y=$y+$z;  ?>
       @endif
    @endforeach
    {{$y}}
            
            
           </span>
            <p>Branches</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Lands For Sale</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Employees</p>
          </div>
  
        </div>

      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Lands for Sale</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="" class="filter-active">New Lands</li>
              <li data-filter=".filter-gampaha">Gampaha</li>
              <li data-filter=".filter-Colombo">Colombo</li>
              <li data-filter=".filter-Kaluthara">Kaluthara</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-gampaha">
            <div class="portfolio-wrap">
              <img src="rom_pics\land1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="rom_pics\land1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Kaluthara" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="rom_pics\land2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="rom_pics\land2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gampaha" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="rom_pics\land3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="rom_pics\land3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Colombo">
            <div class="portfolio-wrap">
              <img src="rom_pics\land4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="rom_pics\land4.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Kaluthara" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="rom_pics\land5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="rom_pics\land5.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gampaha" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="rom_pics\land6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="rom_pics\land6.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

         


        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Mr.Dhammika Perera</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  I think this is the best microcredit company in Sri Lanka.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Ms.Otara</h3>
                <h4>Designer</h4>
                <p>
                  WooW.. The Best Experience with Madhushanka MicroCredit Company.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Mr.Rupasingha</h3>
                <h4>Store Owner</h4>
                <p>
                  I would like to recommend Madhushanka MicroCredit Company.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Mr.Lasantha</h3>
                <h4>Freelancer</h4>
                <p>
                  Fast Service..
                </p>
              </div>
    
              

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->

    

    @if($yy>0)

    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Board Of Directors</h3>
          <p>A board of directors is an elected group of individuals that represent shareholders.</p>
        </div>

        <div class="row">
        @foreach($data['directors'] as $director)
       @if($director->hide)
       @else
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{URL::asset('/storage/OwnerPhotos/'.$director['Photo'])}}" class="img-fluid" alt="Director's Image" >
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{$director->Name}}</h4>
                  <span>{{$director->post}}</span>
                  <div class="social">
                    <a href="{{$director->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="{{$director->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="{{$director->in}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endforeach
          
        </div>

      </div>
    </section><!-- #team -->
@endif
    <!--==========================
      Clients Section
    ============================-->
    <?php  
    $xxx=0;  
$yyy=0;
$zzz=1;
?>
            @foreach($data['clients'] as $countclients)
       @if($countclients->hide)
       <?php $xxx=$xxx+$zzz;  ?>
       @else
       <?php $yyy=$yyy+$zzz;  ?>
       @endif
    @endforeach

    @if($yyy>0)

    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Our Clients</h3>
          <p></p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
        @foreach($data['clients'] as $client)
       @if($client->hide)
       @else
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
           <a href="{{$client->url}}"><img src="{{URL::asset('/storage/ClientsLogos/'.$client['Photo'])}}"  class="img-fluid" alt=""></a>
            </div>
          </div>
          @endif
          @endforeach
         

        </div>

      </div>

    </section>
    @endif


@if($y>0)
<br>
    <div class="container " class="section-bg">
    <br>
        <h1 class="section-header text-center" style="font-family: 'Nunito', 'sans-serif';">Available Branches</h1>
        </br>
     <div class="row justify-content-center">
     
      @foreach($data['branches'] as $branch)
      @if($branch->hide)
      @else
        <div class="card mr-3 mb-3 wow fadeInUp" style="width: 18rem;">
          <img class="card-img-top" src="img/logot.png" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title"><h4>{{$branch->Bname}}</h4></h5>
        <p class="card-text">
        <ul>
        <li><strong>Address:-</strong> {{$branch->Baddress}}.</li>
        <li><strong>Telephone:-</strong> {{$branch->Phone}}.</li>
        </ul>
        </p>
        <a href="{{$branch->GoogleURL}}" target="_blank" class="btn btn-primary">View on map</a>
      </div>
      </div>
      @endif
      @endforeach
     
    </div>
<br>
    </div>
@endif
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7985117576864!2d79.97075581432779!3d6.914677495003809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1600411333080!5m2!1sen!2slk" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
        
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Madhushanka MicroCredit,</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>info@mmc.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>01123453343</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                      <label for="sel1">Select The Branch</label>
                      
                      <select class="form-control" id="sel1" data-rule="required">
                      @foreach($data['branches'] as $branch)
                       @if($branch->hide)
                      @else
                         <option value="{{$branch->bid}}">{{$branch->Bname}}</option>
                      @endif
                      @endforeach     
                     </select>
                     <div class="validation"></div>
                     </div>

                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->


    
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container  text-center">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Madhushanka MicroCredit<br>(pvt)LTD</h3>
            <p>Today, our company resonates the prowess of a dynamic entity – a stalwart in Sri Lanka’s rapidly evolving finance industry.</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#intro" class="scrollto">Home</a></li>
              <li><a href="#about" class="scrollto">About us</a></li>
              <li><a href="#services" class="scrollto">Services</a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Madhushanka MicroCredit, <br>
              Gampaha,<br>
              Sri Lanka. <br>
              <strong>Phone:</strong> 011 023456754<br>
              <strong>Email:</strong> info@mmc.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
             
            </div>

          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
    <footer class="main-footer text-center">
    <strong>Copyright &copy; 2020 <a href="/home" style="color:white;">Madhushanka MicroCredit(pvt)LTD</a>.</strong>
    All rights reserved.
  </footer>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>


</html>
