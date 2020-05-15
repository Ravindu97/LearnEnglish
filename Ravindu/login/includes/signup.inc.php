<?php

if (isset($_POST['signup-submit'])) {

  // making the connection to the database
  require 'dbh.inc.php';

  // taking userdetails from the sign up form
  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

  //error handlers

  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location:../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
  }
  elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username) {
    header("Location:../signup.php?error=invalidEmailandUserID");
    exit();
  }
  elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("Location:../signup.php?error=invalidEmail&uid=".$username);
    exit();
  }
  elseif(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
    header("Location:../signup.php?error=InvalidUsername&mail=".$email);
    exit();
  }
  elseif ($password!=$passwordRepeat) {
    header("Location:../signup.php?error=checkPassword&uid=".$username."&mail=".$email);
    exit();
  }




}
