<?php

  $name = $_POST["name"];
  $password = $_POST["password"];

  require_once 'dbh.php';
  require_once 'functions.php';

  if (emptyInputLogIn($name,$password) !== false) {
    header("location: ../log_in.php?error=emptyInput");
    exit();
  }

  logInUser($conn, $name, $password);
