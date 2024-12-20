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

              {{-- specialist --}}
              
              <style>
                .about-block {
            padding: 97px 0 20px
                    }
     
        
        @font-face {
            font-family: CerebriSans-Bold;
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url(/trek/images/specialist/media/CerebriSans-Bold.ea158a2e.woff2) format("woff2"), url(/trek/images/specialist/media/CerebriSans-Bold.4e6d6b88.woff) format("woff")
        }
        
        
        @font-face {
            font-family: CerebriSans-Medium;
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url(/trek/images/specialist/media/CerebriSans-Medium.c433bf22.woff2) format("woff2"), url(/trek/images/specialist/media/CerebriSans-Medium.7b54e36c.woff) format("woff")
        }
        
        
        @font-face {
            font-family: CerebriSans-Book;
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url(/trek/images/specialist/media/CerebriSans-Book.71b1a6ca.woff2) format("woff2"), url(/trek/images/specialist/media/CerebriSans-Book.ab760939.woff) format("woff")
        }

        @media screen and (max-width:1023px) {
            .about-block {
                padding: 50px 0 0
            }
        }
        
        @media screen and (max-width:767px) {
            .about-block {
                padding: 40px 0 0
            }
        }
        
        .about-block__heading {
            max-width: 530px;
            margin: 0 auto 50px;
            padding: 0 32px;
            position: relative;
            left: 80px
        }
        
        @media screen and (max-width:1023px) {
            .about-block__heading {
                left: 0;
                margin: 0 auto 50px 30px
            }
        }
        
        @media screen and (max-width:767px) {
            .about-block__heading {
                left: 23px;
                max-width: 700px;
                padding: 0 15px;
                margin: 0;
                top: -19px
            }
        }
        
        @media only screen and (max-width:356px) {
            .about-block__heading {
                left: 12px
            }
        }
        
        .about-block__heading:before {
            content: "";
            display: block;
            width: 2px;
            height: calc(100% - 13px);
            position: absolute;
            top: 9px;
            left: 0;
            background-color: #66071e ;
            opacity: .6
        }
        
        .about-block__title {
            font-family: Louize-DisplayBold, serif;
            font-size: 2.25rem;
            color: #1b2b3a;
            line-height: 1.3;
            margin-bottom: 15px
        }
        
        @media screen and (max-width:767px) {
            .about-block__title {
                font-size: 1.375rem;
                line-height: 1.23;
                letter-spacing: .31px
            }
        }
        
        .about-block__subtitle {
            display: block;
            font-family: CerebriSans-Bold, sans-serif;
            font-size: .8125rem;
            text-transform: uppercase;
            color: #4594b3;
            letter-spacing: .5px
        }
        
        @media screen and (max-width:767px) {
            .about-block__subtitle {
                font-size: .6875rem;
                line-height: normal;
                letter-spacing: .5px
            }
        }
        
        .about-block__main {
            background-color: #1f9dd9;
            position: relative;
            padding: 40px 0
        }
        
        .about-block__main:after {
            height: 100%;
            top: 0;
            background: url(/trek/images/specialist/media/general-pattern.4948f77b.png) repeat 0 0;
            opacity: .05
        }
        
        .about-block__main:after,
        .about-block__main:before {
            content: "";
            display: block;
            width: 100%;
            position: absolute;
            left: 0
        }
        
        .about-block__main:before {
            height: 18px;
            bottom: -18px;
            background: url(/trek/images/specialist/media/wave.a3eab4d6.svg) repeat-x top
        }
        
        @media screen and (max-width:767px) {
            .about-block__main:before {
                display: none
            }
        }
        
        .about-block__trekker {
            display: block;
            width: 330px;
            height: 220px;
            position: absolute;
            top: -219px;
            right: 0;
            background: url(/trek/images/specialist/media/trekker.6f7f580b.png) no-repeat 0 0
        }
        
        @media screen and (max-width:767px) {
            .about-block__trekker {
                width: 180px;
                height: 120px;
                top: -119px;
                background: url(/trek/images/specialist/media/trekker-small.a626b835.svg  ) no-repeat 0 0
            }
        }
        
        .about-block__wrap {
            max-width: 1166px;
            margin: 0 auto;
            padding: 0 25px;
            position: relative
        }
        
        .about-block__thumbnail {
            width: 382px;
            border: 6px solid #fff
        }
        
        @media screen and (max-width:1023px) {
            .about-block__thumbnail {
                margin-bottom: 30px;
                margin-left: auto;
                margin-right: auto
            }
        }
        
        @media screen and (max-width:767px) {
            .about-block__thumbnail {
                display: none
            }
        }
        
        .about-block__thumbnail--sticky {
            width: 262px;
            position: absolute;
            top: -230px;
            left: 0;
            border: 6px solid #fff
        }
        
        .about-block__details {
            position: relative;
            z-index: 2;
            padding-left: 8%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start
        }
        
        @media screen and (max-width:1023px) {
            .about-block__details {
                padding-left: 0;
                text-align: center
            }
        }
        
        @media screen and (max-width:767px) {
            .about-block__details {
                text-align: left
            }
        }
        
        .about-block__content {
            width: calc(100% - 458px);
            color: #fff;
            font-family: CerebriSans-Book, sans-serif;
            font-size: 1rem;
            margin-right: 10px;
            margin-top: 21px;
            line-height: 1.7
        }
        
        @media screen and (max-width:1023px) {
            .about-block__content {
                width: 100%;
                margin: 0
            }
        }
        
        .about-block__content button {
            color: #fff;
            background-color: transparent;
            padding: 0;
            border: none;
            transition: .3s ease
        }
        
        .about-block__content button:hover {
            opacity: .8;
            text-decoration: none
        }
        
        .about-block__content p {
            letter-spacing: 0
        }
        
        .about-block__content a {
            color: inherit
        }
        
        .about-block__content a:focus,
        .about-block__content a:hover {
            color: #feff00
        }
        
        .about-block__content .link {
            font-family: CerebriSans-Medium, sans-serif
        }
        
        .about-block__content--more {
            width: 100%;
            text-align: center;
            max-height: 0;
            overflow: hidden;
            transition: .3s ease;
            margin-top: 0
        }
        
        @media screen and (max-width:767px) {
            .about-block__content--more {
                text-align: left
            }
        }
        
        .about-block__content--more .col-8 {
            text-align: left
        }
        
        @media screen and (max-width:1023px) {
            .about-block__content--more .col-6 {
                text-align: left
            }
        }
        
        
        .link {
            border-bottom: 1px solid;
            font-size: .75rem;
            text-transform: uppercase;
            letter-spacing: 1px
        }
        
        .link,
        .link:focus,
        .link:hover {
            text-decoration: none
        }
    
        
        .link--white {
            color: #fff;
            border-color: hsla(0, 0%, 100%, .5)
        }
        
        .link--white:focus,
        .link--white:hover {
            text-decoration: none;
            opacity: .6;
            color: #fff !important;
            border-color: transparent
        }
        
        .image-container {
            position: relative;
            width: 100%; /* Adjust width as needed */
            flex-shrink: 0;
            padding-left: 20px;
        }
        
        
        .main-image {
            width: 300px;
            top: 20px;
            height: 300px;
            left: 20px;
            display: block;
            position: absolute;
             z-index: 1;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            border: #fff solid 5px;
        }
        
            
        
        .small-image {
            position: absolute;
            bottom: -120px;
            left:-20% ;
            width: 300px;
            height: 300px;
            border: 4px solid white;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
           z-index: inherit;
        }
        
        @media screen and (max-width:1120px)
        {
            .image-container {
            position: relative;
            width: 100%; /* Adjust width as needed */
            flex-shrink: 0;
            padding-left: 20px;
        }
        
        .main-image {
            width: 250px;
            top: 20px;
            height: 250px;
            left: 20px;
            display: block;
            position: absolute;
             z-index: 1;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            border: #fff solid 5px;
        }
    
        .small-image {
            position: absolute;
            bottom: -100px;
            left:-20% ;
            width: 250px;
            height: 250px;
            border: 4px solid white;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
           z-index: inherit;
        }
        }

        @media screen and (max-width:1023px)
        {
            .image-container
            {
                position: relative;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
        
            }
        
            .main-image {
            width: 250px;
            top: 00px;
            height: 250px;
            left: 00px;
            display: block;
            position: relative;
             z-index: 1;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            border: #fff solid 5px;
        }

        .small-image {
            position: relative;
            bottom: 00px;
            left:0% ;
            width: 250px;
            height: 250px;
            border: 4px solid white;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
           z-index: inherit;
        }
        }

        @media screen and (max-width:767px)
        {
            .image-container
            {
                position: relative;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
        
            }
        
            .main-image {
            width: 200px;
            top: 00px;
            height: 200px;
            left: 00px;
            display: block;
            position: relative;
             z-index: 1;
             margin-right: 2rem;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            border: #fff solid 5px;
        }      
        .small-image {
            position: relative;
            bottom: 00px;
            left:0% ;
            width: 200px;
            height: 200px;
            margin-right: 2rem;
            border: 4px solid white;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
         
        }        
        }     
        @media screen and (max-width:767px)
        {
            .image-container
            {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                gap: 2rem;
        
            }
        
            .main-image {
            width: 200px;
            height: 200px;   
             margin-right: 2rem;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            border: #fff solid 5px;
        }
 
        .small-image {
         
            width: 200px;
            height: 200px;
            margin-right: 2rem;
            border: 4px solid white;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
         
        }
        }
        
        @media screen and (max-width:620px)
        {
            .image-container
            { 
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 2rem;
        
            }
        
            .main-image {
            width: 280px;
            height: 220px;
             margin-right: 2rem;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            border: #fff solid 5px;
        }
        .small-image {
            width: 280px;
            height: 220px;
            margin-right: 2rem;
            border: 4px solid white;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
         
        }     
        }
        
        @media screen and (max-width:343px)
        {
            .image-container
            { 
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 2rem;
        
            }
        
            .main-image {
            width: 150px;
            height: 150px;
             margin-right: 2rem;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
            border: #fff solid 5px;
        }
        .small-image {
            width: 150px;
            height: 150px;
            margin-right: 2rem;
            border: 4px solid white;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
         
        }
        }
            </style>


        <style>
            .logo {
    display: flex;
    align-items: center;
    gap: 10px; /* Adjust spacing between logo and name */
}

.logo-img {
    height: 60px;
    width: 60px;
    object-fit: cover; /* Ensures the logo scales well */
}

.logo-name {
    font-size: 1.5rem; /* Adjust text size */
    font-weight: bold;
    /* color: rgb(102 7 30); Adjust color */
    color: #fff; /* Adjust color */
    text-decoration: none; /* Remove underline from link */
}

.logo-name:hover {
    color: #dac28a; /* Add hover effect */
}

            
        </style>

{{-- rgb(102 7 30)  #66071E-- red}}
{{-- rgb(30 41 59)   #1E293B-- blue}}
{{--#eeebeb  white --}}
{{-- #66071e red --}}
{{-- rgb(202 160 70) yeloow --}}
{{-- brown #753f0e --}}
       
    </head>
   <body>

@include('home.header')
@include('home.description')




  <section class="specialist bg-[#FDF7F4]">



    <section class="about-block " style="overflow: hidden;">

        <header class="about-block__heading">
            <h1 class="about-block__title font-bold " style="color:rgb(102 7 30);">A Leading Himalayan <br>Trekking & Adventure Specialist</h1>
            <h2 class="about-block__subtitle" style="color:rgb(102 7 30);">Nepal’s most trusted and multi-award-winning company</h2>
        </header>
        <div class="about-block__main"><span class="about-block__trekker"></span>
            <div class="about-block__wrap">
               
                <div class="about-block__details">
                    
                    <div class="about-block__details">
                        <div class="image-container">
                            <img src="{{asset('trek/images/image.png')}}" alt="Main Image" class="main-image">
                            <img src="{{asset('trek/images/image.png')}}" alt="Small Image" class="small-image">
                        </div>
                        <figure style="z-index: -1;">.</figure>
                        
                        <div class="about-block__content ">
                            <div>
                                <p>Discovery World Trekking is a Nepal government-registered trekking/expedition/tour company with over a decade of experience in eco-tourism. Our goal is to provide heart-warming hospitality in an exclusive private group
                                    trek environment while letting you explore the stunning Nepali geography - from the world's deepest gorge (The Kali Gandaki Gorge) to the highest mountain (Mt. Everest).</p>
                                <p><span data-preserver-spaces="true">We are quite </span><span data-preserver-spaces="true">successful in achieving our goal, as evidenced by the World Confederation of Businesses based in Houston, USA, awarding us the 2024 Business Excellence Certificate and Trip Advisor honoring us with Certificates of Excellence for the last twelve consecutive years.</span></p>
                            </div><button type="button" class="link link--white open-more" style="opacity:1;cursor:pointer">+ More About Us</button></div>
                    </div>
                   
            </div>
        </div>
    </section>
</section>

@include('home.card')
  
{{-- 
<section class="bg-[#FDF7F4] py-10">
    <!-- Main Container -->
    <div class="container mx-auto px-4 py-10 relative">
        <!-- Title -->
        <h2 class="text-4xl font-extrabold text-center mb-10" style="color:rgb(102 7 30)">Featured Experiences</h2>

        <!-- Carousel Wrapper -->
        <div class="relative group">
            <!-- Left Arrow -->
            <button id="leftArrow"
                class="absolute top-1/2 -left-10 transform -translate-y-1/2 bg-gray-800 text-white pl-3 pr-3 pt-2 pb-2 rounded-full hover:bg-gray-600 opacity-100 z-10">
                &#9664;
            </button>

            <!-- Carousel -->
            <div id="carousel" 
                 class="flex overflow-x-auto space-x-6 scrollbar-hide snap-x snap-mandatory scroll-smooth px-4 transition-all duration-700"
                 style="max-width: calc(100% - 80px); overflow-x: scroll; margin: auto;">
                <!-- Card 1 -->
                <a href="#" class="block flex-shrink-0 snap-center w-[calc(100%-32px)] md:w-[calc((100%-48px)/3)] transform hover:scale-105 transition-transform duration-300">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="{{asset('trek/images/image copy.png')}}" alt="Trek Image"
                             class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-[#66071E]">Annapurna Base Camp Trek</h3>
                            <p class="text-[#1E293B] mb-4">Duration: 11 Days</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sky-700 font-bold">US $769</span>
                                <span class="text-yellow-400 flex">
                                    &#9733; &#9733; &#9733; &#9733; &#9733; (7 reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Repeat for additional cards -->
                <!-- Card 2 -->
                <a href="#" class="block flex-shrink-0 snap-center w-[calc(100%-32px)] md:w-[calc((100%-48px)/3)] transform hover:scale-105 transition-transform duration-300">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="{{asset('trek/images/image copy 3.png')}}" alt="Trek Image"
                             class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-[#66071E]">Annapurna Circuit Trek</h3>
                            <p class="text-[#1E293B] mb-4">Duration: 9 Days</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sky-700 font-bold">US $499</span>
                                <span class="text-yellow-400 flex">
                                    &#9733; &#9733; &#9733; &#9733; &#9733; (1 review)
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="#" class="block flex-shrink-0 snap-center w-[calc(100%-32px)] md:w-[calc((100%-48px)/3)] transform hover:scale-105 transition-transform duration-300">
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-2xl">
                        <img src="{{asset('trek/images/image copy 2.png')}}" alt="Trek Image"
                             class="w-full h-48 object-cover transition-transform duration-300 hover:scale-110">
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-[#66071E]">Annapurna Sanctuary Trek</h3>
                            <p class="text-[#1E293B] mb-4">Duration: 13 Days</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sky-700 font-bold">US $930</span>
                                <span class="text-yellow-400 flex">
                                    &#9733; &#9733; &#9733; &#9733; &#9733; (6 reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Additional Cards -->
            </div>

            <!-- Right Arrow -->
            <button id="rightArrow"
                class="absolute top-1/2 -right-10 transform -translate-y-1/2 bg-gray-800 text-white pl-3 pr-3 pt-2 pb-2 rounded-full hover:bg-gray-600 opacity-100 z-10">
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
</style>

<!-- JavaScript for Scrolling -->
<script>
    const carousel = document.getElementById('carousel');
    const leftArrow = document.getElementById('leftArrow');
    const rightArrow = document.getElementById('rightArrow');

    // Scroll by card width
    rightArrow.addEventListener('click', () => {
        carousel.scrollBy({ left: carousel.offsetWidth / 3, behavior: 'smooth' });
    });

    leftArrow.addEventListener('click', () => {
        carousel.scrollBy({ left: -carousel.offsetWidth / 3, behavior: 'smooth' });
    });
</script> --}}


<!-- Scrollbar Hide CSS -->



{{-- <section class="service_card">
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
                                <h3 class="font-bold text-lg mb-2 text-[#66071E]">Annapurna Base Camp Trek</h3>
                                <p class="text-[#1E293B] mb-4">Duration: 11 Days</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sky-700 font-bold">US $769</span>
                                    <span class="text-yellow-400 flex">
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
    
</section> --}}

<section class="bg-gray-100 service_card">

    <!-- Main Container -->
    <div class="container mx-auto px-4 py-10 relative" style="width: 90%">

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


{{-- scroll reveal animation --}}
 <script>
    const sr= ScrollReveal({
        origin: 'top',
        distance: '60px',
        duration: 2500,
        delay:300,
        reset:true
    })
    
    // sr.reveal(`.home__data`)
    sr.reveal(`.home__data`,{delay:300,scale:0.5})
    sr.reveal(`.service_card1`,{interval:100 })
    sr.reveal(`.service_card`)

 </script>






</body>
</html>



about-block__heading:before