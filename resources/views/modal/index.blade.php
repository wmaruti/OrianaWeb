
	<!-- Tombol untuk menampilkan modal-->
	<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buka Modal</button> -->
 
 <!-- Modal -->
 <div id="ajaxModel" class="modal fade" role="dialog">
 
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
                            <form action="{{ url('/modal/store') }}" method="post"  id="productForm" >
                                {{ csrf_field() }}
                           

                                <div class="form-group">
                                    
                                <p>
                                    <input class="form-control"type="text" name="name"  id="name" placeholder=" Name*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="border: none; border-bottom: 1px solid #bababa; width:18.688rem; margin-right:2.483rem;"/>
                                    <input class="form-control" type="text" name="phone"   id="phone" placeholder=" Phone*" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  style="border: none; border-bottom: 1px solid #bababa; width:18.4rem; margin-top:-56px; margin-left:215px;"/>
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
                            </select> <i class="fa fa-chevron-down" aria-hidden="true" style="margin-left:-13px; color:#253470;"></i>

                         
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">

$(document).ready(function () {

$('#productForm').on('submit', function(e) {
    e.preventDefault();
    
    $ajax({
        type: "POST",
        url: "/contact-us/contactStore",
        data: $('#productForm').serialize(),
        success: function (response) {
            console.log(response)
            $('#ajaxModel').modal('hide')
            alert("Data Saved");
        },
        error: function(error) {
            console.log(error)
        }
    });
});
  
});
  

</script>