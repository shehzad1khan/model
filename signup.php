<?php 

   $link = mysqli_connect("localhost", "root", "", "e-commerce") or die('connection error');

   $name = "admin";   
   $username = "admin@gmail.com";
   $password = md5('123456');  
 
       
  $insert = "INSERT INTO users (name, username, password) 
  VALUES ('$name', '$username', '$password')";
              
  $query = mysqli_query($link, $insert) or die('insertion error');
           
   if($query){
 
    header("location:login.php?register=success");
  }
   else{
    echo '<div class="alert alert-danger text-center col-md-4 offset-5">Something went wrong</div>';
   }     
   
?>