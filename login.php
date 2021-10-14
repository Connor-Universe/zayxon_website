<?php
  include("include/login_process.php");
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
        <link rel="stylesheet" href="css\login.css">
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
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
     <p><a href="index.php"><img src="img/logo.png" alt=""></a></p>
     <?php echo "$fail"; ?>
        <div class="form-group">
            <label for="username">
                <i class="fa fa-user"></i>Username
            </label>
            <?php echo "$name_err" ;?>
            <input type="text" value="<?php echo"$user_name";?>" name="user_name" id="" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label for="password">
                <i class="fa fa-gears"></i>Password
            </label>
            <?php echo "$password_err"; ?>
            <input type="password" name="password" id="" class="form-control" placeholder="Enter Password">
            <p><button type="submit" class="submit">Login</button></p>
        </div>

     </form>
     <script>
    if ( window.history.replaceState ){
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>