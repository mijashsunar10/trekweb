<header class="header">
    <div class="containernew">

      <div class="logo flex items-center">
          <img src="{{ asset('trek/images/logo.png') }}" alt="logo" class="logo-img">
          <div class="flex flex-col">
          <a href="{{route('index')}}" class="logo-name">DAWN IN NEPAL</a>
          <a href="{{route('index')}}" class="logo-name"> ADVENTURES.p.ltd </a>
        </div>
         
      </div>

      <div>
      
        <nav class="menu">
            <div class="head">
                <img src="{{asset('trek/images/logo.png')}}" height="40px" width="40px" alt="logo">
                <!-- <h1>lo go</h1> -->
                <button type="button" class="close-menu-btn"></button>
            </div>
            <ul>
               
                <li><a href="{{route('index')}}">Home</a></li>

                <li class="dropdown">
                    <a href="{{route('trek1')}}">Trekking</a>
                    <i class="fa-solid fa-chevron-down"></i>
                    <ul class="sub-menu">
                        <li class="dropdown">
                            <a href="{{route('trekinfo')}}"><span>Annapurna Region</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href="{{route('main')}}"><span>Annapurna Base Camp Trek 8N-9D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Annapurna Base Camp Trek 8N-9D 2</span></a></li>
                                <li><a href="{{route('main')}}"><span>Annapurna Base Camp Trek 8N-9D 3</span></a></li>
                                <li><a href="{{route('main')}}"><span>Annapurna Base Camp Trek 8N-9D 4</span></a></li>
                                <li><a href="{{route('main')}}"><span>Annapurna Base Camp Trek 8N-9D 5</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href="{{route('trek1')}}"><span>Everest Region</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href="{{route('main')}}"><span>Everest Base Camp Trek 11D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Everest Base Camp Trek 11D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Everest Base Camp Trek 11D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Everest Base Camp Trek 11D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Everest Base Camp Trek 11D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href="{{route('trek1')}}"><span>Langtang Region</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href="{{route('main')}}"><span>Langtang Trek 7D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Langtang Trek 7D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Langtang Trek 7D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Langtang Trek 7D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Langtang Trek 7D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href="{{route('trek1')}}"><span>Ganesh Himal Region</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href="{{route('main')}}"><span>Ganesh Himal Trek 10D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Ganesh Himal Trek 10D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Ganesh Himal Trek 10D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Ganesh Himal Trek 10D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Ganesh Himal Trek 10D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>Manasalu Region</span></a>
                            <i class=" fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>West Region</span></a>
                            <i class=" fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>Rural Region</span></a>
                            <i class=" fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Panchasr Trek 3D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                            </ul>
                            
                        </li>
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
                <li class="dropdown">
                    <a href="{{route('trek1')}}">Expeditions</a>
                    <i class="fa-solid fa-chevron-down"></i>
                    <ul class="sub-menu">
                        <li class="dropdown">
                            <a href="{{route('trekinfo')}}"><span>Annapurna Region</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href="{{route('main')}}"><span>Annapurna Base Camp Trek 8N-9D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Annapurna Base Camp Trek 8N-9D 2</span></a></li>
                                <li><a href="{{route('main')}}"><span>Annapurna Base Camp Trek 8N-9D 3</span></a></li>
                                <li><a href="{{route('main')}}"><span>Annapurna Base Camp Trek 8N-9D 4</span></a></li>
                                <li><a href="{{route('main')}}"><span>Annapurna Base Camp Trek 8N-9D 5</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href="{{route('trek1')}}"><span>Everest Region</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href="{{route('main')}}"><span>Everest Base Camp Trek 11D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Everest Base Camp Trek 11D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Everest Base Camp Trek 11D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Everest Base Camp Trek 11D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Everest Base Camp Trek 11D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href="{{route('trek1')}}"><span>Langtang Region</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href="{{route('main')}}"><span>Langtang Trek 7D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Langtang Trek 7D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Langtang Trek 7D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Langtang Trek 7D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Langtang Trek 7D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href="{{route('trek1')}}"><span>Ganesh Himal Region</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href="{{route('main')}}"><span>Ganesh Himal Trek 10D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Ganesh Himal Trek 10D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Ganesh Himal Trek 10D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Ganesh Himal Trek 10D</span></a></li>
                                <li><a href="{{route('main')}}"><span>Ganesh Himal Trek 10D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>Manasalu Region</span></a>
                            <i class=" fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>West Region</span></a>
                            <i class=" fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>Rural Region</span></a>
                            <i class=" fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Panchasr Trek 3D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                            </ul>
                            
                        </li>
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
               
                <li class="dropdown">
                    <a href="{{route('trek1')}}">Tours</a>
                    <i class="fa-solid fa-chevron-down"></i>
                    <ul class="sub-menu">
                        <li class="dropdown">
                            <a href=""><span>One Day Tours</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                               
                                <li class="dropdown">
                                    <a href=""><span>Pokhara Day Tour</span></a>
                                    <i class="fa-solid fa-chevron-down" ></i>
                                    <ul class="sub-menu sub-menu-right">
                                        <li><a href=""><span>card1</span></a></li>
                                        <li><a href=""><span>card2</span></a></li>
                                        <li><a href=""><span>card3</span></a></li>
                                        <li><a href=""><span>card4</span></a></li>
                                        <li><a href=""><span>card5</span></a></li>
                                       
                                        </ul>

                                </li>

                                <li class="dropdown">
                                    <a href=""><span>Kathmandu Tour</span></a>
                                    <i class="fa-solid fa-chevron-down" ></i>
                                    <ul class="sub-menu sub-menu-right">
                                        <li><a href=""><span>card1</span></a></li>
                                        <li><a href=""><span>card2</span></a></li>
                                        <li><a href=""><span>card3</span></a></li>
                                        <li><a href=""><span>card4</span></a></li>
                                        <li><a href=""><span>card5</span></a></li>
                                       
                                        </ul>

                                </li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 2</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 3</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 4</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 5</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>Multi Days Tours</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 2</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 3</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 4</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 5</span></a></li>
                            </ul>
                            
                        </li>

                        <li class="dropdown">
                            <a href=""><span>Day Hiking</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 2</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 3</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 4</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 5</span></a></li>
                            </ul>
                            
                        </li>

                        <li class="dropdown">
                            <a href=""><span>Willife Safari</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 2</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 3</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 4</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 5</span></a></li>
                            </ul>
                            
                        </li>
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
                <li class="dropdown">
                    <a href="{{route('trek1')}}">Adventure</a>
                    <i class="fa-solid fa-chevron-down"></i>
                    <ul class="sub-menu">
                        <li class="dropdown">
                            <a href="{{route('mountainpeak')}}"><span>Peak Climbing</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 2</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 3</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 4</span></a></li>
                                <li><a href=""><span>Annapurna Base Camp Trek 8N-9D 5</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>Rafting</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Trisuli River Rafting</span></a></li>
                                <li><a href=""><span>Trisuli River Rafting</span></a></li>
                                <li><a href=""><span>Trisuli River Rafting</span></a></li>
                                <li><a href=""><span>Trisuli River Rafting</span></a></li>
                                <li><a href=""><span>Trisuli River Rafting</span></a></li>
                                <li><a href=""><span>Trisuli River Rafting</span></a></li>
                                <li><a href=""><span>Trisuli River Rafting</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>Bungee</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Kusma Bungee</span></a></li>
                                <li><a href=""><span>Kusma Bungee</span></a></li>
                                <li><a href=""><span>Kusma Bungee</span></a></li>
                                <li><a href=""><span>Kusma Bungee</span></a></li>
                                <li><a href=""><span>Kusma Bungee</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>Zeep Flyer</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Pokhara Zeep Flyer</span></a></li>
                                <li><a href=""><span>Pokhara Zeep Flyer</span></a></li>
                                <li><a href=""><span>Pokhara Zeep Flyer</span></a></li>
                                <li><a href=""><span>Pokhara Zeep Flyer</span></a></li>
                                <li><a href=""><span>Pokhara Zeep Flyer</span></a></li>
                            </ul>
                            
                        </li>
                        {{-- <li class="dropdown">
                            <a href=""><span>Manasalu Region</span></a>
                            <i class=" fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                                <li><a href=""><span>Manasalu Trek 15D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>West Region</span></a>
                            <i class=" fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                                <li><a href=""><span>Phoksundo Lake Trek 7D</span></a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown">
                            <a href=""><span>Rural Region</span></a>
                            <i class=" fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>Panchasr Trek 3D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                                <li><a href=""><span>Chisapani Nagarkot Trek 5D</span></a></li>
                            </ul>
                            
                        </li>
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
                        </li> --}}
                    </ul>

                </li>

                <li class="dropdown">
                    <a href="{{route('trek1')}}">Media</a>
                    <i class="fa-solid fa-chevron-down"></i>
                    <ul class="sub-menu">
                        <li><a href="{{route('blog')}}"><span>Blog</span></a></li>
                        <li><a href="{{route('news')}}"><span>News</span></a></li>
                        {{-- <li class="dropdown">
                            <a href=""><span>team</span></a>
                            <i class="fa-solid fa-chevron-down" ></i>
                            <ul class="sub-menu sub-menu-right">
                                <li><a href=""><span>tema 1</span></a></li>
                                <li><a href=""><span>tema 2</span></a></li>
                                <li><a href=""><span>tema 3</span></a></li>
                                <li><a href=""><span>tema 4</span></a></li>
                                <li><a href=""><span>tema 5</span></a></li>
                            </ul>
                            
                        </li> --}}
                       
                        <li><a href="{{route('testimonials')}}"><span>Testimonials</span></a></li>
                        <li><a href="{{route('faq')}}"><span>Frequently Asked Question</span></a></li>
                        {{-- <li class="dropdown">
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
                        </li> --}}
                    </ul>

                </li>
                
                <li><a href="{{route('contact')}}">Contact</a></li>
                
            </ul>
            </nav>
        </div>
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
{{-- 
        <div class="header-right " style="display: none" >
            <button type="button" class="open-menu-btn">
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
              </button>
        </div> --}}
    {{-- </div> --}}

</header>
<!-- <section class="hero" >
    <video class="video-slide active" src="../aaaaa/video/12750575_1920_1080_25fps.mp4" autoplay muted loop></video>
</section> -->

<section class="hero service_card   ">
  {{-- <div class="overlay"></div> --}}
  {{-- <video class="video-slide" src="{{asset('trek/video/12750575_1920_1080_25fps.mp4')}}" autoplay muted loop></video> --}}
  <video class="video-slide" src="{{asset('trek/video/newvideo.mp4')}}" autoplay muted loop></video>
{{--     
  <div class="content active home__data">
    <h1>Wonderful. <br> <span>Nepal</span></h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt illum impedit incidunt...</p>
    <a href="">Read More</a>
  </div> --}}
  
  <div class="media-icons right-0">
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