	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>	

<!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
              
                <div class="footer-logo">
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <img class="kiriputih" src="{{ config('web_config')['WEBSITE_LOGO'] ? Storage::url('images/setting/'.config('web_config')['WEBSITE_LOGO_WHITE']) : '' }}" width="140px" >

                <!-- <h2><span>{{ config('web_config')['WEBSITE_TITLE'] }}</span></h2> -->
                </div>
                
                <div class="footer-contacts">
                  <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
                    <a href='#contact' class='akun'>
                    <img src="{{ Storage::url('image/building.png')}}"> </img>
                    <span style="  font-size: 1rem;

font-weight: normal;

font-stretch: normal;

font-style: normal;

line-height: 1.38;

letter-spacing: 0.5px"> <font color="#ffffff"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jakarta Office:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Estubizi Business Center<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gedung Setiabudi 2<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lantai 2 Suite 207B-CJI<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HR. Rasuna Said Kav 62<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kuningan, Jakarta, 12920
</span></a> <style> .ikon {
        fill: #fdd586;
        width: 24px;
        height: 24px;
    }</style></p>

<br>
<p style="margin-top: -30px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
  <a href='#' class='akun'>
  <img src="{{ Storage::url('image/mail.png')}}"> </img>    <span style="  font-size: 1rem;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
"> 
<font color="#ffffff" margin-top="100px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
oriana.pp@oriana.id
</span></a> <style> .ikon {
        fill: #fdd586;
        width: 24px;
        height: 24px;
    }</style></p>
<br><br>
<p style="margin-top: -40px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
 <a href='#' class='akun'>
 <img src="{{ Storage::url('image/phone.png')}}"> </img>
    <span style="  font-size: 1rem;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.38;"
    > 
<font color="#ffffff">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(021) 52905299 / 52971875 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


</span></a> <style> .ikon {
        fill: #fdd586;
        width: 24px;
        height: 24px;
    }</style></p>

<!-- <p><i class='fas fa-building' style='font-size:38px;color:red'></i> &nbsp; &nbsp;{{ $address->adress }}, {{ $address->city }}, {{ $address->country }}</p> -->
                  <!-- <p><span>Email:</span> {{ $contactUs->email }}</p>
                  <p><span>Tel:</span> {{ $contactUs->contact_number }}</p> -->

                </div>
                <!-- <p>{!! substr($about->description, 0,300) !!}</p> -->
                <!-- <div class="footer-icons">
                
                  <ul>
                      <li>
                          <a href="https://github.com/{{ $contactUs->github }}" target="_blank"><i class="fa fa-github"></i></a>
                      </li>
                    <li>
                      <a href="https://web.facebook.com/{{ $contactUs->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://api.whatsapp.com/send?phone={{ $contactUs->whatsapp }}&text=Assalamualaikum Warahmatullahi Wabarakatuh" target="_blank"><i class="fa fa-whatsapp"></i></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/{{ $contactUs->instagram }}/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div> -->
            </div>
              </div>
          </div>
          <!-- end single footer -->
          <div class=" col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head1 section-headline">
                <h2><strong>Explore </strong></h2>
                <div class="footer-isi section-headline1">
                    <ul>
                    <a href="{{ url('about_uspage') }}" > About </a><br>
                    <a href="{{ url('featurespage') }}" > Features </a><br>
                    <a href='contact' > Careers </a>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="footer-content">
              <div class="footer-head1 section-headline">
                <h2>Help</h2>
                <div class="footer-isi section-headline1">
                    <ul>
                    <a href='#' > FAQ </a><br>
                    <a href='#myModal' data-toggle="modal" data-target="#myModal"> Support </a><br>
                   	<!-- Tombol untuk menampilkan modal-->
	<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buka Modal</button> -->
 
 <!-- Modal -->
 <div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog  modal-lg">
     <!-- konten modal-->
     <div class="modal-content">
       <!-- heading modal -->
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Bagian heading modal</h4>
       </div>
       <!-- body modal -->
       <div class="modal-body">
         <p>bagian body modal.</p>
         
       </div>
       <!-- footer modal -->
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
       </div>
     </div>
   </div>
 </div>
                    <a href='contact' > Contact </a>
                        <!-- @foreach($services as $service)
                        <li><p>{{ $service->title }}</p></li>
                        @endforeach -->

                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy;  <strong>2021  PT ORIANA PRIMA PERSADA. ALL RIGHT RESERVED</strong> 
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
