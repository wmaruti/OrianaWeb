@extends('layout.master')
@section('title')
    <title>{{ config('web_config')['WEBSITE_TITLE'] }}</title>
@endsection
@section('content')
    <!-- Start Slider Area -->
    <div id="home" class="slider-area" style="background-color: white;">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides ">
                <img src="{{ Storage::url('images/setting/'.config('web_config')['SLIDER_1']) }}" alt="" title="#slider-direction-1" />
                <img src="{{ Storage::url('images/setting/'.config('web_config')['SLIDER_2']) }}" alt="" title="#slider-direction-2" />
                <img src="{{ Storage::url('images/setting/'.config('web_config')['SLIDER_3']) }}" alt="" title="#slider-direction-3" />
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content alignleft">
                                <!-- layer 1 -->
                                <div class="layer-1-2 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h1 class="title2">{{ config('web_config')['TEXT_TITLE'] }}</h1>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-1 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                   <strong> <h5 class="title2">{!! config('web_config')['TEXT_DESCRIPTION_1'] !!}</h5> </strong>
                                </div>
                                <!-- layer 3 -->
                                <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content alignleft">
                                <!-- layer 1 -->
                                <div class="layer-1-2 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h1 class="title1">{{ config('web_config')['TEXT_TITLE'] }}</h1>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-1 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <strong> <h5 class="title2">{!! config('web_config')['TEXT_DESCRIPTION_2'] !!}</h5></strong>
                                </div>
                                <!-- layer 3 -->
                                <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- direction 3 -->
            <div id="slider-direction-3" class="slider-direction slider-two">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content alignleft">
                                <!-- layer 1 -->
                                <div class="layer-1-2 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <h1 class="title1">{{ config('web_config')['TEXT_TITLE'] }}</h1>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <strong> <h5 class="title2">{!! config('web_config')['TEXT_DESCRIPTION_3'] !!}</h5></strong>
                                </div>
                                <!-- layer 3 -->
                                <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                    <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

 <!-- Start Product area -->
 <div id="services" class="services-area area-padding" style="background-color: white; ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="layer-1-7-kecil text-center">
                    <br>
                        <h2><strong>Our Products </strong></h2>
                    </div>
                    <!-- <div class="layer-1-9 aligncenter">
                    <h2>Your one-stop consulting and  <br>
                    product solution</h2>  
                    </div> -->
             
                    <!-- layer 2 -->
                    <!-- <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <strong> <h3 class="title2">Our Products</h3></strong>
                                </div>             -->
                    <!-- layer 1 -->
                                <div class="layer-1-8 hidden-xs wow slideInUp text-center " data-wow-duration="2s" data-wow-delay=".2s" >
                                    <h2 class="title1">Your one-stop consulting and  <br>
                    product solution</h2>
                                </div>
                                
                               
                            </div>
                </div>
            </div>
            <style>
                .overlay {
  margin-top:20px;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}

            </style>
            <div class="row text-center">
                <div class="services-contents">
                    <!-- Start Left services -->
                    @foreach($listServices as $services)
                    <div class="col-md-4">
                        <div class="about-move ">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon " href="#">
                                    <div class="team-img ">
                                        <img src="{{ Storage::url('images/services/'.$services->image) }}" class="image" alt="{{ $services->image }}" style="width: 300px; box-shadow: 4px 5px 40px 0 rgba(249, 211, 79, 0.3);
    border-radius:190px " >
                                        
                                    </a>
                                   
                                    <!-- <div class="layer-1-9 " >
                                     <h5><strong>{{ $services->title }}</h5> </strong>
                                    </div> -->
                                  
                                    <div class="layer-1-9-1 alignrightproduct" >
                                      
                                    <h5 class="overlay " style="margin-left: 10px;">  <br> {!! $services->description !!}  </h5>

                                    
                                    </div>
                                   
                                </div>
                                </div>
                                    </div>
                            
                            <!-- end about-details -->
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Product area -->
  
   
    <!-- Start About area -->
    <div id="about" class="about-area area-padding" style="background-color: white; ">

        <div class="container">
            
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  
                    <div class="layer-1-7-kecil alignmid" style="margin-top:300px;" >
                    <br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> 
                        <h2>About Us</h2>
                    </div>
                    <br> <br>
                    <div class="layer-1-8 " style="margin-left: 580px">
                    <h2 class="title1">Your equal business <br>partner</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-well start-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-left">
                        <div class="single-well">
                            <a href="#">
                                @if(!empty($about->image))
                                <img src="{{ Storage::url('images/about/'. $about->image) }}" alt="{{ $about->image }}"style="margin-left: -210px; margin-top: -110px; "  width="200%">
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="well-middle">
                        <div class="single-well">
                        <br>
                            <p>{!! $about->description !!}</p>
                        </div>
                    </div>
                </div>
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

    
    <!-- Start Blog Area -->
    <!-- <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
            <div class="blog-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($listArticles as $articles) -->
                    <!-- Start Left Blog -->
                    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="team-blog">
                                <a href="{{ route('article.detail', $articles->slug)  }}">
                                    <img src="{{ Storage::url('image/articles/'.$articles->image) }}" alt="{{ $articles->title }}">
                                </a>
                            </div>
                            <div class="blog-meta">
                                <span class="date-type">
                                      <i class="fa fa-calendar"></i>{{ date('d M Y', strtotime($articles->created_at)) }}
                                </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="{{ route('article.detail', $articles->slug)  }}">{{ $articles->title }}</a>
                                </h4>
                                <p>{!! $articles->description !!}</p>
                            </div>
                            <span>
                                <a href="{{ route('article.detail', $articles->slug) }}" class="ready-btn">Read more</a>
                            </span>
                        </div> -->
                        <!-- Start single blog -->
                    <!-- </div>
                    @endforeach -->
                    <!-- End Left Blog-->
                <!-- </div>
            </div>
        </div>
    </div> -->
    <!-- End Blog -->
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

                        <div class="layer-1-7-kecil text-center">
                        <h2><strong>Contact Us </strong></h2>
                    </div>
                    <!-- layer 1 -->
                                <div class="layer-1-8 hidden-xs wow  text-center " data-wow-duration="2s" data-wow-delay=".2s" >
                                    <h2 class="title1">Chat With Our Team</h2>
                                </div>

                    </div>
                </div>

                <br>  <br>
                    <!-- Start Google Map -->
                    <div class="col-md-5 col-sm-7 col-xs-8 ">
                    <div style="border-radius: 35px; width: 400px; overflow: hidden;">  
                        <!-- Start Map -->
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6670.591288944101!2d106.82873811482287!3d-6.216521757957558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4080ed844bd%3A0x44c29c684ab69e44!2sESTUBIZI%20Business%20Center!5e0!3m2!1sid!2sid!4v1620368994715!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:35px; " allowfullscreen="" loading="lazy"></iframe>
                            <!-- End Map -->
                    </div>
                    </div>
                    <!-- End Google Map -->

                    <!-- Start  contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form contact-form"  style="margin-left: 51x;">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="{{ route('contact.store') }}" method="post" role="form" class="contactForm">
                                @csrf
                           

                                <div class="form-group">
                                    
                                <p>
                                    <input class="form-control"type="text" name="name"  value="{{ old('name') }}" id="name" placeholder=" Name*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="border: none; border-bottom: 1px solid #bababa; width:18.688rem; margin-right:2.483rem;"/>
                                    <input class="form-control" type="text" name="phone"  value="{{ old('phone') }}" id="name" placeholder=" Phone*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="border: none; border-bottom: 1px solid #bababa; width:18.4rem; margin-top:-56px; margin-left:215px;"/>
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
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder=" Email*" data-rule="email*" data-msg="Please enter a valid email"  style="border: none; border-bottom: 1px solid #bababa;  width: 39.813rem;  margin-top:-10px;"/>
                                    <div class="validation"></div>
                                    @if($error = $errors->first('email'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>






                                <!-- <label for="cars">Choose a car:</label> -->

<!-- <select name="cars" id="cars" value="{{ old('subject') }}" style=" width: 39.813rem; border: none; border-bottom: 1px solid #bababa;">
  <option value="Volvo">Volvo</option>
  <option value="Nissan">Nissan</option>
  <option value="Mercedes">Mercedes</option>
  <option value="Audi">Audi</option>
</select> 
<i class="fa fa-caret-down" aria-hidden="true"></i>

                        <div class="form-group" style="margin-left:-15px; " >
                
                        <div class="col-sm-6"  > -->
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
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="&nbsp;&nbsp;&nbsp;Message" 
                                    style="border: none; border-bottom: 1px solid #CCC;  width: 39.813rem; height:100px; margin-top:13px;"></textarea>
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

margin: 3.75rem 25.125rem 12.5rem 3.563rem;


border-radius: 35px;

box-shadow: 0 8px 16px 0 rgba(35, 57, 149, 0.2);

background-color: #253470;" >Submit</button></div>


	<!-- Tombol untuk menampilkan modal-->
	<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buka Modal</button> -->
 
 <!-- Modal -->
 <div id="myModal" class="modal fade" role="dialog">
 
 <style>
 .Mask {
  width: 72%;
  height: auto;
  /* padding: 3.125rem 3.125rem 6.25rem 4.375rem; */
  border-radius: 100px;
  /* box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.12); */
  background-color: #ffffff;
}

.tengah{
    position: fixed;
	/* top: 50%; */
	/* left: 50%; */
    /* padding-bottom:10px; */
}
 </style>
   <div class="modal-dialog Mask" >
     <!-- konten modal-->
     <div class="modal-content " style="border-radius:50px;">
       <!-- heading modal -->
       <!-- <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Bagian heading modal</h4>
       </div> -->
       <!-- body modal -->
       <div class="modal-body">
       <img style="width:2.5rem; height:2.5rem; margin-top: 2.125rem; margin-right: 2.125rem; " type="button" class="close" src="{{ Storage::url('image/keluar.png')}}" data-dismiss="modal"></img>

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

                        <div style="margin-right: 20.525rem;" class="layer-1-7-kecil text-center ">
                        <h2><strong>Contact Us </strong></h2>
                        <div style="margin-right: 4.525rem;" class="layer-1-8 ">
                        <h2><strong>Contact our Technical Team</strong></h2>
                        </div>
                    </div>
                  

                    </div>
                </div>

                <br>  <br>
                    <!-- Start Google Map -->
                    <div class="col-md-5 col-sm-7 col-xs-8 ">
                    <div style="border-radius: 35px; width: 400px; overflow: hidden;">  
                        <!-- Start Map -->
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6670.591288944101!2d106.82873811482287!3d-6.216521757957558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4080ed844bd%3A0x44c29c684ab69e44!2sESTUBIZI%20Business%20Center!5e0!3m2!1sid!2sid!4v1620368994715!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:35px; " allowfullscreen="" loading="lazy"></iframe>
                            <!-- End Map -->
                    </div>
                    </div>
                    <!-- End Google Map -->

                    <!-- Start  contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form contact-form"  style="margin-left: 51x;">
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="{{ route('contact.store') }}" method="post" role="form" class="contactForm">
                                @csrf
                           

                                <div class="form-group">
                                    
                                <p>
                                    <input class="form-control"type="text" name="name"  value="{{ old('name') }}" id="name" placeholder=" Name*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="border: none; border-bottom: 1px solid #bababa; width:18.688rem; margin-right:2.483rem;"/>
                                    <input class="form-control" type="text" name="phone"  value="{{ old('phone') }}" id="name" placeholder=" Phone*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="border: none; border-bottom: 1px solid #bababa; width:18.4rem; margin-top:-56px; margin-left:215px;"/>
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
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder=" Email*" data-rule="email*" data-msg="Please enter a valid email"  style="border: none; border-bottom: 1px solid #bababa;  width: 39.813rem;  margin-top:-10px;"/>
                                    <div class="validation"></div>
                                    @if($error = $errors->first('email'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>






                                <!-- <label for="cars">Choose a car:</label> -->

<!-- <select name="cars" id="cars" value="{{ old('subject') }}" style=" width: 39.813rem; border: none; border-bottom: 1px solid #bababa;">
  <option value="Volvo">Volvo</option>
  <option value="Nissan">Nissan</option>
  <option value="Mercedes">Mercedes</option>
  <option value="Audi">Audi</option>
</select> 
<i class="fa fa-caret-down" aria-hidden="true"></i>

                        <div class="form-group" style="margin-left:-15px; " >
                
                        <div class="col-sm-6"  > -->
                        <select class="select" id="services_id" name="subject"  value="{{ old('subject') }}" id="subject" placeholder="Product*" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  style=" width: 39.813rem; border: none; border-bottom: 1px solid #bababa; color:grey; padding-bottom:10px; " > 
                            <option value="" > &nbsp;&nbsp;&nbsp;&nbsp; Products* 
                            </option>
                            @foreach($listServices as $services) {
                                
                                <option style="color:black;" value= "{{$services->title}}" >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $services->title}}  
                                 </option>
                            @endforeach
                            </select> <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left:-13px; color:#253470;"></i>

                            <div class="validation"></div>
                                    @if($error = $errors->first('subject'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                        </div>

                           <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="&nbsp;&nbsp;&nbsp;Message" 
                                    style="border: none; border-bottom: 1px solid #CCC;  width: 39.813rem; height:100px; margin-top:13px;"></textarea>
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

margin: 1.5rem 25.125rem 9.5rem 3.563rem;


border-radius: 35px;

box-shadow: 0 8px 16px 0 rgba(35, 57, 149, 0.2);

background-color: #253470;" >Submit</button></div>




            
                            </form>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>

    <!-- End Contact Area -->

<style>
.Rectangle {

width: 90rem;

height: 1.25rem;

padding-right: 5.375rem;

margin-top: -5.375rem;


margin-left: 2rem;

background-color: #f7f7f7;

}



</style>


<div class="Rectangle " style="margin-top:20px;"> </div>
       </div>


       <table style="width: 100%; border-collapse: collapse; height: 258px;" border="0">
<tbody>
<tr style="height: 48px;">
<td style="width: 33.3333%; height: 38px; vertical-align: bottom">
<p><img src="{{ Storage::url('image/mail.png')}}"> </img><strong><span style="color: #fbb871;">E-mail</span></strong></p>
</td>
<td style="width: 33.3333%; height: 38px; vertical-align: bottom">
<p><img src="{{ Storage::url('image/building.png')}}"> </img><strong><span style="color: #fbb871;">Our Office</span></strong></p>
</td>
<td style="width: 33.3333%; height: 38px; vertical-align: bottom">
<p><img src="{{ Storage::url('image/phone.png')}}"> </img><strong><span style="color: #fbb871;">&nbsp;Phone</span></strong></p>
</td>
</tr>
<tr style="height: 180px;">
<td style="width: 33.3333%; height: 180px; vertical-align: top;">
<p style="text-align: justify;"><span style="color: #ffcc00;"><span style="color: #000000; margin-left:25px;">oriana.pp@oriana.id</span></span></p>
</td>
<td style="width: 33.3333%; height: 180px; vertical-align: top;">
<p><span style="color: #ffcc00;"><span style="color: #000000; margin-left:25px;">Jakarta Office:<br />
<span style="color: #000000; margin-left:25px;">Estubizi Business Center<br />
<span style="color: #000000; margin-left:25px;">Gedung Setiabudi 2<br />
<span style="color: #000000; margin-left:25px;">Lantai 2 Suite 207B-CJI<br />
<span style="color: #000000; margin-left:25px;">HR. Rasuna Said Kav 62<br />
<span style="color: #000000; margin-left:25px;">Kuningan, Jakarta, 12920</span></span></p>
</td>
<td style="width: 33.3333%; height: 180px; vertical-align: top;">
<p><span style="color: #000000; margin-left:30px;">(021) 52905299 / 52971875</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>


       <!-- footer modal -->
       <!-- <div   class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
       </div> -->
     </div>
   </div>
 </div>

            
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
