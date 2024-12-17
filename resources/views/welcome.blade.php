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

            <style>
                /* Custom scrollbar styles for hiding scrollbar */
                .scrollbar-hide::-webkit-scrollbar {
                    display: none;
                }
                .scrollbar-hide {
                    -ms-overflow-style: none; /* IE and Edge */
                    scrollbar-width: none; /* Firefox */
                }
              </style>
       
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
  <section>
        <section class="bg-gray-100 py-10">

            <!-- Main Container -->
            <div class="container mx-auto px-4 py-10 relative">

                <!-- Title -->
                <h2 class="text-4xl font-extrabold text-center mb-10 text-gray-800">Featured Experiences</h2>

                <!-- Carousel Container -->
                <div class="relative group py-6">

                    <!-- Card Wrapper -->
                    <div id="carousel" class="flex overflow-x-auto space-x-6 scrollbar-hide snap-x snap-mandatory scroll-smooth px-4 transition-all duration-700">
                        <!-- Card 1 -->
                        <div class="w-full sm:w-1/3 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                            <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                                <img src="{{asset('trek/images/image copy.png')}}" alt="Trek Image"
                                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Base Camp Trek</h3>
                                    <p class="text-gray-500 mb-4">Duration: 11 Days</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-green-600 font-bold">US $769</span>
                                        <span class="text-yellow-500 flex">
                                            &#9733; &#9733; &#9733; &#9733; &#9733; (7 reviews)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Card 2 -->
                        <div class="w-full sm:w-1/3 flex-shrink-0 snap-center">
                            <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl transform transition-transform duration-300">
                                <img src="{{asset('trek/images/image copy 3.png')}}" alt="Trek Image"
                                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Circuit Trek</h3>
                                    <p class="text-gray-500 mb-4">Duration: 9 Days</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-green-600 font-bold">US $499</span>
                                        <span class="text-yellow-500 flex">
                                            &#9733; &#9733; &#9733; &#9733; &#9733; (1 review)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Card 3 -->
                        <div class="w-full sm:w-1/3 flex-shrink-0 snap-center">
                            <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl transform transition-transform duration-300">
                                <img src="{{asset('trek/images/image copy 2.png')}}" alt="Trek Image"
                                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Sanctuary Trek</h3>
                                    <p class="text-gray-500 mb-4">Duration: 13 Days</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-green-600 font-bold">US $930</span>
                                        <span class="text-yellow-500 flex">
                                            &#9733; &#9733; &#9733; &#9733; &#9733; (6 reviews)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Card 4 -->
                        <div class="w-full sm:w-1/3 flex-shrink-0 snap-center">
                            <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl transform transition-transform duration-300">
                                <img src="https://via.placeholder.com/600x400" alt="Trek Image"
                                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2 text-gray-700">Everest Base Camp Trek</h3>
                                    <p class="text-gray-500 mb-4">Duration: 14 Days</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-green-600 font-bold">US $1200</span>
                                        <span class="text-yellow-500 flex">
                                            &#9733; &#9733; &#9733; &#9733; &#9733; (12 reviews)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Card 5 -->
                        <div class="w-full sm:w-1/3 flex-shrink-0 snap-center">
                            <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl transform transition-transform duration-300">
                                <img src="https://via.placeholder.com/600x400" alt="Trek Image"
                                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2 text-gray-700">Mardi Himal Trek</h3>
                                    <p class="text-gray-500 mb-4">Duration: 7 Days</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-green-600 font-bold">US $399</span>
                                        <span class="text-yellow-500 flex">
                                            &#9733; &#9733; &#9733; &#9733; &#9733; (9 reviews)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Left and Right Arrows -->
                    <button id="leftArrow"
                    class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white pl-2 pr-3 pt-4 pb-4 rounded-full hover:bg-gray-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                &#9664;
            </button>
            <button id="rightArrow"
                    class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white pl-3 pr-2 pt-4 pb-4 rounded-full hover:bg-gray-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                &#9654;
            </button>
        </div>
        </div>
        </section>

        <!-- Scrollbar Hide CSS -->
        <style>
        .scrollbar-hide::-webkit-scrollbar {
        display: none;
        }

        .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
        }

        /* Smooth sliding animation */
        #carousel {
        animation: slideIn 0.7s ease-out;
        }

        @keyframes slideIn {
        0% {
            transform: translateX(-50px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
        }
        </style>

        <!-- JavaScript for Sliding -->
        <script>
        const carousel = document.getElementById('carousel');
        const leftArrow = document.getElementById('leftArrow');
        const rightArrow = document.getElementById('rightArrow');

        // Scroll Right
        rightArrow.addEventListener('click', () => {
        carousel.scrollBy({ left: 350, behavior: 'smooth' });
        });

        // Scroll Left
        leftArrow.addEventListener('click', () => {
        carousel.scrollBy({ left: -350, behavior: 'smooth' });
        });

 
</script>
</section>


<section>
    <section class="bg-gray-100">

        <!-- Main Container -->
        <div class=" mx-auto px-4 py-10 relative-[90%]" style="width: 90%">
    
            <!-- Title -->
            <h2 class="text-4xl font-extrabold text-center mb-10 text-gray-800">Featured Experiences</h2>
    
            <!-- Carousel Container -->
            <div class="relative group py-6">
    
                <!-- Card Wrapper -->
                <div id="carousel" class="flex overflow-x-auto space-x-6 scrollbar-hide snap-x snap-mandatory scroll-smooth px-4 transition-all duration-700">
                    <!-- Card 1 -->
                    <div class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                        <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                            <img src="{{asset('trek/images/image copy.png')}}" alt="Trek Image"
                                 class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Base Camp Trek</h3>
                                <p class="text-gray-500 mb-4">Duration: 11 Days</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-green-600 font-bold">US $769</span>
                                    <span class="text-yellow-500 flex">
                                        &#9733; &#9733; &#9733; &#9733; &#9733; (7 reviews)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more cards similarly -->
    
                    <!-- Card 2 -->
                    <div class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                        <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                            <img src="{{asset('trek/images/image copy 3.png')}}" alt="Trek Image"
                                 class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Circuit Trek</h3>
                                <p class="text-gray-500 mb-4">Duration: 9 Days</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-green-600 font-bold">US $499</span>
                                    <span class="text-yellow-500 flex">
                                        &#9733; &#9733; &#9733; &#9733; &#9733; (1 review)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more cards similarly -->
                    <div class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                        <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                            <img src="{{asset('trek/images/image copy 3.png')}}" alt="Trek Image"
                                 class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Circuit Trek</h3>
                                <p class="text-gray-500 mb-4">Duration: 9 Days</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-green-600 font-bold">US $499</span>
                                    <span class="text-yellow-500 flex">
                                        &#9733; &#9733; &#9733; &#9733; &#9733; (1 review)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                        <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                            <img src="{{asset('trek/images/image copy 3.png')}}" alt="Trek Image"
                                 class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Circuit Trek</h3>
                                <p class="text-gray-500 mb-4">Duration: 9 Days</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-green-600 font-bold">US $499</span>
                                    <span class="text-yellow-500 flex">
                                        &#9733; &#9733; &#9733; &#9733; &#9733; (1 review)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                        <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                            <img src="{{asset('trek/images/image copy 3.png')}}" alt="Trek Image"
                                 class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Circuit Trek</h3>
                                <p class="text-gray-500 mb-4">Duration: 9 Days</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-green-600 font-bold">US $499</span>
                                    <span class="text-yellow-500 flex">
                                        &#9733; &#9733; &#9733; &#9733; &#9733; (1 review)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                        <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                            <img src="{{asset('trek/images/image copy 3.png')}}" alt="Trek Image"
                                 class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Circuit Trek</h3>
                                <p class="text-gray-500 mb-4">Duration: 9 Days</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-green-600 font-bold">US $499</span>
                                    <span class="text-yellow-500 flex">
                                        &#9733; &#9733; &#9733; &#9733; &#9733; (1 review)
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
                <!-- Left and Right Arrows -->
                <button id="leftArrow"
                        class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white pl-2 pr-3 pt-4 pb-4 rounded-full hover:bg-gray-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    &#9664;
                </button>
                <button id="rightArrow"
                        class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white pl-3 pr-2 pt-4 pb-4 rounded-full hover:bg-gray-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    &#9654;
                </button>
            </div>
        </div>
    </section>
    
    <!-- Scrollbar Hide CSS -->
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    
        /* Smooth sliding animation */
        #carousel {
            animation: slideIn 0.7s ease-out;
        }
    
        @keyframes slideIn {
            0% {
                transform: translateX(-50px);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
    
    <!-- JavaScript for Sliding -->
    <script>
        const carousel = document.getElementById('carousel');
        const leftArrow = document.getElementById('leftArrow');
        const rightArrow = document.getElementById('rightArrow');
    
        // Get the width of one card
        const cardWidth = document.querySelector('.w-full').offsetWidth + 24;  // +24px is for the space between cards
    
        // Scroll Right
        rightArrow.addEventListener('click', () => {
            carousel.scrollBy({ left: cardWidth, behavior: 'smooth' });
        });
    
        // Scroll Left
        leftArrow.addEventListener('click', () => {
            carousel.scrollBy({ left: -cardWidth, behavior: 'smooth' });
        });
    </script>
    
</section>

<section class="bg-gray-100">

    <!-- Main Container -->
    <div class=" mx-auto px-4 py-10 relative-[88%]" style="width: 90%">

        <!-- Title -->
        <h2 class="text-4xl font-extrabold text-center mb-10 text-gray-800">Featured Experiences</h2>

        <!-- Carousel Container -->
        <div class="relative group py-6">

            <!-- Card Wrapper -->
            <div id="carousel" class="flex overflow-x-auto space-x-6 scrollbar-hide snap-x snap-mandatory scroll-smooth px-4 transition-all duration-700">
                <!-- Card 1 -->
                <a href="/trek/annapurna-base-camp" class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="{{asset('trek/images/image copy.png')}}" alt="Trek Image"
                             class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Base Camp Trek</h3>
                            <p class="text-gray-500 mb-4">Duration: 11 Days</p>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                <span class="text-green-600 font-bold">US $769</span>
                                <span class="text-green-600 font-bold">NRP 72000</span>
                            </div>
                                <span class="text-yellow-500 flex">
                                    &#9733; &#9733; &#9733; &#9733; &#9733; (7 reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="/trek/annapurna-circuit" class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="{{asset('trek/images/image copy 3.png')}}" alt="Trek Image"
                             class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Circuit Trek</h3>
                            <p class="text-gray-500 mb-4">Duration: 9 Days</p>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-green-600 font-bold">US $769</span>
                                    <span class="text-green-600 font-bold">NRP 72000</span>
                                </div>
                                <span class="text-yellow-500 flex">
                                    &#9733; &#9733; &#9733; &#9733; &#9733; (1 review)
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="/trek/annapurna-sanctuary" class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="{{asset('trek/images/image copy 2.png')}}" alt="Trek Image"
                             class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-700">Annapurna Sanctuary Trek</h3>
                            <p class="text-gray-500 mb-4">Duration: 13 Days</p>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-green-600 font-bold">US $769</span>
                                    <span class="text-green-600 font-bold">NRP 72000</span>
                                </div>
                                <span class="text-yellow-500 flex">
                                    &#9733; &#9733; &#9733; &#9733; &#9733; (6 reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 4 -->
                <a href="/trek/everest-base-camp" class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="https://via.placeholder.com/600x400" alt="Trek Image"
                             class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-700">Everest Base Camp Trek</h3>
                            <p class="text-gray-500 mb-4">Duration: 14 Days</p>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-green-600 font-bold">US $769</span>
                                    <span class="text-green-600 font-bold">NRP 72000</span>
                                </div>
                                <span class="text-yellow-500 flex">
                                    &#9733; &#9733; &#9733; &#9733; &#9733; (12 reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 5 -->
                <a href="/trek/mardi-himal" class="w-full sm:w-1/4 flex-shrink-0 snap-center transition-transform duration-700 ease-in-out transform hover:scale-105">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="https://via.placeholder.com/600x400" alt="Trek Image"
                             class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-700">Mardi Himal Trek</h3>
                            <p class="text-gray-500 mb-4">Duration: 7 Days</p>
                            <div class="flex items-center justify-between">
                                <div class="flex flex-col">
                                    <span class="text-green-600 font-bold">US $769</span>
                                    <span class="text-green-600 font-bold">NRP 72000</span>
                                </div>
                                <span class="text-yellow-500 flex">
                                    &#9733; &#9733; &#9733; &#9733; &#9733; (9 reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Left and Right Arrows -->
            <button id="leftArrow"
                    class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white pl-2 pr-3 pt-4 pb-4 rounded-full hover:bg-gray-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                &#9664;
            </button>
            <button id="rightArrow"
                    class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white pl-3 pr-2 pt-4 pb-4 rounded-full hover:bg-gray-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                &#9654;
            </button>
        </div>
    </div>
</section>

<!-- Scrollbar Hide CSS -->
<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* Smooth sliding animation */
    #carousel {
        animation: slideIn 0.7s ease-out;
    }

    @keyframes slideIn {
        0% {
            transform: translateX(-50px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>

<!-- JavaScript for Sliding -->
<script>
    const carousel = document.getElementById('carousel');
    const leftArrow = document.getElementById('leftArrow');
    const rightArrow = document.getElementById('rightArrow');

    // Get the width of one card
    const cardWidth = document.querySelector('.w-full').offsetWidth + 24;  // +24px is for the space between cards

    // Scroll Right
    rightArrow.addEventListener('click', () => {
        carousel.scrollBy({ left: cardWidth, behavior: 'smooth' });
    });

    // Scroll Left
    leftArrow.addEventListener('click', () => {
        carousel.scrollBy({ left: -cardWidth, behavior: 'smooth' });
    });
</script>
<script src="{{asset('trek/js/navbarandslider.js')}}"></script>
<script src="{{asset('trek/js/scrollreveal.min.js')}}"></script>
</body>
</html>
