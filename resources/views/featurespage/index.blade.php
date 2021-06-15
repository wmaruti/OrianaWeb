@extends('layout.master')
@section('title')
    <title>{{ config('web_config')['WEBSITE_TITLE'] }}</title>
@endsection
@section('content')
    <!-- Start Slider Area -->
    <div id="home" class="slider-area" style="background-color: white;">
        <div class="bend niceties preview-2">
        <div  class="image " style="width:1355px;">
                <img  src="{{ Storage::url('images/setting/headerfeatures.png') }}" alt="" title="" /> <br>
                
            </div>
            <div class="layer-1-8-product  text-center  ">
           <strong> <p> <h2 class="title1 "  style="margin-top: -190px; margin-left: 0px; font-size:60px;">Features</h2></p> 
          </strong>
            
                                </div>
        
            
         
    <!-- End Slider Area -->

                 </div>
                    </div>
    <!-- End Product area -->
    <style>
  .kotakputih {
  width: 43.75rem;
  height: 13.375rem;
  position: relative;
  left: 450px;
  margin-right:-130px;
  padding: 4.5rem 10.5rem 4rem 5rem;
  border-radius: 30px;
  box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.08);
  background-color: #ffffff;}


  
  .w_bullet{
    color: #f9a236;
    
  }

  .w_bulletitem{
    color: #253470;
    font-size: 1.75rem;
    font-weight: 505;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: 1px;
    }

                     </style>





    <!-- Start About area -->
    <div  class="about-area area-padding" style="background-color: white;">
      
        <div class="container">

        <!-- kiri -->
        
     
                    <div class="layer-1-8 " style=" align: leftt; margin-left:85px; margin-bottom:300px; width: 35%;">

                  <a>  <img  src="{{ Storage::url('images/features/database.png') }}" alt="" title="" style="margin-top:190px;"/>
                    </a>

                    </div>
                    <div > 
            <h5 class="kotakputih"  style="margin-top:-580px; margin-left:-80px;  ">
            <ul1 class="w_bullet">
            <li>
            <p class="w_bulletitem">Building Database</p>
            </li>
            <li>
            <p class="w_bulletitem">Tenant Database</p>
            </li>
            </ul1>
            </h5>
            </div>    
                            <!--kanan  -->
                            <div class="layer-1-8 " style=" align: right; margin-bottom:300px;   width: 35%;">

            <a>  <img  src="{{ Storage::url('images/features/finance.png') }}" alt="" title="" style="margin-top:120px; margin-left:700px;"/>
            </a>

            </div>
            <div > 
            <h5 class="kotakputih"  style="margin-top:-515px; margin-left:-75px;  ">
            <ul1 class="w_bullet">
            <li>
            <p class="w_bulletitem">Building Database</p>
            </li>
            <li>
            <p class="w_bulletitem">Tenant Database</p>
            </li>
            </ul1>
            </h5>
            </div>  
            
        <!-- kiri -->
        
     
        <div class="layer-1-8 " style=" align: leftt; margin-left:85px; margin-bottom:300px; width: 35%;">

<a>  <img  src="{{ Storage::url('images/features/maintenance.png') }}" alt="" title="" style="margin-top:190px;"/>
  </a>

  </div>
  <div > 
<h5 class="kotakputih"  style="margin-top:-580px; margin-left:-80px; height:auto;  ">
<ul1 class="w_bullet">
<li>
<p class="w_bulletitem">Maintenance & Repair</p>
</li>
<li>
<p class="w_bulletitem">Tenant Relation</p>
</li>
<li>
<p class="w_bullet w_bulletitem ">Access and Monitoring</p>
</li>
</ul1>
</h5>
</div>    
          <!--kanan  -->
          <div class="layer-1-8 " style=" align: right; margin-bottom:300px;   width: 35%;">

<a>  <img  src="{{ Storage::url('images/features/car.png') }}" alt="" title="" style="margin-top:120px; margin-left:700px;"/>
</a>

</div>
<div > 
<h5 class="kotakputih"  style="margin-top:-515px; margin-left:-75px;  ">
<ul1 class="w_bullet">
<li>
<p class="w_bulletitem">Parking System</p>
</li>
<li>
<p class="w_bulletitem">Smart Meter</p>
</li>
</ul1>
</h5>
</div>  


        <!-- kiri -->
        
     
        <div class="layer-1-8 " style=" align: leftt; margin-left:85px; margin-bottom:300px; width: 35%;">

<a>  <img  src="{{ Storage::url('images/features/smarthome.png') }}" alt="" title="" style="margin-top:190px;"/>
  </a>

  </div>
  <div > 
<h5 class="kotakputih"  style="margin-top:-580px; margin-left:-80px;  ">
<ul1 class="w_bullet">
<li>
<p class="w_bulletitem">Triple Play</p>
</li>
<li>
<p class="w_bulletitem">Smart Living</p>
</li>
</ul1>
</h5>
</div>    
        


<br style="margin-bottom:280px;">
<!-- </div> -->



@endsection
