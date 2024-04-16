<html>
  <head>
    <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="homecss">
</head>
    <style>
a:hover{border: none;
    border-bottom: 2px solid red;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    background-color:white;
  color:black;}
    .active{
	border:none;
  border-bottom:2px solid navy;.
  background-color:white;
  color:brown;
}
a{
	white-space: nowrap;
}
    </style>
        <body>
<section>
    <div class="body">
            <div class="nav-bar" id="navbar">
            <span><img src="GM.png"width="125px" height="125px" style="margin-left:-140px;"> </span>
                <a href="gmhome.php" class="nav home"><i class="fa fa-home"></i>Home</a>
                <a href="counting.php" class="nav following "><i class="fa fa-th" aria-hidden="true"></i>Box Entering</a>
                <a href="empoyee.php" class="nav following "><i class="fa fa-history" aria-hidden="true"></i>Empolyee history</a>
                <a href="gmrecord.php" class="nav search"><i class="fa fa-registered" aria-hidden="true"></i>Record</a>               
                <a href="profile.php" class="nav settings"><i class="fa fa-user" aria-hidden="true"></i>Proflie</a>  
              </div>  
             <span style="float:right;margin-top:-13vh;">          
              <button onclick="myFunction()" style="background-color: white;border: none;"><i class="fa fa-sign-out" aria-hidden="true" style="font-size:26px; margin-right:22px;"></i></button>
              <button onclick="mycall()" style="background-color: white;border: none;"><i class="fa fa-user" aria-hidden="true" style="font-size: 26px;"></i></button>

            </span>
</div>

</section><br><br>
<section>

<div class="slideshow-container">

<div class="mySlides fade">
  <img class="img" src="mut1.png" style="width:100%; height:83%;border-radius:20px;">
</div>

<div class="mySlides fade">
  <img class="img"src="mut2.png" style="width:100%;height:83%; border-radius:20px;">
</div>
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
</section>
<section>
  <div class="card01">
<div style="display:flex;">
<div class="card">
  <div class="container">
    <h2 style="text-align:center; font-size:23px;">Resource</h2>
  <i class="fa fa-desktop int" aria-hidden="true"></i><br>
  <p class="loop"> Computer monitor is an output device that displays information in pictorial or textual form.</p>
  </div>
</div>
<div class="card">
  <div class="container">
    <h2 style="text-align:center;font-size:23px;">Style</h2>
    <i class="fa fa-dashcube int" style="margin-left:35%;" aria-hidden="true"></i><br>
  <p class="loop">Dashcube is the only collaboration tool that gives planning and communicating equal status.</p>
  </div>
</div>

<div class="card">
  <div class="container">
    <h2 style="text-align:center;font-size:23px;">Desgin</h2> 
    <i class="fa fa-diamond int" aria-hidden="true"></i>
    <p class="loop">Diamond, a mineral composed of pure carbon. It is the hardest naturally occurring substance known; it is also the most popular gemstone.</p>
  </div>
</div>

</div>
</div>
</section>
<section>
  <div style="margin-top:25vh"></div>
  <div class="find">
    <h2 style="text-align:center; padding-top:14px; font-size:32px;">Developer</h2>
    <p style="text-align: center;font-size: 17px;">A content developer creates information for web pages and online marketing. Job duties<br> 
        include the development and editing of articles, blogs, ad copy, and social media <br>
          posts. A content developer may also create graphics, use photos, and work<br>
                                      on web page layout.
</p>
    <div class="icon">
    <i class="fa fa-instagram big" aria-hidden="true"></i>
    <i class="fa fa-facebook big" aria-hidden="true"></i>
    <i class="fa fa-twitter-square big" aria-hidden="true"></i>
    <i class="fa fa-google-plus-official big" aria-hidden="true"></i>
    <i class="fa fa-youtube-play big" aria-hidden="true"></i>
  </div>
  
<div class="java" style="display:flex;">
<h3 style="margin-left:27px">Copyright<span><i class="fa fa-copyright" aria-hidden="true">2022</span></i>Designed by GM</h3>
<div class="jen">
<h5 style="color:white; padding-right:10px;">Home</h5>
<h5 style="color:white; padding-right:10px;">Box entering</h5>
<h5 style="color:white; padding-right:10px;">Record</h5>
<h5 style="color:white; padding-right:10px;">Proflie</h5>
</div>
</div>
  </div>
</section>
</body>
            <script>
              var header = document.getElementById("navbar");
var btns = header.getElementsByClassName("nav");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
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
// this is for log out 
function myFunction() {
  alert("Are  You Sure You Are Living The Home !!!");
  location.replace("log.php")
}
// this funcation is for profile
function mycall() {
  location.replace("profile.php")
}
            </script>
</html>