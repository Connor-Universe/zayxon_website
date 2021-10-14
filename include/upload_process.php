<?php
include("db.php");



   // define variables and set to empty values
$port_name_err = $port_type_err = $short_err = $long_err = $img1_err = $img2_err = $img3_err = $port_mem_err  = "";
$port_name = $port_type = $port_short_desc = $port_long_desc = $port_img1 = $port_img2 = $port_img3 = $port_mem = "";




if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $port_name = $_POST['port_title'];
    $port_type = $_POST['port_type'];
    $port_short_desc = $_POST['port_short_desc'];
    $port_long_desc = $_POST['port_long_desc'];
    $port_img1 = $_FILES['port_img1']['name'];
    $port_img1_tmp = $_FILES['port_img1']['tmp_name'];
    $port_img2 = $_FILES['port_img2']['name'];
    $port_img2_tmp = $_FILES['port_img2']['tmp_name'];
    $port_img3 = $_FILES['port_img3']['name'];
    $port_img3_tmp = $_FILES['port_img3']['tmp_name'];
    $target_dir = "img/";
      $target_file1 = $target_dir . basename($port_img1);
      $target_file2 = $target_dir . basename($port_img2);
      $target_file3 = $target_dir . basename($port_img3);        
      $uploadOk = "";
      $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
      $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
      $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
    $port_mem = $_POST['mem'];

  
  
 //check for unique password 

 $get_name = "select port_title from portfolio";
 $run_name = mysqli_query($con,$get_name);
 $column_name = mysqli_fetch_array($run_name);

 //check for unique username

 $get_img1 = "select port_img1 from portfolio";
 $run_img1 = mysqli_query($con,$get_img1);
 $column_img1 = mysqli_fetch_array($run_img1);
 
 $get_img2 = "select port_img2 from portfolio";
 $run_img2 = mysqli_query($con,$get_img2);
 $column_img2 = mysqli_fetch_array($run_img2);

 $get_img3 = "select port_img3 from portfolio";
 $run_img3 = mysqli_query($con,$get_img3);
 $column_img3 = mysqli_fetch_array($run_img3);

 //check for unique email address



  //the next code is for checking the form data
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if (empty($_POST["port_title"])) {
    $port_name_err = "<span class='error'>portfolio name is required!</span>";
  } 
    elseif(in_array($port_name,$column_name)){
        $port_name_err = "<span class='error'>This Portfolio name is already in use</span>";
}
  
  if ($port_type == "select") {
    $port_type_err = "<span class='error'>You need to select a type!</span>";
  } 
  if (empty($_POST["port_short_desc"])) {
    $short_err = "<span class='error'>Short Description is required!</span>";
  } else {
    $port_short_desc = test_input($_POST["port_short_desc"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$port_short_desc)) {
        $short_err = "<span class='error'>Only letters and white space allowed!</span>";
      }
    }
  
  if ($_POST["mem"] == "select") {
    $port_mem_err = "<span class='error'>Select a creator</span>";
  }

  if (empty($port_img1)){
      $img1_err= "<span class='error'> You need an image!</span>";
  }else{   
    $check = getimagesize($port_img1_tmp);
    if (file_exists($target_file1)) {
        $img1_err = "<span class= 'error'>This is already your profile picture!</span>";
        $uploadOk = 0;
    }elseif ($_FILES["port_img1"]["size"] > 1000000) {
        $img1_err = "<span class= 'error'>This image is above 1Mb!</span>";
        $uploadOk = 0;
    }elseif($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
    && $imageFileType1 != "gif" ) {
        $img1_err = "<span class='error'>Sorry, only JPG, JPEG, PNG & GIF files are allowed. </span>";
        $uploadOk = 0;
    }
     elseif($check === false){
        $img1_err = "<span class='error'>This is not an image!</span>";
        $uploadOk = 0;
    }elseif(in_array($port_img1,$column_img1)){
      $img1_err = "<span class= 'error'>Sorry This Image is already In the Database</span>";
    }else{
        $uploadOk = 1;
    }
}

 
 if (empty($port_img2)) {
  $img2_err= "<span class='error'> You need an image!</span>";
 }else{   
$check = getimagesize($port_img2_tmp);
if (file_exists($target_file2)) {
    $img2_err = "<span class= 'error'>This is already your profile picture!</span>";
    $uploadOk = 0;
}elseif ($_FILES["port_img2"]["size"] > 1000000) {
    $img2_err = "<span class= 'error'>This image is above 1Mb!</span>";
    $uploadOk = 0;
}elseif($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
&& $imageFileType2 != "gif" ) {
    $img2_err = "<span class='error'>Sorry, only JPG, JPEG, PNG & GIF files are allowed. </span>";
    $uploadOk = 0;
}
 elseif($check === false){
    $img2_err = "<span class='error'>This is not an image!</span>";
    $uploadOk = 0;
}elseif(in_array($port_img2,$column_img2)){
  $img2_err = "<span class= 'error'>Sorry This Image is already In the Database</span>";
}else{
    $uploadOk = 1;
}
}

if (empty($port_img3)){
  $img3_err= "<span class='error'> You need an image!</span>";
}else{   
$check = getimagesize($port_img3_tmp);
if (file_exists($target_file3)) {
    $img3_err = "<span class= 'error'>This is already your profile picture!</span>";
    $uploadOk = 0;
}elseif ($_FILES["port_img3"]["size"] > 1000000) {
    $img3_err = "<span class= 'error'>This image is above 1Mb!</span>";
    $uploadOk = 0;
}elseif($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
&& $imageFileType3 != "gif" ) {
    $img3_err = "<span class='error'>Sorry, only JPG, JPEG, PNG & GIF files are allowed. </span>";
    $uploadOk = 0;
}
 elseif($check === false){
    $img3_err = "<span class='error'>This is not an image!</span>";
    $uploadOk = 0;
}elseif(in_array($port_img3,$column_img3)){
  $img3_err = "<span class= 'error'>Sorry This Image is already In the Database</span>";
}else{
    $uploadOk = 1;
    
}
}


  //if validation is satified then create a token for the user 
  
  
        if ($port_name_err =="" AND $port_type_err == "" AND $short_err =="" AND $img1_err == "" AND $img2_err =="" AND $img3_err =="" AND $port_mem_err=="" ){
     
          move_uploaded_file($port_img1_tmp,$target_file1);
          move_uploaded_file($port_img2_tmp,$target_file2);
          move_uploaded_file($port_img3_tmp,$target_file3);
          $port_long_desc = "insert long desc";
          $insert_port = "INSERT INTO portfolio (port_title,port_type,port_short_desc,port_long_desc,port_img1,port_img2,port_img3,member) VALUES 
          ('$port_name','$port_type','$port_short_desc ','$port_long_desc','$port_img1','$port_img2','$port_img3','$port_mem')";
      
          $run_port = mysqli_query($con,$insert_port);
      
          echo "<script>alert('Upload Successful!')</script>"; 
      
        
                
   }else{

    echo"<script>alert('Upload failed!')</script>";
   }
}




  

  




        
  

?>