<?php 
  include("include/db.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Zayxon</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css\portfolio.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/footer.css">
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
        <div class="top">

        <?php include("include/nav.php"); ?>

        </div>
        <div class="main">
            <div class="main-top">
               <p class="first">Our Portfolio</p>
               <p class="second">View Our Amazing Portfolio, We Only Deliever The Best!</p>
            </div>
          <div class="portfolio">
          
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12 ">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Websites/Web Apps</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Logos/Graphic Designs</a>
                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Projects In Development</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="card-columns">
                       
                        <?php
                        $get_port = "select * from portfolio";
                     
                        $run_port = mysqli_query($con,$get_port);
  
                        while($row_port=mysqli_fetch_array($run_port)){
                          $port_id = $row_port['id'];
                          $port_name = $row_port['port_title'];
                          $port_type = $row_port['port_type'];
                          $port_short_desc = $row_port['port_short_desc'];
                          $port_img1 = $row_port['port_img1'];
                          $port_mem = $row_port['member'];
                         
                          if($port_mem == "me"){
                              $mem_img = "me.jpg";
                          }elseif($port_mem == "emeka"){
                              $mem_img = "emeka.jpg";
                          }else{
                              $mem_img = "izu.jpg";
                          }
                          
                          echo " 
                          
                          <div class='card'>
                            <img class='card-img-top' src='img/$port_img1'>
          
                            <div class='card-block'>
                                <figure class='profile'>
                                    <img src='img/$mem_img' class='profile-avatar' alt='avatar'>
                                </figure>
                                <h4 class='card-title mt-3'>$port_name</h4>
                                <div class='meta'>
                                    <a>$port_type</a>
                                </div>
                                <div class='card-text'>
                                    $port_short_desc
                                </div>
                            </div>
                            <div class='card-footer'>
                                <small>Click Here For More Info</small>
                                <a href='project.php?id=$port_id' class='btn show-link float-right btn-sm stretched-link'>Show</a>
                            </div>
                        </div>
                          
                          
                          
                          ";
                        }
                        ?>
                        
                    </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div class="card-columns">
                      <?php
                        $get_port = "select * from portfolio where port_type = 'website' or port_type='webapp'";
                     
                        $run_port = mysqli_query($con,$get_port);
  
                        while($row_port=mysqli_fetch_array($run_port)){
                          $port_id = $row_port['id'];
                          $port_name = $row_port['port_title'];
                          $port_type = $row_port['port_type'];
                          $port_short_desc = $row_port['port_short_desc'];
                          $port_img1 = $row_port['port_img1'];
                          $port_mem = $row_port['member'];
                         
                          if($port_mem == "me"){
                              $mem_img = "me.jpg";
                          }elseif($port_mem == "emeka"){
                              $mem_img = "emeka.jpg";
                          }else{
                              $mem_img = "izu.jpg";
                          }
                          
                          echo " 
                          
                          <div class='card'>
                            <img class='card-img-top' src='img/$port_img1'>
          
                            <div class='card-block'>
                                <figure class='profile'>
                                    <img src='img/$mem_img' class='profile-avatar' alt='avatar'>
                                </figure>
                                <h4 class='card-title mt-3'>$port_name</h4>
                                <div class='meta'>
                                    <a>$port_type</a>
                                </div>
                                <div class='card-text'>
                                    $port_short_desc
                                </div>
                            </div>
                            <div class='card-footer'>
                                <small>Click Here For More Info</small>
                                <a href='project.php?id=$port_id' class='btn show-link float-right btn-sm stretched-link'>Show</a>
                            </div>
                        </div>
                          
                          
                          
                          ";
                        }
                        ?>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      <div class="card-columns">
                      <?php
                        $get_port = "select * from portfolio where port_type = 'design'";
                     
                        $run_port = mysqli_query($con,$get_port);
  
                        while($row_port=mysqli_fetch_array($run_port)){
                          $port_id = $row_port['id'];
                          $port_name = $row_port['port_title'];
                          $port_type = $row_port['port_type'];
                          $port_short_desc = $row_port['port_short_desc'];
                          $port_img1 = $row_port['port_img1'];
                          $port_mem = $row_port['member'];
                         
                          if($port_mem == "me"){
                              $mem_img = "me.jpg";
                          }elseif($port_mem == "emeka"){
                              $mem_img = "emeka.jpg";
                          }else{
                              $mem_img = "izu.jpg";
                          }
                          
                          echo " 
                          
                          <div class='card'>
                            <img class='card-img-top' src='img/$port_img1'>
          
                            <div class='card-block'>
                                <figure class='profile'>
                                    <img src='img/$mem_img' class='profile-avatar' alt='avatar'>
                                </figure>
                                <h4 class='card-title mt-3'>$port_name</h4>
                                <div class='meta'>
                                    <a>$port_type</a>
                                </div>
                                <div class='card-text'>
                                    $port_short_desc
                                </div>
                            </div>
                            <div class='card-footer'>
                                <small>Click Here For More Info</small>
                                <a href='project.php?id=$port_id' class='btn show-link float-right btn-sm stretched-link'>Show</a>
                            </div>
                        </div>
                          
                          
                          
                          ";
                        }
                        ?>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                      <div class="card-columns">
                      <?php
                        $get_port = "select * from portfolio where port_type = 'development'";
                     
                        $run_port = mysqli_query($con,$get_port);
  
                        while($row_port=mysqli_fetch_array($run_port)){
                          $port_id = $row_port['id'];
                          $port_name = $row_port['port_title'];
                          $port_type = $row_port['port_type'];
                          $port_short_desc = $row_port['port_short_desc'];
                          $port_img1 = $row_port['port_img1'];
                          $port_mem = $row_port['member'];
                         
                          if($port_mem == "me"){
                              $mem_img = "me.jpg";
                          }elseif($port_mem == "emeka"){
                              $mem_img = "emeka.jpg";
                          }else{
                              $mem_img = "izu.jpg";
                          }
                          
                          echo " 
                          
                          <div class='card'>
                            <img class='card-img-top' src='img/$port_img1'>
          
                            <div class='card-block'>
                                <figure class='profile'>
                                    <img src='img/$mem_img' class='profile-avatar' alt='avatar'>
                                </figure>
                                <h4 class='card-title mt-3'>$port_name</h4>
                                <div class='meta'>
                                    <a>$port_type</a>
                                </div>
                                <div class='card-text'>
                                    $port_short_desc
                                </div>
                            </div>
                            <div class='card-footer'>
                                <small>Click Here For More Info</small>
                                <a href='project.php?id=$port_id' class='btn show-link float-right btn-sm stretched-link'>Show</a>
                            </div>
                        </div>
                          
                          
                          
                          ";
                        }
                        ?>
                    </div>
                    </div>
                  </div>
                
                </div>
              </div>
        </div>
      </div>
</div>

                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
            <path fill="black" fill-opacity="1" d="M0,128L48,160C96,192,192,256,288,266.7C384,277,480,235,576,197.3C672,160,768,128,864,133.3C960,139,1056,181,1152,213.3C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path></svg>
                </div>
    
          <div class="main-end">
            <p class="end">Want Amazing Designs<span class="color">!</span></p>
         <div class="container">
           <div class="row flex-column-reverse flex-lg-row">
             <div class="col-lg-6"> 
           <p class="second">We Are A Company That You Can Trust :-)</p>
           <p class="first">You can get a lovely project like these!</p>
           <p><a href="contact.php" class="link">Contact Us</a></p></div>
             <div class="col-lg-6">
               <img src="img/pic96.jpg" alt="">
             </div>
           </div>
         </div>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
  <path fill="#fbfbfd" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,250.7C384,277,480,267,576,261.3C672,256,768,256,864,266.7C960,277,1056,299,1152,277.3C1248,256,1344,192,1392,160L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
</svg>
          </div>
        
         <?php include("include/footer.php"); ?>
        
    </body>
</html>