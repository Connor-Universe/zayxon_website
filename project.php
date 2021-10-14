<?php
  include("include/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Zayxon</title>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0>
	<link rel="icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/project.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'e79f9d953c8b89a9402d219d946f97df1dcfe37f';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
     
</head>
<body>
    <?php 
    if(isset($_GET['id']))
    {
        $name = $_GET['id'];
    $get_port = "select * from portfolio where id=$name";
                     
    $run_port = mysqli_query($con,$get_port);

    $row_port=mysqli_fetch_array($run_port);
      $port_id = $row_port['id'];
      $port_name = $row_port['port_title'];
      $port_type = $row_port['port_type'];
      $port_short_desc = $row_port['port_short_desc'];
      $port_img1 = $row_port['port_img1'];
      $port_img2 = $row_port['port_img2'];
      $port_img3 = $row_port['port_img3'];
      $port_long_desc = $row_port['port_long_desc'];
      $port_mem = $row_port['member'];
    }
    ?>
	<div class="top">
		<?php include("include/nav.php"); ?>
    </div>
   
    <div class="main">
        <p class="header">
            <?php echo"$port_name"; ?>
        </p>
    </div>
   <div class="desc">
       <div class="container">
           <div class="row">
               <div class="col-lg-6">
               <div class="contain">

<!-- Full-width images with number text -->
<div class="mySlides">
  <div class="numbertext">1 / 3</div>
    <img src="img/<?php echo"$port_img1";?>" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
    <img src="img/<?php echo"$port_img2";?>" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
    <img src="img/<?php echo"$port_img3";?>" style="width:100%">
</div>


<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<!-- Image text -->
<div class="caption-container">
  <p id="caption"></p>
</div>

<!-- Thumbnail images -->
<div class="row1">
  <div class="column">
    <img class="demo cursor" src="img/<?php echo"$port_img1";?>" style="width:100%" onclick="currentSlide(1)">
  </div>
  <div class="column">
    <img class="demo cursor" src="img/<?php echo"$port_img2";?>" style="width:100%" onclick="currentSlide(2)" >
  </div>
  <div class="column">
    <img class="demo cursor" src="img/<?php echo"$port_img3";?>" style="width:100%" onclick="currentSlide(3)" >
  </div>
</div>
</div>
               </div>
               <div class="col-lg-6">
                   <p class="first"><?php echo"$port_name";?></p>
                   <p class="text">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed totam illo quaerat placeat unde reprehenderit, 
                       dolorum voluptatum esse! Laborum hic tempore quidem iusto commodi dolorem, odit temporibus eius earum molestiae?
                   </p>
                   <p class="link">
                       <?php
                       if( $port_type =="design"){
                           echo"<p><span class='color'>Zayxon</span> we offer only the best</p>";
                       }else{
                           echo"Check out the site/app here <a href=''>Check it out</a>";
                       }
                   ?>
                   </p>
               </div>
           </div>
        
       </div>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
            <path fill="black" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,266.7C384,277,480,235,576,197.3C672,160,768,128,864,133.3C960,139,1056,181,1152,213.3C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path></svg>
       <div class="last-end">
       <div class="container-fluid">
         <div class="row flex-column-reverse flex-lg-row">
           <div class="col-lg-6"> 
              <p class="last">If You Want Amazing Designs Like This! Just Click The Link below</p>
                  <p class="end">
                    <a href="contact.php">Contact Us</a>
                  </p>
                      </div>
           <div class="col-lg-6">
             <img src="img/pic91.jpg" alt="">
           </div>
         </div>
         </div>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
            <path fill="#fbfbfd" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,266.7C384,277,480,235,576,197.3C672,160,768,128,864,133.3C960,139,1056,181,1152,213.3C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path></svg>
       </div>
    <?php include("include/footer.php"); ?>
    <script>
        var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
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
</body>
</html>