<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

        <!-- Styles / Scripts -->
      
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <link rel="stylesheet" href="{{asset('trek/css/navbarandslider.css')}}">
       
    </head>
   <body>

    <header class="header">
      <div class="container">
          <div class="logo">
              <img src="{{asset('trek/images/logo.png')}}" height="50px" width="50px" alt="logo">
               <!-- <h1>lo go</h1> -->
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
                      <a href="">Pages</a>
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
                 
                  <li><a href="">Services</a></li>
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
      
          <video class="video-slide" src="{{asset('trek/video/12750575_1920_1080_25fps.mp4')}}" autoplay muted loop></video>
  
          <div class="content active">
              <h1>Wonderful. <br> <span>Nepal</span></h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illum impedit incidunt, quaerat enim aperiam quam dolore minus animi maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique porro corporis laudantium officia rerum commodi nobis sint ex sit reiciendis veniam fuga minima incidunt architecto suscipit excepturi recusandae earum quasi enim, at dignissimos possimus nihil laboriosam? Corporis vitae, nemo nihil sequi dignissimos ad. Voluptas fugit expedita nesciunt saepe, vel maxime?</p>
          <a href="">Read More</a>
          </div>
         
          <div class="media-icons ">
              <a href="">
                  <i class="fab fa-facebook"></i>
              </a>
              <a href="">
                  <i class="fab fa-instagram"></i>
  
              </a>
                  <a href=""><i class="fab fa-twitter"></i></a>
                  
              
          </div>
      </section>    
  </section>
  
  <section class="content">
      <div class="container">
          <h2>About Us</h2>
          <p>
              Welcome to our website! We are excited to share our story with you. Scroll down to explore our amazing content and services.
          </p>
          <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada. Nullam ac erat a erat suscipit sagittis. Integer vel urna quam.
          </p>
      </div>
  </section>
  


    




<script src="{{asset('trek/js/navbarandslider.js')}}"></script>


   </body>
</html>
