<?php
session_start();
include "connection.php";

if(isset($_POST['login'])){

     $username=$_POST['username'];
    $password=$_POST['password'];

    $error = array();
    if (empty($username)){
        $error['login'] ="Enter username";
    }
    elseif (empty($password)){
        $error['login'] ="Enter password";
    }
       if(count($error)==0){
        $query ="SELECT * FROM task WHERE username='$username' AND password='$password'";
        $result =mysqli_query($conn,$query);

        if (mysqli_num_rows($result)== 1){
            echo "<script> alert('you have login succesfully')</script>";
            header("Location:sidenav.php");

           
        }
        else{
            echo "<script>alert('Invalid username or password')</script>";
        }}}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" >
    
    <div col-md-6 class="container">
          <h1 class="head">LOGIN PAGE</h1>
          <img class="logo" src="admin.jpg">
         <div>
          <label>USERNAME:</label>
          <input type="text" name="username"placeholder="enter username" Required>

         </div><br><br>
         <div>
          <label>PASSWORD:</label>
          <input type="password" name="password"placeholder="enter password" Required>

         </div><br><br>
         <div>
           <a href=""><button name="login">LOGIN</button></a>
        
         </div>

    </div>
    
</div>

    </form>
</body>
</html>