<?php
   include('conn.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from comm_user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];

   $profile_pic = $row['profile_pic'];

   $user_name = $row['name'];

   $email = $row['email'];

   $date_register = $row['date_register'];
   
   if(!isset($_SESSION['login_user'])){
      //header("location:login.php");
   }
?>