<style>
/* OUTER CONTAINER */
.s-wrap {
  width: 1350px;
  height: 200px; /* Optional */
  margin-left:-100px;
  background: rgba(253, 213, 134, 0.15);
  /* border: 1px solid #9c1e0b; */
  overflow:auto ; /* Hide scrollbars */
  scrollbar-width: none;
}

/* MIDDLE WRAPPER */
.s-move {
  display: flex;
  position: relative;
  top: 0;
  right: 0;
}

/* SLIDES */
.slide {
  box-sizing: border-box;
  padding: 10px;
  /* Force all slides to layout horizontally */
  width: 100%;
  flex-shrink: 0; 
}

/* SLIDE ANIMATION MAGIC */
@keyframes slideh {
  /* Will use keyframes to shift the 5 slides * */
  /* 0% { right: 0; }
  20% { right: 100%; }
  40% { right: 200%; }
  60% { right: 300%; }
  80% { right: 400%; }
  100% { right: 0; } */
  /* BUT the above will be non-stop */
  /* We want short pauses between each slide, so... */
  /* 0% { right: 0; }
  15% { right: 0; }
  20% { right: 100%; }
  35% { right: 100%; }
  40% { right: 200%; }
  55% { right: 200%; }
  60% { right: 300%; }
  75% { right: 300%; }
  80% { right: 400%; }
  95% { right: 400%; }
  100% { right: 0; } */
}
.s-move { animation: slideh linear 25s infinite; }
.s-move:hover { animation-play-state: paused; }
</style>


@extends('layout.master')
@section('title')
    <title>{{ config('web_config')['WEBSITE_TITLE'] }}</title>
@endsection
@section('content')
    <!-- Start Slider Area -->
     <div id="home" class="slider-area" style="background-color: white;">
        <div class="bend niceties preview-2">
        <div  class="image " style="width: 1350px;">
                <img  src="{{ Storage::url('images/setting/product3.png') }}" alt="" title="" /> <br>
                <!-- <img src="{{ Storage::url('images/setting/group.png') }}" alt="" title="" /> -->
                <!-- <img src="{{ Storage::url('images/setting/'.config('web_config')['SLIDER_2']) }}" alt="" title="#slider-direction-2" />
                <img src="{{ Storage::url('images/setting/'.config('web_config')['SLIDER_3']) }}" alt="" title="#slider-direction-3" /> -->
            </div>
            <div class="layer-1-8  text-center ">
            <img  src="{{ Storage::url('images/setting/group.png') }}" alt="" title="" style="margin-top:-350px; margin-left:-1050px;"/> 
           <strong> <p> <h2 class="title1"  style="margin-top: -290px; margin-left: -910px; font-weight:bold;">for F&B Industry</h2></p> 
            <p><h2 class="title1"  style=" margin-left: -930px;"></h2></p> </strong>

        
            
         
    <!-- End Slider Area -->

                 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product area -->
  
   
    <!-- Start About area -->
    <div id="about" class="about-area area-padding" style="background-color: white;">

        <div class="container">
            
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  
                    <div class="layer-1-8 alignright" style="margin-right: -35px;" >
                    <br> <br><br> <br><br> <br><br> <br><br> 
                    <!-- <br><br> <br><br> <br><br> <br><br> -->
                        <p><h2>Transform your business</h2></p>
                    </div>
                    <br> <br>
                    <div  style="margin-left: 800px; margin-top:35px;">
                    <br> <br><br> <br><br> <br><br> <br><br>
                     <!-- <br><br> <br><br> <br><br> <br><br> -->
                     <style>
                     .gaya{
                        text-align: right;   width: 37.5rem;

height: 19rem;

margin: 0 0 2.5rem;

font-size: 1.5rem;

font-weight: normal;

font-stretch: normal;

font-style: normal;

line-height: 1.58;

letter-spacing: 0.86px;
margin-bottom: 5rem;

color: #4a4a4a;
                     }
                     </style>
                    <h5 class="title1 gaya" style="margin-right: 100px" >
                    The F & B Industry is one of many that are<br> 
                    greatly affected by rapid technological <br> development. Either you can follow with the <br>
                    newest market movement lifestyle or being <br>forgettable. <br>
                    <br>
                    
                    strategic eye level to make a transformation <br>
                    business model idea that can be applied in <br>
                    your business to generate better results and <br>
                    profit through digital systems.<br><br>

                    <strong>So, are you ready to upgrade to the next level<br> with us?</strong>
                    </h5>


                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-well start-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                
                    <div >
                        <div >
                            <a href="#"  style="margin-right: 890px">
                                @if(!empty($about->image))
                                <img src="{{ Storage::url('images/about/pexels-fauxels-3182812.png') }}" alt="{{ $about->image }}"style="margin-left: -95px; margin-top: -350px; width: 39.25rem; " >
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                        
                            <p>{!! $about->description !!}</p>
                        </div>
                    </div>
                </div> -->
                <!-- End col-->
            </div>
        <!-- </div>
    </div> -->
    <!-- End About area -->

   

    <!-- Faq area start -->
    <!-- <div class="faq-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Faq Question</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="faq-details">
                        <div class="panel-group" id="accordion"> -->
                            <!-- Panel Default -->
                            <!-- @foreach($listFaqs as $faqs)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#check{{ $loop->iteration }}">
                                            <span class="acc-icons"></span>{!! $faqs->question !!}
                                        </a>
                                    </h4>
                                </div>
                                <div id="check{{ $loop->iteration }}" class="panel-collapse collapse out">
                                    <div class="panel-body">
                                        <p>{!! $faqs->answer !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach -->
                            <!-- End Panel Default -->
                        <!-- </div>
                    </div>
                </div>
            </div> -->
            <!-- end Row -->
        <!-- </div>
    </div> -->
    <!-- End Faq Area -->

    <!-- Start Wellcome Area -->
    <!-- <div class="wellcome-area">
        <div class="well-bg">
            <div class="test-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wellcome-text">
                            <div class="well-text text-center">
                                <h2>Welcome To Our Oriana</h2>
                                <p>
                                    Busuness Lorem ipsum dolor sit amet, consectetur adipiscing elit.luctus est eget congue.
                                </p>
                                <div class="subs-feilds">
                                    <div class="suscribe-input">
                                        <input type="email" class="email form-control width-80" id="sus_email" placeholder="Email">
                                        <button type="submit" id="sus_submit" class="add-btn width-20">Subscribe</button>
                                        <div id="msg_Submit" class="h3 text-center hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Wellcome Area -->

    

    <!-- Start portfolio Area -->
    <!-- <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Our Portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row"> -->
                <!-- Start Portfolio -page -->
                <!-- <div class="awesome-project-content"> -->
                    <!-- single-awesome-project start -->
                    <!-- @foreach($listPortofolio as $portofolio)
                    <div class="col-md-4 col-sm-4 col-xs-12 design development">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ Storage::url('image/portfolio/'.$portofolio->image) }}" alt="{{ $portofolio->title }}" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="venobox" data-gall="myGallery" href="{{ Storage::url('image/portfolio/'.$portofolio->image) }}">
                                            <h4>{{ $portofolio->title }}</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach -->
                    <!-- single-awesome-project end -->
                <!-- </div>
            </div>
        </div>
    </div> -->
    <!-- awesome-portfolio end -->

    <!-- Start Testimonials -->
    <!-- <div class="testimonials-area">
        <div class="testi-inner area-padding">
            <div class="testi-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12"> -->
                        <!-- Start testimonials Start -->
                        <!-- <div class="testimonial-content text-center">
                            <a class="quate" href="#"><i class="fa fa-quote-right"></i></a> -->
                            <!-- start testimonial carousel -->
                            <!-- <div class="testimonial-carousel">
                                @foreach($listTestimoni as $testimoni)
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <p>{{ $testimoni->quote }}</p>
                                        <h6>{{ $testimoni->name }}</h6>
                                    </div>
                                </div>
                                @endforeach -->
                                <!-- End single item -->
                            <!-- </div>
                        </div> -->
                        <!-- End testimonials end -->
                    <!-- </div> -->
                    <!-- End Right Feature -->
                <!-- </div>
            </div>
        </div>
    </div> -->
    <!-- End Testimonials -->


<!-- start slider list -->
<!-- start slider list -->
<div class="s-wrap" style="margin-bottom:7.5rem; margin-top:7.5rem;"><div class="s-move">
<style>
.grid-container {
  display: grid;
  grid-template-columns: 0.4fr 19rem 19rem 19rem 19rem 19rem 19rem;
  grid-template-rows: 0.4fr 0.4fr 0.4fr 0.4fr 0.4fr 0.4fr 0.4fr
  
  gap: 0px 0px;
  grid-template-areas:
    "Business-Aspect Building-Management-Connection PPPSRS-connection Tenant-connection Visitors-connection con1 con2"
    ". . . . . . ."
    ". . . . . . .";
}

.Business-Aspect { grid-area: Business-Aspect; }

.Building-Management-Connection { grid-area: Building-Management-Connection; }

.PPPSRS-connection { grid-area: PPPSRS-connection; }

.Tenant-connection { grid-area: Tenant-connection; }
.Visitors-connection { grid-area: Visitors-connection; }
.con1 { grid-area: con1; }
.con2 { grid-area: con2; }

.isi_slide{
    border: none;
border-right: solid 1px #d8d8d8;   
font-size: 1.625rem;
font-weight: 600;
font-stretch: normal;
font-style: normal;
margin-top:30px;
letter-spacing: 0.93px;
/* text-align: center; */
color: #0f0f0f;
}

</style>
<div class="slide">
  <div class="grid-container">
  <div class=" Business-Aspect layer-1-8-1" style="margin-left:40px; margin-top:25px;"><p><h2> Business <br>Aspect </h2></p></div>
  <div class="Building-Management-Connection isi_slide" style="margin-top:25px; text-align:center; padding-top:20px;">Tracking<br>system</div>
  <div class="PPPSRS-connection isi_slide" style="margin-top:25px; text-align:center; padding-top:30px;"> Order <br>system</div>
  <div class="Tenant-connection isi_slide" style="margin-top:25px; text-align:center; padding-top:30px;">Real-time <br>integration</div>
  <div class="Visitors-connection isi_slide" style="margin-top:25px; text-align:center; padding-top:30px;">Invoice  <br>and payment</div>
  
  <div class="con1 isi_slide" style="margin-top:25px; text-align:center; padding-top:30px;">Tenant <br>connection</div>
  <div class="con2 isi_slide" style="margin-top:25px; text-align:center; padding-top:30px;">Visitors <br>connection</div>
  
</div>
  </div>
  <div class="slide">
    <h3>Next Slide </h3>
    <p>
      Her birthday calculates past a juice! The envy succeeds across an evident jelly. An afternoon shifts opposite a bust.
    </p>
  </div>
  <!-- <div class="slide">
    <h3>Slide 4</h3>
    <p>
      A distributed actor pilots the null pencil. The wild wolfs a damp cage inside the breach.
    </p>
  </div>
  <div class="slide">
    <h3>Slide 5</h3>
    <p>
      The suspected book hums opposite the unacceptable urge. The warning goodbye searches the substitute.
    </p>
  </div> -->
</div></div>

<!-- end slider list -->


    <!-- Start contact Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- <div class="text-center">
                            <h2>Contact Us</h2>
                            <h3>Chat With Our Expert</h>
                        </div> -->

                        <div class="layer-1-7 text-center">
                        <h2><strong>Contact Us </strong></h2>
                    </div>
                    <!-- layer 1 -->
                                <div class="layer-1-8 hidden-xs wow  text-center " data-wow-duration="2s" data-wow-delay=".2s" >
                                    <h2 class="title1">Chat With Our Team</h2>
                                </div>

                    </div>
                </div>
                <!-- <div class="row"> -->
                    <!-- Start contact icon column -->
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-mobile"></i>
                                <p>
                                    Call: {{ $contactUs->contact_number }}<br>
                                </p>
                            </div>
                        </div>
                    </div> -->
                    <!-- Start contact icon column -->
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    Email: {{ $contactUs->email }}<br>
                                </p>
                            </div>
                        </div>
                    </div> -->
                    <!-- Start contact icon column -->
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-icon text-center">
                            <div class="single-icon">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    Location: {{ $address->adress }}<br>
                                    <span>{{ $address->city }}, {{ $address->country }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"> -->
                <br>  <br>
                    <!-- Start Google Map -->
                    <!-- <div class="col-md-5 col-sm-7 col-xs-8 ">
                    <div style="border-radius: 35px; width: 400px; overflow: hidden;">   -->
                        <!-- Start Map -->
                         
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6670.591288944101!2d106.82873811482287!3d-6.216521757957558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4080ed844bd%3A0x44c29c684ab69e44!2sESTUBIZI%20Business%20Center!5e0!3m2!1sid!2sid!4v1620368994715!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:35px; " allowfullscreen="" loading="lazy"></iframe> -->
                            <!-- End Map -->
                    <!-- </div>
                    </div> -->
                    <!-- End Google Map -->

                    <!-- Start  contact -->
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="form contact-form"  style="margin-left: 351px;">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="{{ route('contact.store2') }}" method="post" role="form" class="contactForm">
                                @csrf
                           

                                <div class="form-group" style="margin-left:0rem;">
                                    
                                <p>
                            <input type="text" name="name"  value="{{ old('name') }}" id="name" placeholder=" Name*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="border: none; border-bottom: 1px solid #bababa; width:18.688rem; margin-right:2.483rem; "/>
                            <input type="text" name="phone"  value="{{ old('phone') }}" id="name" placeholder=" Phone*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="border: none; border-bottom: 1px solid #bababa; width:18.5rem;"/>
                        </p>
                         
                            <div class="validation"></div>
                            @if($error = $errors->first('name'))
                                <p class="btn btn-danger mt-2">{{ $error }}</p>
                            @endif
                            
                            <div class="validation"></div>
                            @if($error = $errors->first('phone'))
                                <p class="btn btn-danger mt-2">{{ $error }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder=" Email" data-rule="email*" data-msg="Please enter a valid email"  style="border: none; border-bottom: 1px solid #bababa;  width: 39.813rem; margin-top:-20px;"/>
                            <div class="validation"></div>
                            @if($error = $errors->first('email'))
                                <p class="btn btn-danger mt-2">{{ $error }}</p>
                            @endif
                        </div>
                        <div class="form-group" style="margin-left:0px; " >
                
                        <select class="select" id="services_id" name="subject"  value="{{ old('subject') }}" id="subject" placeholder="Product*" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  style=" width: 39.813rem; border: none; border-bottom: 1px solid #bababa; color:grey; padding-bottom:10px; " > 
                            <option value="" > &nbsp;&nbsp;&nbsp;&nbsp; Products* 
                            </option>
                            @foreach($listServices as $services) {
                                
                                <option style="color:black;" value= "{{$services->title}}" >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $services->title}}  
                                 </option>
                            @endforeach
                            </select> <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left:-13px; color:grey;"></i>

                            <div class="validation"></div>
                                    @if($error = $errors->first('subject'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                        </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" 
                                    style="border: none; border-bottom: 1px solid #CCC;  width: 39.813rem; height:100px; margin-left:0px;margin-top:-10px;"></textarea>
                                    <div class="validation"></div>
                                    @if($error = $errors->first('message'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                                @if($message = session('message'))
                                    <div class="row mt-0 ml-2">
                                        <div class="col-md-6">
                                            <h4 class="btn btn-danger">{{ $message }}</h4>
                                        </div>
                                    </div>
                                @endif
                                <div class="text-center"><button type="submit" style=" color: white; width: 19.938rem;   height: 4.375rem;

margin: 3.75rem 39.125rem 12.5rem 3.563rem;


border-radius: 35px;

box-shadow: 0 8px 16px 0 rgba(35, 57, 149, 0.2);

background-color: #253470;" >Submit</button></div>
                            </form>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            
    <!-- End Contact Area -->

<!-- Start team Area -->
    <!-- <div id="team" class="our-team-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class=" text-left">
                        <h3>Our</h3>
                        <h2>Our special Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-top">
                    @foreach($listTeam as $team)
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ Storage::url('images/profile/'.$team->image) }}" alt="{{ $team->name }}">
                                </a>
                            </div>
                            <div class="team-content text-center">
                                <h4>{{ $team->name }}</h4>
                                <p>{{ $team->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach -->
                    <!-- End column -->
                <!-- </div>
            </div>
        </div>
    </div> -->
    
    <!-- End Team Area -->

@endsection
