<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

<style>
          :root{
          --primary: #292826;
          --secondary:#f9d342;
          --shadow: 0 1px 5px rgba(104,104,104,0.8);
          }

          *{
              padding: 0;
              margin:0;
              box-sizing: border-box;
          }

          body,html{
              font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              scroll-behavior: smooth;
              overflow-x: hidden;
          }

          .header {
            overflow: hidden;
            background-color: var(--primary);
            padding: 20px 10px;
            display:flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
          }

          .logoX{ 
            font-weight: bold;;
            font-size: 30px;
          }

          .header-left a{
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            color: var(--secondary);
            padding:10px;
            border-radius: 8px;
          }

          .header-right{
              display: flex;
              gap:30px;
          }

          .header-right a{
            text-decoration: none;
            font-size:15px;
            color:white;
            padding: 5px;
          }

          .header-right a:hover{
              border-bottom: 1px solid var(--secondary);
          }

          .header-left a:hover {
            background-color: var(--secondary);
            color: black;
          }

          .header-left a.active {
            background-color: var(--secondary);
            color: black;
          }

          .menu{
            display: none;
          }

          .icon{
            color: var(--secondary);
            font-size: 30px;
          }

          .header-mobile{
            display: none;
            flex-direction: column;
            width: 100%;
            gap:20px;
            background-color: var(--primary);
            padding: 10px 20px;
          }

          .header-mobile a{
            text-decoration: none;
            font-size:15px;
            color:white;
            padding: 10px;
          }

          .header-mobile a:hover{
            background-color: var(--secondary);
            width: auto;
            color: var(--primary);
            padding: 10px;
          }


          .main{
            background-image: url('../images/banner1.jpg');
            height:95vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
          }
          .main-background{
            background-color:rgba(0, 0, 0, 0.60);
            height:95vh;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            color: white;
          }
          .description{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            flex-direction: column;
          }
          .description h1{
            font-size: 80px;  
            color: var(--secondary);
          }
          .description p{
            font-size: 40px;  
            color: white;
          }
          .description button{
            margin-top: 25px;
            padding: 15px 25px;
            background-color: var(--secondary);
            border:0;
            cursor: pointer;
            border-radius: 4px;
          }
          .description a{
            text-decoration: none;
            color: var(--primary);
            font-weight:600;
            font-size: 20px;
          } 





          .services, .contact{
            padding-top: 30px;
          }
          .service-title, .gallery-title, .location-title, .contact-title{
            background-color: var(--primary);
            color: var(--secondary);
            padding:10px;
            font-family: var(--font1);
            border-radius: 4px;
            border: 1px solid var(--secondary);
            width: 40%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            text-align: center;
            letter-spacing: 5px;
            margin-bottom: 50px;
          }
          .service-page{
            display: grid;
            grid-template-areas: 
            "service1 service2 service3 service4"
            "service5 service6 service7 service8";
            grid-template-columns: 1fr 1fr 1fr 1fr;
            margin: 30px;
            grid-gap: 10px;
            justify-items: center;
          }
          .service-page img{
              width: 350px !important;
              height: 230px !important;
              border-radius: 6px;
              cursor: pointer;
          }
          .service-page h4{
            font-size: 22px;
          }
          .service-page p{
            font-size: 18px;
            font-weight: normal;
          }

          .package{
            display: flex;
            align-items: center;
            gap:5px;
          }
          .service-page .packageA, .service-page .packageB {
            font-size: 12px;
            font-style: italic;
            font-weight: lighter;
          }
          .service1, .service2, .service3, .service4, .service5, .service6, .service7, .service8{
            margin: 20px;
          }


          .gallery-page{
            display: grid;
            grid-template-areas: 
            "image1 image2 image3" 
            "image4 image5 image6" 
            "image7 image8 image9";
            grid-template-columns: 1fr 1fr 1fr;
            margin: 30px;
            grid-gap: 10px;
            justify-items: center;
            padding: 20px;
          }
          .gallery-page img{
            width: 100%;
            height: auto;
            opacity: 0.9;
            border:1px solid var(--primary);
            border-radius: 4px;
          }
          .gallery-page img:hover{
            opacity: 1;
            cursor: pointer;
            border:1px solid var(--secondary);
          }
          #lightbox{
                  position: fixed;
                  z-index: 1000;
                  top: 0;
                  width: 100%;
                  height: 100%;
                  background-color: rgba(0,0,0, .8);
                  display: none;
          }
          #lightbox.active{
                display: flex;
                justify-content: center;
                align-items: center;
          }

          #lightbox img{
            max-width: 100%;
            max-height: 100%;
          }
          



          .location-page{
            display: flex;
            justify-content: center;
            width: 100%;
            padding:0 50px;
            flex-direction: column;
          }
          .location-text {
            display: flex;
            gap:10px;
            align-items: center;
            padding:20px 0;
            flex-wrap: wrap;
            color: var(--primary)
          }



          .contact-page{
            background-image: url('../images//banner2.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            }
          .contact-background{
            background-color:rgba(0, 0, 0, 0.80);
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas: 
          "contact-left contact-right";
          justify-content: center;
          }

          .contact-background > div{
          padding: 50px;
          }
          .contact-left{
          grid-area: contact-left;
          display: flex;
          justify-content: space-around;
          justify-content: top;
          align-items: flex-start;
          }

          .box2{
            grid-area: box2;
            display: flex;
            flex-direction: column;
            justify-content: top;
            align-items: start; 
          }

          .contact-left h4{
            margin: 10px 10px 10px 0px;
            color:var(--secondary);
          }

          .contact-left p{
            color: white;
            line-height: 2rem;
          }  
          .contact-left h4{
            margin: 10px 10px 10px 0px;
            color:var(--secondary);
          }
          .contact-left .hours{
            padding-top: 50px;
          }
          .contact-left p{
            color: white;
            line-height: 1.5rem;
          }
          .contact-right h4{
            color:var(--secondary);
          } 

          .contact-right{
            grid-area: contact-right;
            display: flex;
            flex-direction: column;
            justify-content: top;
            align-items: flex-start;
          }

          .contact-right input[type=text]{
            padding: 20px;
            width: 100%;
            margin: 10px 10px 10px 0px;
            border-radius: 4px;
            border:0;
          }

          .contact-right textarea{
            padding: 20px;;
            width: 100%;
            margin: 10px 10px 10px 0px;
            border-radius: 4px;
            border:0;

          }

          .contact-right input[type=submit]{
            padding:10px 20px;
            margin: 10px 10px 10px 0px;
            border-radius: 4px;
            border:0;
            background-color:var(--primary);
            color: var(--secondary);
            border:1px solid white;
            cursor: pointer;
          }
          


          .social-media{
            display: flex;
            align-items: center;
            gap:20px;
          }
          .social-media a{
            color:white;
            font-size: 25px;
          }


          /* Footer */
          .footer{
            width: 100%;
            background-color: var(--primary);
          }

          .footer p{
            text-align: center;
            padding: 20px; 
            color: var(--secondary);
          }



          /* Media Queries */

          @media screen and (max-width: 1650px) {


            .service-page{
              display: grid;
              grid-template-areas: 
              "service1 service2" 
              "service3 service4"
              "service5 service6"
              "service7 service8";
              grid-template-columns: 1fr 1fr;
              grid-gap: 10px;
              justify-items: center;
            }


              .service-page img{
                width: 500px !important;
                height: 400px !important;
            }


          }
          @media screen and (max-width: 1180px) {

            .service-page img{
              width: 350px !important;
              height: 250px !important;
            }

            .contact-left{
              grid-area: contact-left;
              display: flex;
              flex-direction: column;
              justify-content: top;
              align-items: flex-start;
              }

          }
          @media screen and (max-width: 920px) {

            .description h1{
              font-size: 60px;  
              color: var(--secondary);
            }
            .description p{
              font-size: 20px;  
            }
            .description button{
              margin-top: 20px;
            }
            .description a{
              font-size: 16px;
            } 
            
          }
          @media screen and (max-width: 870px) {

            

            #lightbox img{
              max-width: 80%;
              max-height: 100%;
            }

            .service-page{
              display: grid;
              grid-template-areas: 
              "service1"
              "service2" 
              "service3" 
              "service4"
              "service5"
              "service6"
              "service7" 
              "service8";
              grid-template-columns:1fr;
              justify-items: center;
              margin: 0;
              gap:50px;
            }


            .service-page img{
              width: 600px !important;
              height: 550px !important;
            }

            .service1, .service2, .service3, .service4, .service5, .service6, .service7, .service8{
              margin: 0;
            }


          }
          @media screen and (max-width: 710px) {
              .header {
                padding: 20px 10px;
                display:flex;
                justify-content: space-between;
                padding: 20px;
              } 

              .header-right{
                display: none;
                gap:30px;
                margin-top: 20px;
            }

            .menu{
              display: block;
            }

            .description h1{
              font-size: 45px;  
              color: var(--secondary);
            }
            .description p{
              font-size: 16px;  
            }
            .description button{
              margin-top: 16px;
            }
            .description a{
              font-size: 14px;
            } 


            .gallery-page{
              display: grid;
              grid-template-areas: 
              "image1" 
              "image2" 
              "image3" 
              "image4" 
              "image5" 
              "image6" 
              "image7" 
              "image8" 
              "image9";
              grid-template-columns: 1fr;
              margin: 10px;
              grid-gap: 10px;
              justify-items: center;
              padding: 10px;
            }


            .contact-background{
              background-color:rgba(0, 0, 0, 0.80);
              display: grid;
              grid-template-columns: 1fr;
              grid-template-areas: 
            "contact-left" 
            "contact-right";
            justify-content: center;
            }



            .service-page img{
              width: 320px !important;
              height: 250px !important;
            }

            .service-title, .gallery-title, .location-title, .contact-title{

              width: 80%;
            }

            .location-page{
              padding:0 20px;
            }
            
          }
          @media screen and (max-width: 500px) {

            .description h1{
              font-size: 35px;  
              color: var(--secondary);
            }

            .gallery-title, .location-title{
              margin-top: 50px;
            }

          }
</style>
    </head>
    <body>
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-white text-black sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-2xl text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-2xl text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-2xl text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

          
        </div> --}}


         <!-- header -->
    <div class="header" id="home">
        <!-- Logo -->
        <div class="header-left">
          <a href="#home" class="logo"><span class="logoX">X</span> Barbershop</a>
        </div>
        
        <!-- Navigation Desktop -->
        <div class="header-right">
          <a href="#home">Home</a>
          @if (Route::has('login'))
              @auth
                  <a href="{{ url('/dashboard') }}">Dashboard</a>
              @else
                  <a href="{{ route('login') }}">Log in</a>
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
          @endif
          <a href="#service">Services</a>
          <a href="#gallery">Gallery</a>
          <a href="#location">Location</a>
          <a href="#contact">Contact Us</a>  
        </div>

        <!-- Hamburger Menu -->
        <a href="javascript:void(0);"  onclick="toggle()" class="menu">
          <i class="fa fa-bars icon"></i>
        </a>

    </div>

     <!-- Navigation Mobile -->
    <div class="header-mobile" id="mobile-links">
      <a href="#home">Home</a>
      <a href="#service">Services</a>
      <a href="#gallery">Gallery</a>
      <a href="#location">Location</a>
      <a href="#contact">Contact Us</a>  
    </div>

    <!-- content body -->
    <div>
      <!-- Main -->
      <div class="main">
        <div class="main-background">
          <div div class="description">
            <h1>Finally, a barbershop </h1>
            <p>where you can really be YOURSELF.</p>
            <button><a href="#service">Book Now</a></button>
          </div>
          </div>
      </div>

      <!-- Services -->
      <div class="services" id="service">
        <h2 class="service-title">Services</h2>

        <div class="service-page">
          <div class="service1">
            <img src="images/haircut.jpg" alt="bread" loading="lazy"/>
            <h4>Haircut</h4>
            <p>₱150</p>
          </div>
          <div class="service2">
             <img src="images/shave.png" alt="bread" loading="lazy"/>
             <h4>Shave</h4>
            <p>₱ 60.00</p>
          </div>
          <div class="service3">
             <img src="images/hair-treatment.png" alt="bread" loading="lazy"/>
             <h4>Hair Treatment</h4>
            <p>₱ 500.00</p>
          </div>
          <div class="service4">
             <img src="images/hair-color.png" alt="bread" loading="lazy"/>
             <h4>Hair Color</h4>
            <p>₱ 400.00</p>
          </div>
          <div class="service5">
             <img src="images/massage.jpg" alt="cookie" loading="lazy"/>
             <h4>Spot Massage</h4>
            <p>₱ 350.00</p>
          </div>

          <div class="service6">
            <img src="images/manicure.png" alt="cookie" loading="lazy"/>
            <h4>Manicure/Pedicure</h4>
           <p>₱ 100.00</p>
         </div>

          <div class="service7">
             <img src="images/package1.jpg" alt="cookie" loading="lazy"/>
             <div class="package">
              <h4>Package A </h4>
              <p class="packageB">(Haircut + Shave + Spot Massage)</p>
             </div>
            <p>₱ 550.00</p>
          </div>
          <div class="service8">
             <img src="images/package2.png" alt="cookie" loading="lazy"/>
             <div class="package">
              <h4>Package B </h4>
              <p class="packageB">(Haircut + Hair Treatment + Spot Massage)</p>
             </div>
            <p>₱ 980.00</p>
          </div>
          
        </div>
            
      </div>

      <!-- Gallery -->
      <div class="gallery" id="gallery">
        <h2 class="gallery-title">Gallery</h2> 

        <div class="gallery-page">
          <img src="images/image1.jpg" alt="picture" class="image1" loading='lazy'/>
          <img src="images/image2.jpg" alt="picture" class="image2" loading='lazy'/>
          <img src="images/image3.jpg" alt="picture" class="image3" loading='lazy'/>

          <img src="images/image4.jpg" alt="picture" class="image4" loading='lazy'/>
          <img src="images/image5.jpg" alt="picture" class="image5" loading='lazy'/>
          <img src="images/image6.jpg" alt="picture" class="image6" loading='lazy'/>

          <img src="images/image7.jpg" alt="picture" class="image7" loading='lazy'/>
          <img src="images/image8.jpg" alt="picture" class="image8" loading='lazy'/>
          <img src="images/image9.jpg" alt="picture" class="image9" loading='lazy'/>
          <div id="caption"></div>
        </div>

      </div>

      <!-- Location -->
      <div class="location" id="location">
        <h2 class="location-title">Location</h2> 

                <div class="location-page">
                    <div class="location-text">
                      <h2> <i class="fas fa-map-marker" title="location"></i> Location:</h2>
                      <p>#123 Narra St. Brgy. Linen Bonifacio Global City, Taguig, Metro Manila</p>
                    </div>

                    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=bgc%20taguig+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        <a href="https://www.gps.ie/">gps systems</a>
                    </iframe>
                </div>

      </div>

      <!-- Contact -->
      <div class="contact" id="contact">
        <h2 class="contact-title">Contact Us</h2> 

        <div class="contact-page">
          <div class="contact-background">
            
             
                <div class="contact-left">
                  <div>
                    <h4>GET IN TOUCH</h4>
                    
                    <div class="social-media">
                        <a href="https://www.facebook.com"><i class="fab fa-facebook-square" title="facebook"></i></a>
                        <a href="https://www.youtube.com"><i class="fas fa-caret-square-right" title="youtube"></i></a>
                        <a href="https://www.instagram.com"><i class="fab fa-instagram" title="instagram"></i></a>
                        <a href="https://www.pinterest.com"><i class="fab fa-pinterest-square" title="pinterest"></i></a>
                    </div>

                  </div>
                  <div>
                    <h4>CALL US</h4>
                    <p>(1234) 567-891</p>
                    <p>+639123456789</p>

                    <h4 class="hours">BUSINESS HOURS</h4>
                    <p>Mon-Fri ..... 10am - 8pm</p>
                    <p>Sat, Sun ..... Closed</p>
                  </div>   
                </div>


                <div class="contact-right">

                  @if(session()->has('msgSuccess'))
                        <strong style="color:white; font-size:14px; background-color:black; padding:5px;">{{ session('msgSuccess') }}</strong>
                    @endif

                  <h4>INQUIRE NOW</h4>
                  <form method="POST" action="{{ route('send.email') }}"> 
                    @csrf
                    <input type="text" name="name" placeholder="Enter your name"/>
                    <input type="text" name="email" placeholder="Enter your email"/>
                    <textarea name="subject" placeholder="Write something here"></textarea>
                    <input type="submit" value="Send"/> 
                  </form>
                </div>
      
           </div>
        </div>

      </div>

    </div>
    
    <!-- footer -->
    <div class="footer">
      <small><p><strong>&copy; <span id="year"></span>  || Design and Created By Mark Cabael</strong></p></small>
    </div>

    <!-- Script -->
    <script type="text/javascript">

        // Year
        document.getElementById("year").innerHTML = new Date().getFullYear();

        // Gallery
        document.addEventListener('DOMContentLoaded', ()=>{
          
          const lightbox =document.createElement('div')
          lightbox.id = "lightbox"
          document.body.appendChild(lightbox)
      
          
          const images = document.querySelectorAll('img')
          images.forEach(image => {
      
              image.addEventListener('click', e =>{
                  lightbox.classList.add('active')
                  const img = document.createElement('img')
                  img.src  = image.src
                  while(lightbox.firstChild){
                    lightbox.removeChild(lightbox.firstChild)
                  }
                  lightbox.appendChild(img)
              })
          })
      
          lightbox.addEventListener('click', e=>{
              if(e.target !== e.currentTarget) return
              lightbox.classList.remove('active')
          })
      
        })

        // Clicking hamburger menu
        function toggle() {
          const links = document.getElementById("mobile-links");
          if (links.style.display === "flex") {
            links.style.display = "none";
          } else {
            links.style.display = "flex";
          }
        }
        window.addEventListener('resize', toggleWindowSize)
        function toggleWindowSize(){
          if (window.innerWidth < 710) {
            document.getElementById('mobile-links').style.display = 'flex';
          }
          else {
              document.getElementById('mobile-links').style.display = 'none';                
          }
        }
        
    </script>


    </body>
</html>
