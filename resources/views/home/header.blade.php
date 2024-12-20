<header class="header ">
    <div class="container">

      <div class="logo flex items-center">
          <img src="{{ asset('trek/images/logo.png') }}" alt="logo" class="logo-img">
          <a href="#" class="logo-name">Nepalese  <span  class="span1">Trekking</span></span></a>
      </div>
      
        <nav class="menu">
            <div class="head">
                <img src="{{asset('trek/images/logo.png')}}" height="40px" width="40px" alt="logo">
                <!-- <h1>lo go</h1> -->
                <button type="button" class="close-menu-btn"></button>
            </div>
            <ul>
               
                <li><a href="">Home</a></li>

                <li class="dropdown">
                    <a href="">Treks</a>
                    <i class="fa-solid fa-chevron-down" ></i>
                    <ul class="sub-menu">
                        <li><a href=""><span>About</span></a></li>
                        <li class="dropdown">
                            <a href=""><span>team</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>tema 1</span></a></li>
                                <li><a href=""><span>tema 2</span></a></li>
                                <li><a href=""><span>tema 3</span></a></li>
                                <li><a href=""><span>tema 4</span></a></li>
                                <li><a href=""><span>tema 5</span></a></li>
                            </ul>
                            
                        </li>
                        <li><a href=""><span>Team</span></a></li>
                        <li><a href=""><span>Testimonials</span></a></li>
                        <li><a href=""><span>Pricing</span></a></li>
                        <li class="dropdown">
                            <a href=""><span>Elements</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>tema 1</span></a></li>
                                <li><a href=""><span>tema 2</span></a></li>
                                
                                <li class="dropdown">
                                    <a href=""><span>Cards</span></a>
                                    <i class="fa-solid fa-chevron-down" ></i>
                                    <ul class="sub-menu sub-menu-right">
                                        <li><a href=""><span>card1</span></a></li>
                                        <li><a href=""><span>card2</span></a></li>
                                        <li><a href=""><span>card3</span></a></li>
                                        <li><a href=""><span>card4</span></a></li>
                                        <li><a href=""><span>card5</span></a></li>
                                       
                                        </ul>

                                </li>
                                <li><a href=""><span>tema 3</span></a></li>

                                <li><a href=""><span>tema 4</span></a></li>
                                <li><a href=""><span>tema 5</span></a></li>
                            </ul>
                        </li>
                    </ul>

                </li>
               
                <li><a href="">Tours</a></li>
                <li  class="dropdown">
                    <a href="">Portfolio</a>
                    <i class="fa-solid fa-chevron-down" ></i>
                    <ul class="sub-menu">
                        <li><a href=""><span>About</span></a></li>
                        <li class="dropdown">
                            <a href=""><span>team</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-left">
                                <li><a href=""><span>tema 1</span></a></li>
                                <li><a href=""><span>tema 2</span></a></li>
                                <li><a href=""><span>tema 3</span></a></li>
                                <li><a href=""><span>tema 4</span></a></li>
                                <li><a href=""><span>tema 5</span></a></li>
                    </ul>
                            <li><a href=""><span>port</span></a></li>
                            <li><a href=""><span>port</span></a></li>
                            <li><a href=""><span>port</span></a></li>
                            
                        </li>
                    </ul>   
                <li><a href="">BLog</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
        <div class="header-right">
              <button type="button" class="icon-btn">
                  <i class="fa-solid fa-search"></i>
              </button>
              <button type="button" class="icon-btn">
                  <i class="fa-solid fa-shopping-cart"></i>
              </button>
  
            <button type="button" class="open-menu-btn">
              <span class="line line-1"></span>
              <span class="line line-2"></span>
              <span class="line line-3"></span>
            </button>

        </div>
    </div>

</header>
<!-- <section class="hero" >
    <video class="video-slide active" src="../aaaaa/video/12750575_1920_1080_25fps.mp4" autoplay muted loop></video>
</section> -->

<section class="hero">
  <div class="overlay"></div>
  {{-- <video class="video-slide" src="{{asset('trek/video/12750575_1920_1080_25fps.mp4')}}" autoplay muted loop></video> --}}
  <video class="video-slide" src="{{asset('trek/video/discovery-himalaya-trekking.mp4')}}" autoplay muted loop></video>
{{--     
  <div class="content active home__data">
    <h1>Wonderful. <br> <span>Nepal</span></h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illum impedit incidunt...</p>
    <a href="">Read More</a>
  </div> --}}
  
  <div class="media-icons">
    <a href=""><i class="fab fa-facebook"></i></a>
    <a href=""><i class="fab fa-instagram"></i></a>
    <a href=""><i class="fab fa-twitter"></i></a>
  </div>
          <style>
              .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.3); /* Adjust opacity as needed */
      z-index: 2;
              }

      .content {
      position: relative;
      z-index: 3;
      color: #fff; /* Ensures text is visible */
      }

  </style>
</section>