<?php

  function emptyInputSignUp($firstname, $lastname, $email, $number, $username, $password, $con_password){
    $result;
    if (empty($firstname) || empty($lastname) || empty($email) || empty($number) || empty($username) || empty($password) || empty($con_password)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  function pwdMatch($password, $con_password){
    $result;
    if ($password !== $con_password) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  function usernameExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../sign_up.php?error=stmtFailed");
      exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
      return $row;
    }else {
      $result = false;
      return $result;
    }
    mysqli_stmt_close($stmt);
  }

  function createUser($conn, $firstname, $lastname, $email, $number, $username, $password){
    $sql = "INSERT INTO users (usersFirstName, usersLastName, usersEmail, usersNumber, usersUsername, usersPassword) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../sign_up.php?error=stmtFailed");
      exit();
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $email, $number, $username, $hash);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../sign_up.php?error=none");
    exit();
  }

   function emptyInputLogIn($name, $password){
     $result;
     if (empty($name) || empty($password)) {
       $result = true;
     } else {
       $result = false;
     }
     return $result;
   }

   function logInUser($conn, $name, $password){
     $nameExists = usernameExists($conn, $name, $name);

     if ($nameExists === false) {
       header("location: ../log_in.php?error=wronglogin");
       exit();
     }

     $hashedPass = $nameExists["usersPassword"];
     $checkPass = password_verify($password, $hashedPass);

     if ($checkPass === false) {
       header("location: ../log_in.php?error=wrongpass");
       exit();
     } else if ($checkPass === true) {
       session_start();
       $_SESSION["firstname"] = $nameExists["usersFirstName"];
       header("location: ../base.php?error=none");
       exit();
     }
   }
