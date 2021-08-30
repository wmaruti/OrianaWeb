<style>
 /* Style tombol utama by Mas Malven*/
.dropbtn {
    background-color: #fff;
    color: black;
    padding: 25px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Warna background dari tombol utama ketika isi konten dropdown ditampilkan */
.dropdown:hover .dropbtn {
    background-color: #fff;
}

/* Isi dari <div> - Diperlukan untuk memposisikan isi konten dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Isi konten dropdown (disembunyikan) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 325px;
    border-radius: 20px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Link di dalam menu dropdown */
.dropdown-content a {
    color:#fff;
    padding: 12px 16px;
    margin-left: 2.5rem;
    text-decoration: none;
    display: inline;
}

/* Warna link di dalam dropdown ketika disorot */
.dropdown-content a:hover {
 background-color:#008c5f;
 color: #3ec1d5 !important;
}

/* Tampilkan isi konten dopdown ketika disorot */
.dropdown:hover .dropdown-content {
    display: block;
}
</style>

<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="{{ url('/') }}">
                  <!-- <h1><span>{{ config('web_config')['WEBSITE_LOGO']  }}</span></h1> -->
                  <img  src="{{ config('web_config')['WEBSITE_LOGO'] ? Storage::url('images/setting/'.config('web_config')['WEBSITE_LOGO']) : '' }}" width="100px" >
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu " id="navbar-example" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="{{ url('/') }}">Home</a>
                  </li>

                  <!-- <li>
                    <a class="page-scroll" href="#services">Product<i class="fa fa-chevron-down"></i></a>
                  </li> -->

                  <!-- <li><a href="#">Product <i class="fa fa-chevron-down"></i></a>
      <ul class="dropdown">
        <li><a href="#">Oriana for Property Management</a></li>
        <li><a href="#">Oriana for F&B Industry</a></li>
        <li><a href="#">Oriana for Education Sector</a></li>
      </ul>
    </li> -->
    <li>
    <div class="dropdown">
  <button class="dropbtn">Products<i class="fa fa-chevron-down"></i></button>
  <div class="dropdown-content">
    <br>
    <p>
    <a href="{{ url('productspage') }}">Oriana for Property Management </a>
    </p>
    <p> 
    <a href="{{ url('productspage1') }}">Oriana for F&B Industry</a>
    </p>
    <p>
    <a href="{{ url('productspage2') }}">Oriana for Education Sector</a>
    </p>
    <br>
  </div>
</div>
    </li>

              
                  <!-- <li class="nav-item main-menu dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>                 -->
                  <li>
                    <a class="page-scroll" href="{{ url('about_uspage') }}">About Us</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contact Us</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{ url('our_partner') }}">Our Partner</a>
                  </li>
                  <!-- <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#services">Services</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Team</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="#blog">Blog</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li> -->

                    @guest()
                    <li>
                        <!-- <a class="page-scrool" href="{{ route('login') }}">Login</a> -->
                    </li>
                    @else
                    <li>
                        <a class="page-scrool" href="{{ route('admin.dashboard.index') }}">Admin</a>
                    </li>
                    @endguest
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
  <!-- <script>
     $("ul li").slideUp();
    $("label").mouseover(function () {
        $("ul li").slideToggle();
    });
  </script> -->
