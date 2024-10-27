@extends('public.layout')

@section('content')

  {{-- Main container --}}
  <div class="flex h-screen">
       {{-- sidebar --}}
        <div class="w-72   bg-black p-5">
           {{-- Logo --}}
            <div class="flex justify-center items-center">
                <img src="./images/letter-s.png" alt="Creative Studio Logo" class="h-10 w-10 mt-10">
            </div>

            {{-- Menu --}}
            <nav>
                <ul class="space-y-6">
                    <li>
                        <a href="#" class="block text-yellow-400 font-bold uppercase">HOME</a>
                        <ul class="ml-4 mt-2 space-y-2">
                      
                            <li><a href="#" class="block text-yellow-400 uppercase">GALLERY ALBUMS <span class="ml-2 float-right">&gt;</span></a></li>
                            <ul class="ml-4 space-y-2 text-sm text-white uppercase">
                                <li><a href="#" class="block ">Background Image</a></li>
                                <li><a href="#" class="block ">Background VIDEO</a></li>
                                <li><a href="#" class="block ">PORTFOLIO</a></li>
                                <li><a href="#" class="block ">FULL SCREEN SLIDER</a></li>
                            </ul>
                        </ul>
                    </li>
                    <ul class="ml-4 space-y-2 text-sm text-white uppercase">
                    <li><a href="#" class="block">About  <span class="float-right">&gt;</span></a></li>
                    <li><a href="#" class="block">Work <span class="float-right">&gt;</span></a></li>
                    <li><a href="#" class="block">GALLERIES <span class="float-right">&gt;</span></a></li>
                    <li><a href="#" class="block">FEATURES <span class="float-right">&gt;</span></a></li>
                    <li><a href="#" class="block">BLOGS <span class="float-right">&gt;</span></a></li>
                    </ul>
                </ul>

               {{--  User Profile --}}
                <div class="mt-10">
                    <img src="./images/user_profile.png" alt="Profile Picture" class="rounded-full w-16 h-16 mx-auto  ">
                    <h2 class="text-center text-white  mt-4 text-xl">Welcome to “Smart Studio”</h2>
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="#"> <img class="w-6 h-6" src="https://img.icons8.com/ios-filled/50/fac115/facebook-circled--v1.png" alt="facebook-circled--v1"/></a>
                        <a href="#"><img class="w-6 h-6" src="https://img.icons8.com/glyph-neue/64/fac115/twitter-circled.png" alt="twitter-circled"/></a>
                        <a href="#"><img class="w-6 h-6" src="https://img.icons8.com/glyph-neue/64/fac115/linkedin-circled.png" alt="linkedin-circled"/></a>
                    </div>
                </div>
            </nav>
        </div>

        {{-- Main Content Section --}}
        <div class="flex-1 relative">
            <div class="absolute inset-0">
                
                <img src="./images/studio-bg.jpg" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-black opacity-70"></div>
            </div>

            <div class="relative z-10 p-12">
                <h1 class="text-6xl font-bold text-white uppercase">
                    WELCOME TO <span class="text-yellow-400">SMART STUDIO</span>
                </h1>
                <p class="text-lg text-gray-300 mt-4">
                    Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit. Pellentesque Convallis, Augue Ut Imperdiet Ultricies, Leo Mauris Rhoncus.
                </p>
            </div>
               {{-- Profile image at Bottom --}}
                <div class="profile-icons flex space-x-4">
                    <img src="./images/user_profile.png" alt="Profile 1" class="w-16 h-16 rounded-full">
                    <img src="./images/user_profile.png" alt="Profile 2" class="w-16 h-16 rounded-full">
                    <img src="./images/user_profile.png" alt="Profile 3" class="w-16 h-16 rounded-full">
                    <img src="./images/user_profile.png" alt="Profile 4" class="w-16 h-16 rounded-full">
                    <img src="./images/user_profile.png" alt="Profile 5" class="w-16 h-16 rounded-full">
                </div>
            
        </div>
    </div>




 {{-- Heading Section --}}
  <div class="text-center mt-10 mb-10">
    <h1 class="text-4xl font-bold text-black">Bringing Dreams to <span class="text-yellow-500">Reality</span></h1>
    <p class="mt-4 text-lg text-gray-500">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
      Pellentesque convallis, augue ultricies, leo maurins rhoncus.
    </p>
  </div>

 
  
 {{-- slider --}}
 

<div class="photo_slider">
    <div class="slider">
        <div class="slide-track">
           
            <div class="slide">
                <img src="./images/user_profile.png"  class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] h-96 ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125  hover:border-blue-500 border-[20px]">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
            <div class="slide">
                <img src="./images/user_profile.png" class="expandable-image hover:scale-125 hover:border-blue-500 border-[20px] ">
            </div>
            
        </div>
    </div>
</div>
   



{{-- view button --}}
 
  <div class="text-center mt-0 flex item-center justify-center gap-1">
    <button class="bg-black text-yellow-500 px-6 py-2  hover:bg-yellow-600 transition duration-300">
      View All Services
    </button>
    <button class="bg-black text-yellow-500 px-3 py-1  hover:bg-yellow-600 transition duration-300">
        <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FAB005/long-arrow-right.png" alt="long-arrow-right"/>
    </button>
  </div>


  {{-- Photograph section --}}


  <div class="text-center mt-10 mb-10">
    <h1 class="text-4xl font-bold text-black uppercase">PHOTOGRAPH BY US <span class="text-yellow-500">PORTFOLIO</span></h1>
    <p class="mt-4 text-lg text-gray-500">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
      Pellentesque convallis, augue ultricies, leo maurins rhoncus.
    </p>
  </div>


  <div class="flex flex-col md:flex-row mt-24 h-auto md:h-screen bg-black text-white">
    <div class="w-full md:w-1/2 flex flex-col justify-center px-6 md:px-16 py-8 space-y-6 md:space-y-8">
         <h2 class="text-3xl md:text-5xl font-bold uppercase">Who We <span class="text-yellow-500">Are?</span></h2>
         <p class="text-md md:text-lg text-gray-400">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis, 
             augue ut imperdiet ultricies, leo mauris rhoncus. Pellentesque convallis.
         </p>
         <div class="flex items-center gap-2 md:gap-1">
             <a href="#" class="bg-yellow-500 text-black px-4 md:px-6 py-2 md:py-3 text-md md:text-lg font-semibold">View All Services</a>
             <div class="bg-yellow-500 px-3 py-2 md:px-3 md:py-3">
                 <img width="10" height="10" src="https://img.icons8.com/ios-glyphs/30/1A1A1A/long-arrow-right.png" alt="long-arrow-right"/>
             </div>
         </div>
     </div>
 
     <div class="w-full md:w-1/2 relative h-64 md:h-full">
         <img src="./images/user_profile.png" alt="Profile Image" class="object-cover h-full w-full">
     </div>
 </div>
 

<div class="relative bg-cover bg-center py-16 px-8 mt-10" style="background-image: url('./images/user_profile.png');">
    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
    
    <div class="relative z-10 flex flex-col items-center text-white">
      <div class="flex space-x-1 mb-6">
        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="yellow" d="M12 2l2.833 8.736H24l-7.167 5.193 2.833 8.736L12 17.472l-7.667 5.193L7.167 15.93 0 10.736h9.167L12 2z"/>
          </svg>
        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="yellow" d="M12 2l2.833 8.736H24l-7.167 5.193 2.833 8.736L12 17.472l-7.667 5.193L7.167 15.93 0 10.736h9.167L12 2z"/>
          </svg>
        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="yellow" d="M12 2l2.833 8.736H24l-7.167 5.193 2.833 8.736L12 17.472l-7.667 5.193L7.167 15.93 0 10.736h9.167L12 2z"/>
          </svg>
        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="yellow" d="M12 2l2.833 8.736H24l-7.167 5.193 2.833 8.736L12 17.472l-7.667 5.193L7.167 15.93 0 10.736h9.167L12 2z"/>
          </svg>
        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="yellow" d="M12 2l2.833 8.736H24l-7.167 5.193 2.833 8.736L12 17.472l-7.667 5.193L7.167 15.93 0 10.736h9.167L12 2z"/>
          </svg>
          
        
      </div>
  
      {{-- Testimonial --}}
      <p class="text-center text-lg italic max-w-2xl">
        "Lorem ipsum dolor sit amet, consectetur adipiscingz elit. Pellentesque convallis, augue ut imperdiet ultricies, leo mauris rhoncus."
      </p>
    <p class="mt-6 font-semibold text-lg uppercase">Sadique Hussain</p>
    </div>
  </div>

{{-- CARD SECTION --}}


<div class="max-w-7xl mx-auto px-4 py-8">
    
    <div class="text-center mb-8">
        <h1 class="text-2xl md:text-4xl font-bold text-gray-900 uppercase">DISCOVER MORE ABOUT OUR <span class="text-yellow-500">PHOTOGRAPHY</span></h1>
        <p class="mt-2 text-gray-600">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Pellentesque Convallis, Augue Uthyu I Imperdiet Ultricies, Leo Mauris Rhoncus, Pellentesque.</p>
    </div>

   {{-- card --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="./images/user_profile.png" alt="" class="w-full h-64 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-2 uppercase">ELEVATE YOUR PORTRAITS</h2>
                <p class="text-gray-600 mb-4">We help e-commerce brands navigate the ever-changing landscape of digital marketing with best-in-class creative, personalized paid media strategies.</p>
                <p class="text-gray-500">26 MAY 2023</p>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="./images/user_profile.png" alt="" class="w-full h-64 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-2 uppercase">MASTERING PHOTOGRAPHY ART</h2>
                <p class="text-gray-600 mb-4">We help e-commerce brands navigate the ever-changing landscape of digital marketing with best-in-class creative, personalized paid media strategies.</p>
                <p class="text-gray-500">26 MAY 2023</p>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="./images/user_profile.png" alt="" class="w-full h-64 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-2 uppercase">CAPTURING MOMENTS</h2>
                <p class="text-gray-600 mb-4">We help e-commerce brands navigate the ever-changing landscape of digital marketing with best-in-class creative, personalized paid media strategies.</p>
                <p class="text-gray-500">26 MAY 2023</p>
            </div>
        </div>
    </div>
</div>

@endsection
 