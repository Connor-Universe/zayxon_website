<?php
session_start();
  include('include/upload_process.php');
  if(!isset($_SESSION['username_admin']))
{
    // not logged in
    header("location:index.php");
    echo"<script>alert('Restricted to Admins only !')</script>";
    exit();
}elseif(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username_admin']);
    header("location:login.php");
    echo"<script>alert('Your are logging out!')</script>";
}
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
        <link rel="stylesheet" href="css/upload_data.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
     
    
    </head>
    <body>
      <div class="section-one">
        <h2><span class="color">Insert</span> Portfolio Images!</h2>
        <p class="text-muted">This is the admin section that allows you to upload the images and descriptions 
            into the online server of pristinedigitals.com <a href="?logout=yes" class="btn btn-success" name="logout">Logout</a></p>
      </div>

      <div class="section-two">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
           
            <div class="form-group">
            <label for="product-title">
                    Portfolio Title
            </label>
            <?php echo"$port_name_err";?>
            <input type="text" class="form-control" placeholder="input the name of the product" name="port_title">
             </div>
            
             <div class="form-group">
            <label for="product-categories">
                Portfolio Categories
            </label>
            <?php echo"$port_type_err";?>
             <select name="port_type" id="product-categories" class="form-control">
                <option value= "select"> Select a Product Category</option>
                <option value="website">Website</option>
                <option value="development">Development</option>
                <option value="design">Design</option>
             </select>
            </div>

            <div class="form-group">
                <label>
                    Portfolio Image One 
                </label>
                <?php echo"$img1_err";?>
                <input type="file" name="port_img1" class="form-control">
            </div>
            <div class="form-group">
                <label>
                    Portfolio Image Two
                </label>
                <?php echo"$img2_err";?>
                <input type="file" name="port_img2" class="form-control">
            </div>
            <div class="form-group">
                <label>
                    Portfolio Image Three
                </label>
                <?php echo"$img3_err";?>
                <input type="file" name="port_img3" class="form-control">
            </div>

            <div class="form-group">
                <label>
                    Portfolio Short Description 
                </label>
                <?php echo"$short_err";?>
                <input type="text" name="port_short_desc" placeholder="Short Description" class="form-control">
            
            </div>
            <div class="form-group">
                <label>
                    Portfolio Long Description
                </label>
                <?php echo"$long_err";?>
                <textarea name="port_long_desc" class="form-control" cols="30" rows="10"></textarea>
            
            </div>
            <div class="form-group">
            <label for="product-categories">
                Who created It?
            </label>
            <?php echo"$port_mem_err";?>
             <select name="mem" id="pickup_location" class="form-control" required>
                <option value="select"> Select Creator</option>
                <option value="me">Ebuka</option>
                <option value="izu">Izuchukwu</option>
                <option value="emeka">Emeka</option>

             </select>
            </div>

           
            <input value="Insert Portfolio!" name="insert" type="submit" class="btn btn-primary">
            
            </form>
      </div>
    
    </body>
    <script>
    if ( window.history.replaceState ){
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    
</html>

<?php


?>