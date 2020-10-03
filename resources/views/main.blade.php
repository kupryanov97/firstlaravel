
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="C:\WebServers\home\test1.ru\Новая папка\components\main.css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<body>
<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{ route('admin.companies.index') }}">Companies</a></li>
                            <li><a href="{{ route('admin.films.index') }}">Films</a></li>
                            <li><a href="/main">Фоточки</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
  
<div class="parallax"></div>

<div style="height:200px;background-color:white;font-size:26px;text-align: center;  margin-left:10%;
  margin-right:10%;">
Scroll Up and Down this page to see the parallax scrolling effect.
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>

<div class="parallax">
    <div class="info" style="padding-left:16px">
    <h2>Responsive Topnav Example</h2>
    <p>Resize the browser window to see how it works.</p>
  </div>
<h2 style="text-align:center">Lightbox</h2>
  <div class="row" id="main">
    <div class="column">
      <img src="https://html5css.ru/howto/img_nature_wide.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="https://html5css.ru/howto/img_snow_wide.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="https://html5css.ru/howto/img_mountains_wide.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="https://html5css.ru/howto/img_lights_wide.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
    </div>
  </div>
</div>
<div class="parallax2"></div>

<div style="height:200px;background-color:white;font-size:26px;margin-top:-30%;text-align: center;">
LALALALA
LALALALADSLGGLSDGG
</div>

<div class="parallax2">
    <div class="info" style="padding-left:16px">
    <h2>Responsive Topnav Example</h2>
    <p>Resize the browser window to see how it works.</p>
  </div>
<h2 style="text-align:center">Lightbox</h2>
  <div class="row" id="main">
    <div class="column">
      <img src="https://html5css.ru/howto/img_nature_wide.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="https://html5css.ru/howto/img_snow_wide.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="https://html5css.ru/howto/img_mountains_wide.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
    </div>
    <div class="column">
      <img src="https://html5css.ru/howto/img_lights_wide.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
    </div>
  </div>
</div>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">×</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="https://html5css.ru/edithtm/img_nature_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="https://html5css.ru/edithtm/img_snow_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="https://html5css.ru/howto/img_mountains_wide.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="https://html5css.ru/howto/img_lights_wide.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo" src="https://html5css.ru/howto/img_nature_wide.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="https://html5css.ru/howto/img_snow_wide.jpg" onclick="currentSlide(2)" alt="Snow">
    </div>

    <div class="column">
      <img class="demo" src="https://html5css.ru/howto/img_mountains_wide.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="https://html5css.ru/howto/img_lights_wide.jpg" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<script>
  function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
          x.className += " responsive";
      } else {
          x.className = "topnav";
      }
  }
  </script>    
</body>
<style>
 .topnav {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  width: 100%;
}
body, html {
  height: 100%;
}
.row{
  margin: center;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
  max-width: 90%;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
  max-width: 90%;
  height: auto;
  margin-left:15%;
  margin-right:15%;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.info{
  margin-top:-5%;
  text-align: center;
}
.parallax {
  /* The image used */
  background-image: url('https://i.pinimg.com/originals/c3/1a/61/c31a6162c0ba150e01e883a04f5f6674.jpg');
  opacity:0.5;
  /* Full height */
  height: 50%; 
  color:white;
  margin-left:10%;
  margin-right:10%;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax2 {
  /* The image used */
  background-image: url('https://avatars.mds.yandex.net/get-zen_doc/931568/pub_5c8a18accdee3a00b3c467c3_5c8a231650389e00b37bfa7c/scale_1200');

  /* Full height */
  height: 50%; 
  color:white;
  margin-left:10%;
  margin-right:10%;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: top;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</html>



