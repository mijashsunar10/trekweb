<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adventure Search</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Bungee&family=Bungee+Shade&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Vinyl&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<style>
    .dropdowmn-menu li
    {
        color: black;
    }
</style>
  <script>
    let searchHistory = [];
  
    function handleSearch(event) {
      const searchInputModal = document.getElementById('searchInputModal');
      const query = searchInputModal.value.trim();
  
      if (query && !searchHistory.includes(query)) {
        searchHistory.unshift(query);
        if (searchHistory.length > 5) searchHistory.pop();
        updateSearchHistory();
      }
  
      searchInputModal.value = ''; 
      console.log('Searching for:', query);
    }
  
    function updateSearchHistory() {
      const historyList = document.getElementById('searchHistory');
      historyList.innerHTML = ''; 
      searchHistory.forEach(search => {
        const li = document.createElement('li');
        li.classList.add('cursor-pointer', 'text-white', 'mb-2', 'hover:text-gray-300');
        li.textContent = search;
        historyList.appendChild(li);
      });
    }
  
    function toggleModal() {
  const modal = document.getElementById('searchModal');
  modal.classList.toggle('hidden');
  if (!modal.classList.contains('hidden')) {
    setTimeout(() => {
      modal.classList.add('opacity-100');
      modal.classList.remove('scale-90');
    }, 100);
  } else {
    modal.classList.remove('opacity-100');
    modal.classList.add('scale-90');
  }
}

// Close modal when clicking outside
document.addEventListener('click', (event) => {
  const modal = document.getElementById('searchModal');
  const modalContent = modal.querySelector('.relative.z-10'); // The modal content

  if (
    modal &&
    modal.classList.contains('opacity-100') &&
    !modalContent.contains(event.target) && // Check if clicked outside the modal content
    !event.target.closest('button') // Exclude clicks on buttons
  ) {
    toggleModal();
  }
});

  
    function toggleEmailBox() {
      const emailBox = document.getElementById('emailBox');
      const emailButton = document.getElementById('emailButton');
      
      if (emailBox.classList.contains('hidden')) {
        emailBox.classList.remove('hidden');
        setTimeout(() => {
          emailBox.classList.add('scale-100', 'opacity-100');
          emailBox.classList.remove('scale-95', 'opacity-0');
        }, 50);
        emailButton.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        `;
      } else {
        emailBox.classList.add('scale-95', 'opacity-0');
        emailBox.classList.remove('scale-100', 'opacity-100');
        setTimeout(() => {
          emailBox.classList.add('hidden');
        }, 300);
        emailButton.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" viewBox="0 0 24 24" fill="none">
            <path d="M12 2C6.48 2 2 5.92 2 10.5C2 12.78 3.16 14.84 5.08 16.24C4.8 17.09 4.25 18.45 4.06 18.92C3.89 19.34 4.28 19.75 4.73 19.65C5.62 19.45 7.22 19.07 8.11 18.74C9.03 18.97 10 19.1 11 19.1C16.52 19.1 21 15.18 21 10.6C21 5.92 16.52 2 12 2Z" fill="white" />
          </svg>
        `;
      }
    }



    //navbar

    document.addEventListener('DOMContentLoaded', () => {
const dropdownParents = document.querySelectorAll('.group'); // Select all parent groups

dropdownParents.forEach((parent) => {
  const dropdownMenu = parent.querySelector('.dropdown-menu');
  let timeout;

  parent.addEventListener('mouseenter', () => {
    clearTimeout(timeout);
    dropdownMenu.classList.remove('opacity-0', 'invisible');
    dropdownMenu.classList.add('opacity-100');
  });

  parent.addEventListener('mouseleave', () => {
    timeout = setTimeout(() => {
      dropdownMenu.classList.remove('opacity-100');
      dropdownMenu.classList.add('opacity-0', 'invisible');
    }, 100); // Delay before hiding
  });

  dropdownMenu.addEventListener('mouseenter', () => {
    clearTimeout(timeout);
  });

  dropdownMenu.addEventListener('mouseleave', () => {
    timeout = setTimeout(() => {
      dropdownMenu.classList.remove('opacity-100');
      dropdownMenu.classList.add('opacity-0', 'invisible');
    }, 100); // Delay before hiding
  });

  // Handle nested dropdowns
  const nestedDropdownParents = dropdownMenu.querySelectorAll('.relative');
  nestedDropdownParents.forEach((nestedParent) => {
    const nestedMenu = nestedParent.querySelector('.nested-dropdown-menu');
    nestedParent.addEventListener('mouseenter', () => {
      nestedMenu.classList.remove('opacity-0', 'invisible');
      nestedMenu.classList.add('opacity-100');
    });
    nestedParent.addEventListener('mouseleave', () => {
      nestedMenu.classList.remove('opacity-100');
      nestedMenu.classList.add('opacity-0', 'invisible');
    });
  });
});
});

  </script>
   <style>
     .hidden {
      display: none;
    }

    .block {
      display: block;
    }
  </style>
  
</head>
<body class="bg-gray-900">
    <nav id="navbar" class="bg-transparent fixed w-full z-10 shadow-sm top-0 transition-all duration-300">
        <div class="mx-auto px-0 xl:px-8">
          <div class="flex justify-between h-22 items-center">
            <!-- Logo and Name -->
            <div class="flex items-center">
              <img src="logo.png" alt="Logo" class="xl:h-20 xl:w-20 h-16 w-16  rounded-full ml-10 mr-3">
              <div id="logoName" style="font-family: 'Rubik Vinyl', cursive;">
                <!-- <span class="text-amber-900 text-xl font-bold block">DAWN IN NEPAL</span> -->
                <!-- <span class="text-yellow-500 text-md font-bold block">ADVENTURES P.LTD</span> -->
                <span class="text-white xl:text-lg text-lg font-bold block">DAWN IN NEPAL</span>
                <span class="text-white xl:text-md  text-sm font-bold block">ADVENTURES P.LTD</span>
              </div>
            </div>

                
      
            <!-- Navbar Items -->
            <ul class="hidden lg:flex space-x-0 xl:space-x-4"> 
              <!-- Navbar Item 1 -->
              <li class="relative group">
                <!-- <button class="flex items-center text-gray-900 font-bold px-3 py-2 hover:text-orange-400 focus:outline-none"> -->
                <button class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                  Trekking
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center" style="color: black !important;">
                      <div class="w-56">
                      Annapurna Region  
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Annapurna Circuit</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Ghorepani Poon Hill</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Annapurna Base Camp Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Mardi Himal Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"> Poon Hill Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Khopra Ridge Trek</a></li>
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-56">
                      Ganesh Himal Region
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Ganesh Himal Base Camp Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Ruby Valley Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Sing La Pass Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pangsang Pass Trek</a></li>
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                        Everest Region
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Everest Base Camp Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Three Passes Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Everest Panorama Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Jiri to Everest Base Camp Trek</a></li>
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                        Langtang Region
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Langtang Valley Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Langtang Gosainkunda Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tamang Heritage Trail</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Langtang Circuit Trek</a></li>
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                        Mansalu Region
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                        <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Manaslu Circuit Trek</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tsum Valley Trek</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Manaslu Base Camp Trek</a></li>
                        <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Manaslu and Annapurna Circuit Trek</a></li>
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                        West Region
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dolpo Region Treks</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Rara Lake Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Khaptad National Park Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Api and Saipal Himal Trek </a></li>
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                        Rural Region
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Chepang Hill Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dhorpatan Trek</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tamang Heritage Trail</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Ghale Gaun Trek</a></li>
                    </ul>
                  </li>
                  
                 
                </ul>
              </li>
              <li class="relative group">
                <button class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                  Tours
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu absolute left-0 mt-2 w-52 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                     One Day Tours
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pokhara Valley Sightseeing</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kathmandu Valley Sightseeing</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Lumbini Day Tour</a></li>
                     
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-56">
                      Multi Day Tours
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Nepal Golden Triangle Tour</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kathmandu Valley Cultural Tour</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Lumbini and Buddhist Circuit Tour </a></li>
                     
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Day Hikes
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pokhara Day Hikes</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kathmandu Day Hikes</a></li>
                      
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                        Wildlife Reserve
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Bardia National Park</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Chitwan National Park</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Koshi Tappu Wildlife Reserve</a></li>
                     
                    </ul>
                  </li>
                 
                  
                 
                  
                 
                </ul>
              </li>
              <li class="relative group">
                <button class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                  Adventures
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-56">
                    Rafting
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Trisuli River Rafting</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kali Gandaki River Rafting</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Karnali River Rafting</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Lower Seti River Rafting</a></li>
                     
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-56">
                     Bungee
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                    <ul class="nested-dropdown-menu absolute left-full top-0 mt-0 w-48 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Kushma Bungee Jump</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">The Last Resort</a></li>
                      <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pokhara Bungee Jump</a></li>
                     
                    </ul>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Paragliding in Pokhara
                      </div>      
                  </a>
                  </li>
                  
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       ZeepFlyer
                      </div>      
                  </a>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Ultralight Flight
                      </div>      
                  </a>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Heli Ride Tour
                      </div>      
                  </a>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Hot Air Baloon Ride
                      </div>      
                  </a>
                  </li>
                  
                 
                  
                 
                  
                 
                </ul>
              </li>
              <li class="relative group">
                <button class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                  Media
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                  
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Blogs
                      </div>      
                  </a>
                  </li>
                  
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       News
                      </div>      
                  </a>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Testimonials
                      </div>      
                  </a>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Frequently Asked Questions
                      </div>      
                  </a>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Gallery
                      </div>      
                  </a>
                  </li>
                  
                 
                  
                 
                  
                 
                </ul>
              </li>
              <li class="relative group">
                <button class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                 Expeditions
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white border border-gray-200 shadow-lg rounded-md opacity-0 invisible transition-opacity duration-300">
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-56">
                        Mount Everest 
                    </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                    </a>
                    
                    <!-- Submenu -->
                  
                  </li>
                 
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Heli Ride Tour
                      </div>      
                  </a>
                  </li>
                  <li class="relative group">
                    <a href="#" class="block font-semibold px-4 py-2 text-gray-800 hover:bg-gray-100 hover:underline flex items-center">
                      <div class="w-52">
                       Hot Air Baloon Ride
                      </div>      
                  </a>
                  </li>
                  
                 
                  
                 
                  
                 
                </ul>
              </li>

              <!-- Navbar Item 2 -->
              <li class="relative group">
                <a href="">
                <button class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                  Contact
                 
                </button>
               </a>
                
              </li>
              <li class="relative group">
                <a href="">
                <button class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
                  Login
                 <div class="px-1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                    <!-- Head -->
                    <circle cx="12" cy="8" r="4" />
                    <!-- Body -->
                    <path d="M12 14c-5 0-8 3-8 6v1h16v-1c0-3-3-6-8-6z" />
                  </svg>
                </div>
                  
                 
                </button>
               </a>
                
              </li>
              <li class="relative group">
                <a href="">
                <button class="flex items-center text-white font-bold px-3 py-2 hover:text-orange-400 focus:outline-none">
 
                </button>
               </a>
                
              </li>
              <!-- Add more navbar items as needed -->
            </ul>
      
            <!-- Mobile Menu Button -->
            
          </div>

          
        </div>

        

        

        
    </nav>
   

      <!-- Hamburger Button (Visible only on smaller screens) -->
      <button id="mobileMenuButton" class="fixed top-4 right-4 z-20 text-white bg-blue-900 p-2 rounded-md focus:outline-none lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
    
      <!-- Mobile Navbar (Visible only on smaller screens) -->
      <div id="mobileNavbar" class="fixed top-0 right-0 w-full sm:w-96 h-full bg-blue-900 text-white transform translate-x-full transition-transform duration-300 z-10 lg:hidden  overflow-y-auto">
        <div class="flex justify-between items-center p-4 border-b border-gray-700">
          <div class="flex items-center space-x-3">
            <span>
              <img src="logo.png" alt="Logo" class="h-12 w-12 rounded-full">
            </span>
            <span>
              <span class="block text-lg font-bold">DAWN IN NEPAL</span>
              <span class="block text-sm font-semibold">ADVENTURES P.LTD</span>
            </span>
          </div>
          <button id="closeMobileMenu" class="text-white focus:outline-none hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
    
        <ul class="mt-4 space-y-2">
    
            <li><a href="#" class="block px-4 py-2 font-bold hover:bg-blue-800">Home</a></li>
          <!-- First Trekking Dropdown -->
          <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800" onclick="toggleDropdown('trekkingDropdown')">
              Trekking 
              
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
              
            </button>
            <ul id="trekkingDropdown" class="hidden pl-6 space-y-1">
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('annapurnaDropdown')">
                  Annapurna Region
                  <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </button>
                <ul id="annapurnaDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Annapurna Circuit</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Ghorepani Poon Hill</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Annapurna Base Camp Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Mardi Himal Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800"> Poon Hill Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Khopra Ridge Trek</a></li>
                </ul>
              </li>
              <!-- ganesh himal -->
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('ganeshDropdown')">
                    Ganesh Himal Region
                    <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                      </span>
                </button>
                <ul id="ganeshDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Ganesh Himal Base Camp Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Ruby Valley Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Sing La Pass Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Pangsang Pass Trek</a></li>
    
                </ul>
              </li>
    
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('everestDropdown')">
                    Everest Region
                    <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                      </span>
                </button>
                <ul id="everestDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Everest Base Camp Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Three Passes Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Everest Panorama Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Jiri to Everest Base Camp Trek</a></li>
                </ul>
              </li>
    
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('langtangDropdown')">
                    Langtang Region
                    <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                      </span>
                </button>
                <ul id="langtangDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Langtang Valley Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Langtang Gosainkunda Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Tamang Heritage Trail</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Langtang Circuit Trek</a></li>
                </ul>
              </li>
    
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('manasaluDropdown')">
                    Manasalu Region
                    <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                      </span>
                </button>
                <ul id="manasaluDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Manaslu Circuit Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Tsum Valley Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Manaslu Base Camp Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Manaslu and Annapurna Circuit Trek</a></li>
                </ul>
              </li>
    
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('westDropdown')">
                    West Region
                    <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                      </span>
                </button>
                <ul id="westDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800 ">Dolpo Region Treks</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Rara Lake Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Khaptad National Park Trek</a></li>
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Api and Saipal Himal Trek </a></li>
                </ul>
              </li>
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('ruralDropdown')">
                    Rural Region
                    <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                      </span>
                </button>
                <ul id="ruralDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Chepang Hill Trek</a></li>
                          <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Dhorpatan Trek</a></li>
                          <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Tamang Heritage Trail</a></li>
                          <li><a href="#" class="block font-medium text-sm px-4 py-2 text-gray-300 hover:bg-blue-800">Ghale Gaun Trek</a></li>
                </ul>
              </li>
    
    
            </ul>
          </li>
    
          <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800" onclick="toggleDropdown('tourDropdown')">
              Tours 
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <ul id="tourDropdown" class="hidden pl-6 space-y-1">
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('onedayDropdown')">
                  One Day Tours
                  <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </button>
                <ul id="onedayDropdown" class="hidden pl-6 space-y-1">
                   
                    <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Pokhara Valley Sightseeing</a></li>
                  <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Kathmandu Valley Sightseeing</a></li>
                  <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Lumbini Day Tour</a></li>
                </ul>
              </li>
              <!-- ganesh himal -->
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('twodayDropdown')">
                    Multi Day Tours
                    <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                      </span>
                </button>
                <ul id="twodayDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Nepal Golden Triangle Tour</a></li>
                  <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Kathmandu Valley Cultural Tour</a></li>
                  <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Lumbini and Buddhist Circuit Tour </a></li>
    
                </ul>
              </li>
    
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Day Hikes
                    <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                      </span>
                </button>
                <ul id="dayhikeDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Pokhara Day Hikes</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Kathmandu Day Hikes</a></li>
                </ul>
              </li>
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('wildlifeDropdown')">
                   Wildlife Reserves
                   <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </button>
                <ul id="wildlifeDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Bardia National Park</a></li>
                          <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Chitwan National Park</a></li>
                          <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Koshi Tappu Wildlife Reserve</a></li>
                </ul>
              </li>
    
            </ul>
          </li>
          <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800" onclick="toggleDropdown('adventureDropdown')">
                Adventures 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
            </button>
            <ul id="adventureDropdown" class="hidden pl-6 space-y-1">
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('raftingDropdown')">
                 Rafting
                 <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                </button>
                <ul id="raftingDropdown" class="hidden pl-6 space-y-1">
                   
                    <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Trisuli River Rafting</a></li>
                          <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Kali Gandaki River Rafting</a></li>
                          <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Karnali River Rafting</a></li>
                          <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Lower Seti River Rafting</a></li>
                </ul>
              </li>
              <!-- ganesh himal -->
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('bungeeDropdown')">
                    Bungee
                    <span class="inline-flex items-center justify-center border border-gray-300 p-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                      </span>
                </button>
                <ul id="bungeeDropdown" class="hidden pl-6 space-y-1">
                    <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Kushma Bungee Jump</a></li>
                  <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">The Last Resort</a></li>
                  <li><a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-800">Pokhara Bungee Jump</a></li>
    
                </ul>
              </li>
    
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Paragliding in Pokhara
                </button>  
              </li>
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    ZeepFlyer
                </button>  
              </li>
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Ultralight Flight
                </button>  
              </li>
              
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Heli Ride Tour
                </button>  
              </li>
              
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Hot Air Baloon Ride
                </button>  
              </li>
              
    
            </ul>
          </li>
          <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800" onclick="toggleDropdown('expeditionDropdown')">
                Expeditions 
                
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                  
            </button>
            <ul id="expeditionDropdown" class="hidden pl-6 space-y-1">
             
    
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Mt Everest
                </button>  
              </li>
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Mt Annapunrna
                </button>  
              </li>
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Mt kanchanjunga
                </button>  
              </li>
              
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Mt ganesh
                </button>  
              </li>
              
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Hot Air Baloon Ride
                </button>  
              </li>
              
    
            </ul>
          </li>
          <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800" onclick="toggleDropdown('mediaDropdown')">
                Media 
                
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                 
            </button>
            <ul id="mediaDropdown" class="hidden pl-6 space-y-1">
             
    
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Blogs
                </button>  
              </li>
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                   News
                </button>  
              </li>
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Testimonials
                </button>  
              </li>
              
              
              
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Frequently Asked Questions
                </button>  
              </li>
              <li>
                <button class="w-full flex justify-between items-center px-4 py-2 text-md text-gray-300 hover:bg-blue-800 font-semibold" onclick="toggleDropdown('dayhikeDropdown')">
                    Gallery
                </button>  
              </li>
              
    
            </ul>
          </li>
          <li>
            <button class="w-full flex justify-between items-center px-4 py-2 font-bold hover:bg-blue-800" onclick="toggleDropdown('mediaDropdown')">
                Login 
              
            </button>
           
          </li>
    
    
         
        </ul>
      </div>
    
      <!-- JavaScript -->
      <script>
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const mobileNavbar = document.getElementById('mobileNavbar');
    
        // Show Navbar and Toggle Buttons
        mobileMenuButton.addEventListener('click', () => {
          mobileNavbar.classList.remove('translate-x-full');
          mobileMenuButton.classList.add('hidden');
          closeMobileMenu.classList.remove('hidden');
        });
    
        // Hide Navbar and Toggle Buttons
        closeMobileMenu.addEventListener('click', () => {
          mobileNavbar.classList.add('translate-x-full');
          closeMobileMenu.classList.add('hidden');
          mobileMenuButton.classList.remove('hidden');
        });
    
        // Toggle Dropdown Visibility
        function toggleDropdown(id) {
          const dropdown = document.getElementById(id);
          dropdown.classList.toggle('hidden');
          dropdown.classList.toggle('block');
        }
      </script>
    

  

  
  <div class="relative h-screen">
    <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover opacity-100">
      <source src="design.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <div class="relative flex flex-col items-center justify-center h-full text-center text-white">
        <div>
        <h1 id="typing-text" class="text-lg md:text-5xl font-bold mb-8 text-white" style="font-family: 'Playwrite Australia SA';">

        </div>
      <div class="relative w-full max-w-2xl px-4">
        <div class="flex items-center bg-white rounded-full shadow-lg overflow-hidden">
          <button 
            class="flex items-center justify-center bg-orange-500 text-white px-4 py-3 md:px-6 md:py-4 font-bold hover:bg-orange-600 transition"
            onclick="toggleModal()" aria-label="Open search modal">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
          <input 
            type="text" 
            id="searchInput"
            placeholder="Find the Perfect Trip for you." 
            class="w-full px-2 py-2 text-sm md:px-4 md:py-4 md:text-base text-gray-700 font-bold focus:outline-none"
            readonly
            onclick="toggleModal()">
        </div>
      </div>
    </div>

 
    <div class="absolute top-1/2 -translate-y-1/2 right-4 flex flex-col space-y-6">
      <!-- WhatsApp -->
      <a href="https://whatsapp.com" target="_blank" 
         class="bg-green-600 p-2 rounded-full shadow-lg text-white hover:bg-gray-100 hover:text-green-600 transition">
        <i class="fab fa-whatsapp  text-2xl md:text-3xl"></i>
      </a>
  
      <!-- Facebook -->
      <a href="https://facebook.com" target="_blank" 
         class="bg-blue-700 p-2 rounded-full text-white shadow-lg hover:bg-gray-100 hover:text-blue-700 transition">
        <i class="fab fa-facebook  text-2xl md:text-3xl"></i>
      </a>
  
      <!-- Instagram -->
      <a href="https://instagram.com" target="_blank" 
         class="bg-pink-600 p-2 rounded-full text-white shadow-lg hover:bg-gray-100 hover:text-pink-600 transition">
        <i class="fab fa-instagram  text-2xl md:text-3xl"></i>
      </a>
  
      <!-- Twitter -->
      <a href="https://twitter.com" target="_blank" 
         class="bg-blue-500 p-2 rounded-full text-white  shadow-lg hover:bg-gray-100 hover:text-blue-500 transition">
        <i class="fab fa-twitter  text-2xl md:text-3xl"></i>
      </a>
    </div>
    
  </div>

  <div id="searchModal" 
  class="hidden fixed inset-0 bg-black bg-opacity-70 z-50 flex items-center justify-center transition-opacity duration-300 opacity-0 transform scale-90">
<div 
    class="relative bg-cover bg-center rounded-2xl shadow-xl w-11/12 max-w-3xl p-6 md:p-12 text-gray-700 animate-fade-in"
    style="background-image:  url('image copy.png')">
<div class="absolute inset-0 bg-black bg-opacity-70 rounded-2xl"></div>

<!-- Close Button -->
<button onclick="toggleModal()" class="absolute top-2 right-2 text-white hover:text-gray-300 transition transform">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
  </svg>
</button>

<!-- Content -->
<div class="relative z-10 text-white">
  <h2 class="text-xl md:text-2xl font-bold mb-4 md:mb-6 text-center">Search for Your Trip</h2>
  <p class="text-gray-300 text-sm md:text-base mb-6 text-center">Discover amazing adventures tailored just for you.</p>

  <!-- Search Input -->
  <div class="flex flex-row items-stretch bg-gray-100 rounded-lg overflow-hidden mb-6">
    <input 
      type="text" 
      placeholder="Enter your search query..." 
      class="w-full px-4 py-3 md:py-4 border border-gray-300 sm:rounded-l-lg focus:outline-none focus:ring-2 focus:ring-orange-500 text-black"
      id="searchInputModal"
      onkeyup="event.key === 'Enter' && handleSearch(event)" aria-label="Search query">
    <button 
      onclick="handleSearch(event)"
      class="flex items-center justify-center bg-orange-500 text-white sm:rounded-r-lg hover:bg-orange-600 transition px-4 md:px-6 py-3 md:py-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </button>
  </div>

  <!-- Recent Searches -->
  <div class="mb-4">
    <h3 class="text-white font-semibold">Recent Searches</h3>
    <ul id="searchHistory" class="mt-4 text-sm md:text-base text-white font-medium"></ul>
  </div>
</div>
</div>
</div>


  <!-- Message Box -->
  <div class="fixed bottom-4 left-4">
    <!-- Message Button -->
    <button id="emailButton" onclick="toggleEmailBox()" 
            class="w-16 h-16 bg-green-500 rounded-full shadow-lg flex items-center justify-center hover:bg-green-600 transition" 
            aria-label="Send us a message">
      <!-- SVG matching the uploaded image -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-11 h-11" viewBox="0 0 24 24" fill="none">
        <path d="M12 2C6.48 2 2 5.92 2 10.5C2 12.78 3.16 14.84 5.08 16.24C4.8 17.09 4.25 18.45 4.06 18.92C3.89 19.34 4.28 19.75 4.73 19.65C5.62 19.45 7.22 19.07 8.11 18.74C9.03 18.97 10 19.1 11 19.1C16.52 19.1 21 15.18 21 10.6C21 5.92 16.52 2 12 2Z" fill="white" />
      </svg>
    </button>
  </div>
  
  <!-- Email Box -->
  <div id="emailBox" class="hidden fixed left-4 bottom-28 bg-white rounded-lg shadow-xl p-6 w-80 z-50 transition-all duration-300 transform scale-95 opacity-0">
    <button onclick="toggleEmailBox()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  
    <h2 class="text-xl font-bold mb-4">Send Us a Message</h2>
    <form action="#" method="POST">
      <div class="mb-4">
        <input type="email" placeholder="Your Email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" required>
      </div>
      <div class="mb-4">
        <textarea placeholder="Your Message" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" rows="4" required></textarea>
      </div>
      <button type="submit" class="w-full py-2 bg-green-500 text-white font-bold rounded-md hover:bg-green-600 transition">Send</button>
    </form>
  </div>

  <div style="height: 100vh; background-color: aliceblue;"></div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
 const dropdownParents = document.querySelectorAll('.group'); // Select all parent groups

 dropdownParents.forEach((parent) => {
   const dropdownMenu = parent.querySelector('.dropdown-menu');
   let timeout;

   if (dropdownMenu) {
     parent.addEventListener('mouseenter', () => {
       clearTimeout(timeout);
       dropdownMenu.classList.remove('opacity-0', 'invisible');
       dropdownMenu.classList.add('opacity-100');
     });

     parent.addEventListener('mouseleave', () => {
       timeout = setTimeout(() => {
         dropdownMenu.classList.remove('opacity-100');
         dropdownMenu.classList.add('opacity-0', 'invisible');
       }, 100); // Delay before hiding
     });

     dropdownMenu.addEventListener('mouseenter', () => {
       clearTimeout(timeout);
     });

     dropdownMenu.addEventListener('mouseleave', () => {
       timeout = setTimeout(() => {
         dropdownMenu.classList.remove('opacity-100');
         dropdownMenu.classList.add('opacity-0', 'invisible');
       }, 100); // Delay before hiding
     });

     // Handle nested dropdowns
     const nestedDropdownParents = dropdownMenu.querySelectorAll('.relative');
     nestedDropdownParents.forEach((nestedParent) => {
       const nestedMenu = nestedParent.querySelector('.nested-dropdown-menu');
       if (nestedMenu) {
         nestedParent.addEventListener('mouseenter', () => {
           nestedMenu.classList.remove('opacity-0', 'invisible');
           nestedMenu.classList.add('opacity-100');
         });
         nestedParent.addEventListener('mouseleave', () => {
           nestedMenu.classList.remove('opacity-100');
           nestedMenu.classList.add('opacity-0', 'invisible');
         });
       }
     });
   }
 });
});


     </script>
<!-- -->
<script>
    const statements = [
      "Your Adventure Starts Here",
      "Explore the Beauty of Nature",
      "Discover the Unseen Trails"
    ]; // Array of statements
    const typingTextElement = document.getElementById("typing-text");

    let statementIndex = 0; // Tracks the current statement
    let charIndex = 0; // Tracks the current character in the statement

    function typeEffect() {
      if (charIndex < statements[statementIndex].length) {
        const span = document.createElement("span");
        span.innerHTML = statements[statementIndex][charIndex] === " " ? "&nbsp;" : statements[statementIndex][charIndex];
        span.className = "hidden-text inline-block";
        typingTextElement.appendChild(span);

        setTimeout(() => {
          span.classList.remove("hidden-text");
          span.classList.add("visible-text");
        }, 50);

        charIndex++;
        setTimeout(typeEffect, 100); // Delay between each letter
      } else {
        // Move to the next statement after a short pause
        setTimeout(() => {
          typingTextElement.textContent = ""; // Clear text
          charIndex = 0;
          statementIndex = (statementIndex + 1) % statements.length; // Loop back to the first statement
          typeEffect(); // Start typing the next statement
        }, 1000); // Pause before the next statement
      }
    }

    // Start the typing effect
    typeEffect();
  </script>
<script>
    const navbar = document.getElementById("navbar");
    const logoName = document.getElementById("logoName");

    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        // Change navbar background and text
        navbar.classList.add("bg-white", "shadow-lg");
        navbar.classList.remove("bg-transparent");
        navbar.querySelectorAll("button, a").forEach((el) => {
          el.classList.add("text-gray-900");
          el.classList.remove("text-white");
        });

        // Change logo name colors
        logoName.innerHTML = `
          <span class="text-amber-900 text-xl font-bold block">DAWN IN NEPAL</span>
          <span class="text-yellow-500 text-md font-bold block">ADVENTURES P.LTD</span>
        `;
      } else {
        // Revert navbar background and text
        navbar.classList.remove("bg-white", "shadow-lg");
        navbar.classList.add("bg-transparent");
        navbar.querySelectorAll("button, a").forEach((el) => {
          el.classList.add("text-white");
          el.classList.remove("text-gray-900");
        });
        navbar.querySelectorAll("ul,li, a").forEach((el) => {
          el.classList.add("text-gray-900");
         el.classList.remove("text-white");
        });

        // Revert logo name colors
        logoName.innerHTML = `
          <span class="text-white text-xl font-bold block">DAWN IN NEPAL</span>
          <span class="text-white text-md font-bold block">ADVENTURES P.LTD</span>
        `;
      }
    });
  </script>

        


</body>
</html>
