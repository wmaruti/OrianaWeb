@extends('layout.master')

@section('title')
    <title>{{ config('web_config')['WEBSITE_TITLE'] }}</title>
@endsection
@section('content')
    <!-- Start Slider Area -->
    <div id="home"  style="background-color: white;">
        <div class="bend niceties preview-2">
        <div  class="image " style="width:1355px;">
                <img  src="{{ Storage::url('images/setting/career.png') }}" alt="" title="" /> <br>
                
            </div>
            <div class="layer-1-7-career  text-center ">
           <strong> <p> <h2 class="title1"  style="margin-top: -15.813rem; ">Oriana Career</h2></p> 
          </strong>
   
            <div class="layer-1-8-product  text-center ">
           <strong> <p> <h2 class="title1"  style="margin-top: 1.375rem; margin-left: 0px; font-size:4rem;">Build your career with us</h2></p> 
          </strong>
           
                                </div>
                                </div>
                                </div>
    <!-- End Slider Area -->

                 </div>
                    <!-- </div>
                    </div> -->
    <!-- End Product area -->
  
   
    <!-- Start About area -->
    <div id="career" class="about-area area-padding" style="background-color: white;">

        <div class="container">
            
            <!-- <div class="row"> -->
                <!-- <div class="col-md-12 col-sm-12 col-xs-12"> -->
                  
                    <div class="layer-1-8 " style=" text-align: center;  margin: 13.784rem 15.063rem 4.063rem 15.125rem;">
                   
                        <p><h2>Find your dream role<h2></p>
                    </div>
                    <div>
                   
                     <style>

                    .tulisan {
                        font-size: 1.625rem;
                        font-weight: 500;
                        font-stretch: normal;
                        font-style: normal;
                        line-height: normal;
                        letter-spacing: 0.93px;
                        color: #0f0f0f;
                         }
                    .Rectangle {
                        width: 100%;
                        height: 100%;
                        margin: 2rem 0rem 1rem;
                        padding: 1.75rem 1.75rem;
                        border-radius: 30px;
                        box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.08);
                        background-color: #ffffff;
                        
                        }
                        .location {

                        width: 12.063rem;
                        height: 1.25rem;
                        margin: 0.563rem 37.375rem 0.188rem 1.25rem;
                        /* font-family: Gotham; */
                        font-size: 1.25rem;
                        font-weight: 500;
                        font-stretch: normal;
                        font-style: normal;
                        line-height: normal;
                        letter-spacing: 0.71px;
                        color: #253470;

                            }
                            .position {

                            width: 5.188rem;
                            height: 1.25rem;
                            font-family: Gotham;
                            font-size: 1.25rem;
                            font-weight: normal;
                            font-stretch: normal;
                            font-style: normal;
                            line-height: normal;
                            
                            color: #0f0f0f;
                            }

                            .Oval {
                            width: 0.625rem;
                            height: 0.625rem;
                            margin: 0.313rem 1.25rem;
                            background-color: #f9a236;
                            }
                     </style>
         <div >
               
                  @foreach($career as $career1)
                  <div>
                     
                <div class="Rectangle " >
                   <div class=" .col-md-">
                <p> <h5 style=" font-size: 1.625rem;font-weight: bold;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: 0.93px;color: #0f0f0f;">  {!! $career1->job_name !!}  </h5> </p>
                <p> <h5 style=" font-size: 1.25rem; font-weight: normal; letter-spacing: 0.71px;color: #0f0f0f;">   {!! $career1->job_position !!}  &nbsp;  <i class="fa fa-circle" style="color:#f9a236; font-size:10px;"> </i> &nbsp; {!! $career1->category !!}</h5>  </p>
                <p class="location">  <img src="{{ Storage::url('images/setting/map-pin.png')}}" style="margin-left:-15px;"> <h5 class="location" style="margin:-7px 0 10px 35px;" >  {!! $career1->location !!}  </h5> </img></p>
                </div> 
              
                </div> 
                
        <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal{{$career1->id}}"
           style=" 
                    color: white;
                    width: 19.938rem;   
                    height: 4.375rem;
                    margin-top:-210px;
                    margin-left:900px;
                    border-radius: 35px;
                    padding-top:10px;
                    font-size: 1.375rem;
                    box-shadow: 0 8px 16px 0 rgba(35, 57, 149, 0.2);
                    background-color: #253470;" >
                    Apply</a>
                    
<!-- modal  -->

       <div class="modal fade" id="modal{{$career1->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog " style="width:70%;">
                <div class="modal-content" style="border-radius:50px;">
                    <!-- <div class="modal-header">

                            
                        </button>
                    </div> -->
                    <!-- di dalam modal-body terdapat 4 form input yang berisi data.
                    data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
                    <div class="modal-body">
                    <img style="width:2.5rem; height:2.5rem; margin-top: 2.125rem; margin-right: 2.125rem; " type="button" class="close" src="{{ Storage::url('image/keluar.png')}}" data-dismiss="modal"></img>

                        <form method="POST" action="{{ route('career.store') }}" enctype="multipart/form-data" style="  margin: 8.313rem 7.5rem 0 5.313rem;">
                        <p > <h5 style="font-weight:bold; color: #253470; font-size: 2.5rem;">  {!! $career1->job_name !!}  </h5> </p>
                <p> <h5 style="font-weight:500;  font-size: 1.25rem;">  {!! $career1->job_detail !!}  </h5> </p>
               
               <p style="font-size: 1.75rem;
                          font-weight: 500;
                          font-stretch: normal;
                          font-style: normal;
                          line-height: normal;
                          letter-spacing: 1px;
                          color: #0f0f0f;
                          "><strong>Upload your CV/Portfolio</strong><strong><span style="color: #ff0000;">*</span></strong></p>
                <p style="font-size: 1.625rem;
                          font-weight: normal;
                          font-stretch: normal;
                          font-style: normal;
                          line-height: normal;
                          letter-spacing: 0.93px;
                          color: #a6a6a6;
                          ">(.pdf,.docx.,pptx)</p>

                          <style>
                                .kotakorens {
                            
                            width: 100%;
                            height: 12.5rem;
                            /* margin: 0.438rem 12.5rem 3.75rem 3.75rem; */
                            position:center;
                            padding: 4.125rem 32.063rem 3rem 0;
                            opacity: 0.4;
                            border-radius: 20px;
                            border: solid 3px #f9a236;
                            border-style: dashed;
                          }
                          </style>

                          <!-- <div class=" kotakorens " style="margin-bottom:3.75rem;">
                          <div>
                          <p style=" width: 14.813rem;
                                height: 1.5rem;
                                margin: -1rem 0 0rem 9.75rem;
                                font-family: Gotham;
                                font-size: 1.5rem;
                                font-weight: normal;
                                font-stretch: normal;
                                font-style: normal;
                             
                                color: #a6a6a6;">Drag your file here</p> <br>
                                <p style="margin-top:-10px;">  <span style=" width: 10%; color: #a6a6a6; margin-left:10rem;">or  </span>
                                <span style="  width: 14.813rem; color:#f9a236; margin-left:1rem; ">browse file </span></p>
                        </div>

                                <div  style="color:#f9a236; margin-top:-40px;">
                          <i class="fa fa-cloud-upload fa-3x" aria-hidden="true" style="color:#f9a236; margin-top:-20px; margin-left:10px;"></i>
                        </div>
                        

                        
                        </div>
                        <button type="button" 
                                style="width: 14.938rem;
                                height: 4.375rem;
                                margin: 0.125rem 52.563rem 0 0rem;
                
                                border-radius: 35px;
                                background-color: #a6a6a6;
                                font-size: 1.375rem;
                                font-weight: 500;
                                font-stretch: normal;
                                font-style: normal;
                                line-height: normal;
                                letter-spacing: normal;
                                color: #ffffff;

                              ">Submit</button> -->

                              <form method="POST" action="{{ route('career.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group ">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Upload your CV/Portfolio*') }}</label> -->

                            <div class="form-group ">
                 <style>
                     .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn1 {
    width: 100%;
                            height: 12.5rem;
                            /* margin: 0.438rem 12.5rem 3.75rem 3.75rem; */
                            position:center;
                            padding: 4.125rem 32.063rem 3rem 0;
                            opacity: 0.4;
                            border-radius: 20px;
                            border: solid 3px #f9a236;
                            border-style: dashed;
                            background:white;
}

.upload-btn-wrapper input[type=file] {
  font-size: 10px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
                 </style>           
                              <input type="file" class="form-control kotakorens " name="filename[]" required multiple >
                              <!-- <button type="file" name="filename[]" class="fa fa-cloud-upload fa-3x kotakorens" aria-hidden="true" style="color:#f9a236; margin-top:-20px; margin-left:10px;"></button> -->
                             
                             
                              <!-- <div class="upload-btn-wrapper" >    
                        
                            <button class="btn1 fa fa-cloud-upload fa-3x ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drag your file here</button>
                            <input type="file" name="myfile" class="upload-btn-wrapper kotakorens form-control" name="filename[]" required multiple/>
                            </div> -->
                            </div>
                        </div>
                        <div class="form-group">
                                    <label for="position" style="display:none">jobs_id</label>
                                    <input type="text" class="form-control" name="jobs_id" id="jobs_id" value="{{ $career1->id }}" placeholder="Masukan posisi" style="display:none">
                                    @if($error = $errors->first('jobs_id'))
                                        <p class="btn btn-danger mt-2">{{ $error }}</p>
                                    @endif
                                </div>
                    
                        <div class="form-group ">
                            <div >
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                                <!-- @if(session()->has('message'))
                                <div class="alert alert-success">
                                 {{ session()->get('message') }}
                                 </div>
                                @endif -->

                                <!-- @if (\Session::has('success'))
                                <div class="alert alert-success">
                                 <ul>
                                <li>{!! \Session::get('success') !!}</li>
                                </ul>
                                </div>
                                @endif -->

                            </div>
                        </div>
                    </form>

                        </form>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-primary" style="width: 19.938rem;
                                height: 4.375rem;
                                margin: 0.125rem 52.563rem 0 3.75rem;
                                padding: 1.563rem 7.5rem;
                                border-radius: 35px;
                                background-color: #a6a6a6;
                              }">Submit</button>
                    </div> -->
                </div>
            </div>
        </div> 
        
      
        @endforeach

        @if (\Session::has('success'))
                                <div class="alert alert-success">
                                 <ul>
                                <li>{!! \Session::get('success') !!}</li>
                                </ul>
                                </div>
                                @endif
        
<div style="margin-bottom:14rem;">
                          </div>


                          <div>

       <!-- Modal -->
 <div id="ajaxModel" class="modal fade in" role="dialog">
 
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
                            <form action="{{ url('/contactStoremodal') }}" method="post"  id="productForm"  >
                            {{ csrf_field() }}

                                <div class="form-group">
                                    
                                <p>
                                    <input class="form-control"type="text" name="name"  id="name" placeholder=" Name*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="border: none; border-bottom: 1px solid #bababa; width:18.688rem; margin-right:2.483rem;"/>
                                    <input class="form-control"  name="phone"  type="number" min="0" max="9999999999999999999999999999999999" value="{{ old('phone') }}" id="name" placeholder=" Phone*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="border: none; border-bottom: 1px solid #bababa; width:18.4rem; margin-top:-50px; margin-left:215px;"/>
                                </p>
                                 
                                 
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"  id="email" placeholder=" Email*" data-rule="email*" data-msg="Please enter a valid email"  style="border: none; border-bottom: 1px solid #bababa;  width: 39.813rem;  margin-top:-10px;"/>
                                   
                                </div>


                        <select class="select" id="services_id" name="subject"  id="subject" placeholder="Product*" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"  style=" width: 39.813rem; border: none; border-bottom: 1px solid #bababa; color:grey; padding-bottom:10px; " > 
                            <option value="" > &nbsp;&nbsp;&nbsp;&nbsp; Products* 
                            </option>
                            @foreach($listServices as $services) {
                                
                                <option style="color:black;" value= "{{$services->title}}" >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $services->title}}  
                                 </option>
                            @endforeach
                            </select> 
                            <!-- <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left:-13px; color:#253470;"></i> -->

                         
                        </div>

                           <div class="form-group">
                                    <textarea class="form-control" name="message"  id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="&nbsp;&nbsp;&nbsp;Message" 
                                    style="border: none; border-bottom: 1px solid #CCC;  width: 39.813rem; height:100px; margin-top:13px;"></textarea>
                                  
                                </div>
                         
                                <div class="text-center"><button type="submit" id="saveBtn" value="create" style=" color: white; width: 19.938rem;   height: 4.375rem;

margin: 1.5rem 25.125rem 9.5rem 3.563rem;


border-radius: 35px;

box-shadow: 0 8px 16px 0 rgba(35, 57, 149, 0.2);

background-color: #253470;" >Save</button></div>




            
                       
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>




    <!-- End Contact Area -->

<style>
.Rectangle1 {

width: 90rem;

height: 1.25rem;

padding-right: 5.375rem;

margin-top: -5.375rem;


margin-left: 2rem;

background-color: #f7f7f7;

}



</style>


<div class="Rectangle1 " style="margin-top:20px;"> </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
<script type="text/javascript">

$(document).ready(function () {

$('#productForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
        url: "/contactStoremodal",
        data: $('#productForm').serialize(),
        success: function (response) {
            console.log(response)
            $('#ajaxModel').modal('hide')
            alert("Data Saved");
            // setTimeout(function(){ location.reload()}, 3000);
            location.reload();
        },
        error: function(error) {
            console.log(error)
        }
    });
});
  
});
  

</script>
                    
@endsection




