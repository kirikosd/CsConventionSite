<?php

  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $number = $_POST["number"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $con_password = $_POST["con_password"];

  require_once 'dbh.php';
  require_once 'functions.php';

if (emptyInputSignUp($firstname, $lastname, $email, $number, $username, $password, $con_password) !== false) {
  header("location: ../sign_up.php?error=emptyInput");
  exit();
}
if (invalidEmail($email) !== false) {
  header("location: ../sign_up.php?error=invalidEmail");
  exit();
}
if (pwdMatch($password, $con_password) !== false) {
  header("location: ../sign_up.php?error=pwddontMatch");
  exit();
}
if (usernameExists($conn, $username,$email) !== false) {
  header("location: ../sign_up.php?error=usernameExists");
  exit();
}
createUser($conn, $firstname, $lastname, $email, $number, $username, $password);
