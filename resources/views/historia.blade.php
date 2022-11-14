<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HISTORIA</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>
<style>


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}


.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.hi{
                color: gray;
                font-size: 50px;
                text-align:center;
                margin: auto;
                padding: 10px;
                font-style: italic
}
.h2{
    color: black;
                font-size: 50px;
                text-align:center;
                margin: auto;
                padding: 10px;
                font-style: italic
            }
 .header {
  height: 100px;
  text-align: center;
  color: black;
                font-size: 50px;
                margin: auto;
                padding: 10px;
                font-style: courier,arial;
 }
















body{
	color:#686868;
	font-size:14px;
	font-family: 'Roboto', sans-serif;
	line-height:1.80857;
}
a {
    color: #1f1f1f;
    text-decoration: none !important;
    outline: none !important;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    letter-spacing: 0;
    font-weight: normal;
    position: relative;
    padding: 0 0 10px 0;
    font-weight: normal;
    line-height: 120% !important;
    color: #1f1f1f;
    margin: 0
}

h1 {
    font-size: 24px
}

h2 {
    font-size: 22px
}

h3 {
    font-size: 18px
}

h4 {
    font-size: 16px
}

h5 {
    font-size: 14px
}

h6 {
    font-size: 13px
}


ul, li, ol{
	margin:0px;
	padding:0px;
	list-style:none;
}

a {
    color: #1f1f1f;
    text-decoration: none;
    outline: none !important;
}

.lead {
    font-size: 18px;
    line-height: 30px;
    color: #767676;
    margin: 0;
    padding: 0;
}

blockquote {
    margin: 20px 0 20px;
    padding: 30px;
}


html, body{ height: 100%; }

/*------------------------------------------------------------------
    ABOUT AREA
-------------------------------------------------------------------*/

.pad-top-100{
    padding-top: 90px;
}


.block-title{
	font-size:52px;
	font-family: 'nautilus_pompiliusregular';
	font-weight: bold;
}

.cabezera-menu{
	background:url(https://images4.alphacoders.com/681/thumb-1920-681826.jpg) no-repeat center;
	background-attachment:fixed;
	background-size:cover;
	position:relative;
}

.cabezera-menu:before {
    content: '';
    display: inline-block;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.67);
    position: absolute;
    top: 0;
    left: 0;
}

.title-caption {
    letter-spacing: 0.16px;
    padding: 20px 120px;
	color:#fff;
	font-size: 18px;
}
.color-white {
    color: #fff;
}

#owl-demo .item{
  margin: 15px;
  position:relative;
}
#owl-demo .item img{
  display: block;
  width: 100%;
  height: auto;
}
.cabezera-box .owl-theme .owl-controls{
	margin:0px;
}

.item-type-zoom{
	border:4px solid #fff;
}



.offer-item {
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
}

.offer-item img {
    width: 20%;
    float: left;
    padding: 10px;
    background: #fff;
	border-radius: 50%;
}

















body {
  margin: 0;
}










.header{
	color: #e75b1e;
}


































</style>

</head>

<body>
<body data-spy="scroll" data-target=".fixed-top">
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarsExampleDefault"> 
                        <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="http://127.0.0.1:8000/Historia">HISTORIA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="http://127.0.0.1:8000/comida">DESTINOS</a>
                                </li>
                                <li class="nav-item">
                            @auth
                                <a href="{{ url('/home') }}" class="nav-link page-scroll">Home</a>
                                </li>
                                <li class="nav-item">
                            @else
                                    <a href="{{ route('login') }}" class="nav-link page-scroll">LOG IN</a>
                                </li>
                                <li class="nav-item">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link page-scroll">REGISTER</a>
                                </li>
                                @endif
                            @endauth
                            </li>
                </div>
            @endif
    </nav>
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>EL PLACER DE VIAJAR</h1>
                            <p class="p-heading p-large">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio officia labore error cum neque saepe minus voluptatum dolores dolore eos.</p>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 
    </header> 

































    <div class="cabezera-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="header"> Conozca nuestra Historia </h2>
                    </div>

                    <div class="slideshow-container">

                        <div class="mySlides fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/3JKG77X2TBE5TKD64X5SQ74F2Y.jpg" style="width:100%">
                          <div class="text"></div>
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="https://tipsparatuviaje.com/wp-content/uploads/2019/07/santuario-historico-de-machu-picchu.jpg" style="width:100%">
                          <div class="text"></div>
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="https://www.incasperu.com/wp-content/uploads/2020/02/peru-en-15-dias-conocer.jpg" style="width:100%">
                          <div class="text"></div>
                        </div>
                        
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                        
                        </div>
                        <br>
                        
                        <div style="text-align:center">
                          <span class="dot" onclick="currentSlide(1)"></span> 
                          <span class="dot" onclick="currentSlide(2)"></span> 
                          <span class="dot" onclick="currentSlide(3)"></span> 
                        </div>
                        
                        <script>
                        let slideIndex = 1;
                        showSlides(slideIndex);
                        
                        function plusSlides(n) {
                          showSlides(slideIndex += n);
                        }
                        
                        function currentSlide(n) {
                          showSlides(slideIndex = n);
                        }
                        
                        function showSlides(n) {
                          let i;
                          let slides = document.getElementsByClassName("mySlides");
                          let dots = document.getElementsByClassName("dot");
                          if (n > slides.length) {slideIndex = 1}    
                          if (n < 1) {slideIndex = slides.length}
                          for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                          }
                          for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                          }
                          slides[slideIndex-1].style.display = "block";  
                          dots[slideIndex-1].className += " active";
                        }
                        
                        </script>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
                        <div class="slider slider-single">
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="https://tipsparatuviaje.com/wp-content/uploads/2019/07/machu-picchu.jpg" class="img-responsive">
                                        <div>
                                            <h3>Machu Picchu</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore sapiente, nostrum blanditiis vero at ut eligendi mollitia nesciunt atque maxime unde quam aperiam dolor rerum repudiandae beatae provident a voluptas molestias repellat incidunt consectetur. Alias, ad. Nam ratione consequatur aliquid consequuntur veritatis facere vero provident, eaque, tempora ipsa unde deleniti?
                                            </p>
                                        </div>
                                        <span class="offer-price">S/100</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="https://tipsparatuviaje.com/wp-content/uploads/2019/07/canon-del-colca.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Cañon del Colca</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad quos dolore pariatur obcaecati voluptates doloremque incidunt debitis earum ullam, autem eveniet quasi error quisquam porro, illum est corporis nostrum maiores alias ex. Voluptatibus, a est deserunt, quaerat nostrum asperiores ad expedita ut recusandae atque neque incidunt. Voluptatum id ducimus ipsa..
                                            </p>
                                        </div>
                                        <span class="offer-price">S/100</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="https://tipsparatuviaje.com/wp-content/uploads/2019/07/lima-peru-1.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Lima</h3>
                                            <p>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui, libero nisi amet voluptatibus repellendus vero, distinctio incidunt totam rerum magni obcaecati officiis provident nemo aliquam voluptas suscipit reiciendis molestias. Saepe officiis molestias blanditiis itaque. Corporis facilis labore reprehenderit iure facere ea dolore amet perspiciatis odio, voluptates, quas, exercitationem ducimus similique!
                                            </p>
                                        </div>
                                        <span class="offer-price">$100</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="https://tipsparatuviaje.com/wp-content/uploads/2019/07/lineas-de-nazca-1.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Lineas de Nazca</h3>
                                            <p>
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat blanditiis illo facilis nobis ullam! Sequi nulla, autem quasi est accusamus assumenda tenetur error molestiae ipsum pariatur aut laborum delectus aspernatur dignissimos? Reiciendis quam magnam sequi vitae, sed veritatis deleniti ad aliquam corporis placeat, sunt dolor quo rem. Eaque, voluptate beatae!
                                            </p>
                                        </div>
                                        <span class="offer-price">S/100</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="https://tipsparatuviaje.com/wp-content/uploads/2019/07/cusco-peru-1.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Cusco</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti aliquam facere ea error velit vero rem dicta, alias natus animi in officia non a et iste impedit quae distinctio sed magni? Asperiores incidunt rerum tempore necessitatibus quaerat voluptates. Veniam maiores molestiae sit consectetur possimus, eum perspiciatis optio impedit minus modi maxime ab beatae exercitationem ex magni repellendus ad! Mollitia sed, ut dolorum dolore facere expedita similique eveniet cupiditate fuga praesentium voluptates doloremque beatae laborum ipsa ad. Nemo, iusto.s.
                                            </p>
                                        </div>
                                        <span class="offer-price">S/100</span>
                                    </div>
                                </div>

        </div>
    </div>
</body>
</html>