<?php
 session_start();
 include("db.php");
 
   $user_name = "";
   $hello = $name_err = $password_err = $fail = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

  $name = $_POST['user_name'];

  $password = $_POST['password'];             


  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


if (empty($_POST["password"])){
    $password_err = "<span class='error'>Passowrd is Required!</span>";
} 
else {   
    $password = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
      $password_err = " <span class='error'>Only Letters and White Space!</span>";
    }
}

if (empty($_POST["user_name"])){
    $name_err = "<span class='error'>Username is Required!</span>";
} 
else {   
    $name = test_input($_POST["user_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_err = " <span class='error'>Only Letters and White Space!</span>";
    }
}
           
      if($password_err == "" AND $name_err == "" ){
                $select_admin = "select * from admin where username_admin='$name' AND pass='$password'";

                $run_admin = mysqli_query($con,$select_admin);

                $row_admin = mysqli_fetch_array($run_admin);

                $admin = $row_admin['username_admin'];

            
                if($row_admin == 0){

                    $fail = "<span class='error'>Either Your Username or Password is incorrect</span>";
                    echo"<script>window.open('login.php','_self')</script>";
                
                }else{
                    $_SESSION['username_admin'] = $admin;
                    echo"<script>alert('You are logged in')</script>";
                    echo"<script>window.open('upload_data.php','_self')</script>" ;
                }
      }else{
                echo"<script>alert('Wrong username or passowrd')</script>";
            }

}

        
?>