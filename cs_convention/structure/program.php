<?php
  include_once 'header.php';

  if (isset($_SESSION["firstname"])) {
    echo"<table class='program_table'>";
    echo"<th style='width:15%; height: 40px;'>ΩΡΑ</th><th style='height: 40px;'>ΔΡΑΣΤΗΡΙΟΤΗΤΑ</th>";
    echo"<tr><td class='program_td' style='width:15;'><p class='p'>09:30-10:00</p></td><td class='program_td'><p class='p'>Καλωσόρισμα - Εισαγωγή</p></td></tr>";
    echo"<tr><td class='program_td' style='width:15;'><p class='p'>10:00-12:00</p></td><td class='program_td'><p class='p'>Προηγμένα Συστήματα Πληροφορικής - Ανάπτυξη Λογισμικού και Τεχνητής Νοημοσύνης</p></td></tr>";
    echo"<tr><td class='program_td' style='width:15;'><p class='p'>14:00-16:00</p></td><td class='program_td'><p class='p'>Ψηφιακός Πολιτισμός, Έξυπνες Πόλεις, IoT και Προηγμένες Ψηφιακές Τεχνολογίες</p></td></tr>";
    echo"<tr><td class='program_td' style='width:15;'><p class='p'>18:00-20:00</p></td><td class='program_td'><p class='p'>Κατανεμημένα Συστήματα, Ασφάλεια και Αναδυόμενες Τεχνολογίες Πληροφορίας</p></td></tr>";
    echo"</table>";
  } else {
    echo"<h1>Για την προβολή του προγράμματος απαιτείται σύνδεση!</h1>";
    echo"<a href='sign_up.php'><p>Δημιουργία λογαριασμού</p></a>";
    echo"<a href='log_in.php'><p>Σύνδεση</p></a>";
  }

  include_once 'footer.php';
?>
