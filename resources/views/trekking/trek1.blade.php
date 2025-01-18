<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trekking Regions</title>
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    .content {
        margin-top: 50px; /* Offset by the header height */
      }
  </style>

</head>

<body class="bg-gray-100">

  <header class="fixed top-0 w-full z-10">
    <div style="display:none;">
    @include('home.nav')
    </div>
    @include('home.header2')
  </header>

  <div class=" mt-24 ">

 
  <h1 class="text-center text-2xl font-bold my-6 text-black">Trekking</h1>

</div>
  
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-7xl mx-auto p-4">
    <a href="{{route('trekinfo')}}">
    <!-- Everest Region -->
    <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
      <img src="{{asset('trek/images/image copy.png')}}" alt="Everest Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
      <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
        <span class="text-lg block">27 Trips</span>
        <span class="text-2xl uppercase">Everest-Khumbu Region</span>
      </div>
    </div>
    </a>
    <a href="{{route('trekinfo')}}">
    <!-- Annapurna Region -->
    <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
      <img src="{{asset('trek/images/image copy.png')}}" alt="Annapurna Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
      <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
        <span class="text-lg block">27 Trips</span>
        <span class="text-2xl uppercase">Everest-Khumbu Region</span>
      </div>
    </div>
    </a>
    <a href="{{route('trekinfo')}}">
    <!-- Manaslu Region -->
    <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
      <img src="{{asset('trek/images/image copy.png')}}" alt="Manaslu Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
      <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
        <span class="text-lg block">27 Trips</span>
        <span class="text-2xl uppercase">Everest-Khumbu Region</span>
      </div>
    </div>
    </a>
    <a href="{{route('trekinfo')}}">
    <!-- Langtang Region -->
    <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
      <img src="{{asset('trek/images/image copy.png')}}" alt="Langtang Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
      <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
        <span class="text-lg block">27 Trips</span>
        <span class="text-2xl uppercase">Everest-Khumbu Region</span>
      </div>
    </div>
    </a>

    <a href="{{route('trekinfo')}}">
        <!-- Langtang Region -->
        <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
          <img src="{{asset('trek/images/image.png')}}" alt="Langtang Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
          <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
            <span class="text-lg block">27 Trips</span>
            <span class="text-2xl uppercase">Everest-Khumbu Region</span>
          </div>
        </div>
        </a>

        <a href="{{route('trekinfo')}}">
            <!-- Langtang Region -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
              <img src="{{asset('trek/images/image.png')}}" alt="Langtang Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
              <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
                <span class="text-lg block">27 Trips</span>
                <span class="text-2xl uppercase">Everest-Khumbu Region</span>
              </div>
            </div>
            </a>

            <a href="{{route('trekinfo')}}">
                <!-- Langtang Region -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
                  <img src="{{asset('trek/images/image.png')}}" alt="Langtang Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
                  <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
                    <span class="text-lg block">27 Trips</span>
                    <span class="text-2xl uppercase">Everest-Khumbu Region</span>
                  </div>
                </div>
                </a>

                <a href="{{route('trekinfo')}}">
                    <!-- Langtang Region -->
                    <div class="relative overflow-hidden rounded-lg shadow-lg group h-96">
                      <img src="{{asset('trek/images/image.png')}}" alt="Langtang Region" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-125 group-hover:brightness-75 brightness-75">
                      <div class="absolute top-2 left-2 text-white font-bold space-y-1 p-3">
                        <span class="text-lg block">27 Trips</span>
                        <span class="text-2xl uppercase">Everest-Khumbu Region</span>
                      </div>
                    </div>
                    </a>

    
  </div>
</body>
</html>
