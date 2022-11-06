<?php
  session_start();
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../style/base_style.css" >
<title> Συνέδριο </title>
</head>
<body>
  <h1 style="color:#29293d;">&nbsp;&nbsp;Συνέδριο Πληροφορικής, Αθήνα-31/2/2022</h1>
  <hr class='h'>
  <nav>
    <ul>
      <li><a href="base.php">Αρχική</a></li>
    	<li><a href="info.php">Βασικές πληροφορίες</a></li>
    	<li><a href="authors.php">Ομιλητές</a></li>
    	<li><a href="program.php">Πρόγραμμα</a></li>
      <li><a href="sign_up.php">Έγγραφή</a></li>
      <?php
      if (isset($_SESSION["firstname"])) {
        echo"<li><a href='accounts/logout.php'>Αποσύνδεση</a></li>";
      } else {
        echo"<li><a href='log_in.php'>Σύνδεση</a></li>";
      }
      ?>
      <li><a href="https://www.trip2athens.com/en/" target="_blank">Τουριστικός οδηγός</a></li>
      <li><a href="http://www.wikicfp.com/cfp/call?conference=computer%20science&skip=1" target="_blank">Παρόμοια συνέδρια</a></li>
    </ul>
 </nav>
  <div style="width:100%;">
