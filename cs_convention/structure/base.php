<?php
  include_once 'header.php';
?>
<div class="container">
  <img src='../pictures/Acropolis.jpg' width='100%;' height="450">
  <?php
  if (isset($_SESSION["firstname"])) {
    echo"<div class='centered'><p class='text-pic' style='font-size:40px;'>Γειά σας Κ. ".$_SESSION["firstname"]."</p></div>";
  } else {
  echo "<div class='centered'><p class='text-pic' style='font-size:40px;'>Καλωσήρθατε στην<br>επίσημη ιστοσελίδα του<br>Συνεδρίου Πληροφορικής</p></div>";
  }
  ?>
</div>
<?php
  include_once 'footer.php';
?>
