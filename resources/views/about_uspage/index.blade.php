@extends('layout.master')
@section('title')
    <title>{{ config('web_config')['WEBSITE_TITLE'] }}</title>
@endsection
@section('content')
    <!-- Start Slider Area -->
    <div id="home" class="slider-area" style="background-color: white;">
        <div class="bend niceties preview-2">
        <div  class="image " style="width:1355px;">
                <img  src="{{ Storage::url('images/setting/header.png') }}" alt="" title="" /> <br>
                
            </div>
            <div class="layer-1-8-product  text-center ">
           <strong> <p> <h2 class="title1"  style="margin-top: -190px; margin-left: 0px; font-size:60px;">About</h2></p> 
          </strong>
            <!-- opera setting
             <strong> <p> <h2 class="title1"  style="margin-top: -300px; margin-left: -810px;">for Property</h2></p> 
            <p><h2 class="title1"  style=" margin-left: -790px;">Management</h2></p> </strong> -->
                                </div>
        
            
         
    <!-- End Slider Area -->

                 </div>
                    </div>
    <!-- End Product area -->
  
   
    <!-- Start About area -->
    <div id="about" class="about-area area-padding" style="background-color: white;">

        <div class="container">
            
            <div class="row">
                <!-- <div class="col-md-12 col-sm-12 col-xs-12"> -->
                  
                    <div class="layer-1-8 " style=" text-align: center; margin-top:180px;">
                   
                        <p><h2>Over 4 years experience<h2></p>
                    </div>
                    <div>
                   
                     <!-- <br><br> <br><br> <br><br> <br><br> -->
                     <style>
                     .gaya{
      
height: 19rem;
margin: 0 0 2.5rem;
font-size: 1.5rem;
font-weight: normal;
font-stretch: normal;
font-style: normal;
line-height: 1.58;
letter-spacing: 0.86px;
margin-bottom: 5rem;
text-align: center;

color: #4a4a4a;
                     }
                     </style>
                    <h5 class="title1 gaya"  style="margin-bottom:190px;">
                    Oriana Prima Persada was founded on 25 January 2017.<br>
                    Part of subsidiary of PT Oriana Rafaindo Persada and <br>
                    PT Akhdani Reka Solution. Started business in the <br>
                    software solution field since 28 January 2009, <br>
                    while starting businesses, PT Oriana Prima Persada <br>
                    concerned with the Building Management System.  <br>
                    We provide transparent, accurate solutions, and real<br> 
                    time system. <br><br>
                   
                    Within 4 years have made several application products <br>that help business in various fields
                    </h5>

</div>

</div>



@endsection
