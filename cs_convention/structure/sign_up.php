<?php
  include_once 'header.php';
?>
<h2 class="h">&nbsp;&nbsp;Φόρμα Εγγραφής </h2>
<form action="accounts/signup.php" method="post">
<table class="login_table">
<tr><td class="td1"><p class="h">Όνομα&nbsp;&nbsp;&nbsp;&nbsp;</p></td><td class="td2">&nbsp;<input type="text" name="firstname"  size="30" placeholder="Εισάγετε το όνομά σας" pattern="[a-zA-Zα-ωΑ-Ωάέύίήώό]+" required></td></tr>
<tr><td class="td1"><p class="h">Επώνυμο&nbsp;&nbsp;&nbsp;&nbsp;</p></td><td class="td2">&nbsp;<input type="text" name="lastname" size="30" placeholder="Εισάγετε το επώνυμό σας" pattern="[a-zA-Zα-ωΑ-Ωάέύίήώό]+"  required></></td></tr>
<tr><td style="height:70px;" class="td1"></td><td style="height:70px;" class="td2">&nbsp;<p class="h"><input type="radio" name="gender" id="male" required><label for="male">Mr</label>
	 <input type="radio" name="gender" id="female" required><label for="female">Mrs</label></p>
	 </td></tr>
<tr><td class="td1"><p class="h">Email&nbsp;&nbsp;&nbsp;&nbsp;</p></td><td class="td2">&nbsp;<input id="email" name="email" type="email" placeholder="Εισάγετε E-mail" required></td></tr>
<tr><td class="td1"><p class="h">Τηλέφωνο&nbsp;&nbsp;&nbsp;&nbsp;</p></td><td class="td2">&nbsp;<input type="number" name="number" placeholder="Εισάγετε τηλέφωνο" maxlength="10" required></td></tr>
<tr><td class="td1"><p class="h">Username&nbsp;&nbsp;&nbsp;&nbsp;</p></td><td class="td2">&nbsp;<input type="text" name="username" minlength="6" maxlength="8" pattern="[a-zA-Z]+" required></td></tr>
<tr><td class="td1"><p class="h">Password&nbsp;&nbsp;&nbsp;&nbsp;</p></td><td class="td2">&nbsp;<input type="password" name="password" minlength="6" maxlength="8" pattern="[a-zA-Z]+" required></td></tr>
<tr><td class="td1"><p class="h">Confirm password&nbsp;&nbsp;&nbsp;&nbsp;</p></td><td class="td2">&nbsp;<input type="password" name="con_password" maxlength="8" pattern="[a-zA-Z]+" required></td></tr>
<tr><td class="td1"></td><td class="td2"><p class="h">&nbsp;<input id="checkbox" type="checkbox" name="agreement" required><label for="checkbox">Συμφωνείτε να λαμβάνετe ενημερωτικά email</label></p></td></tr>
</table>

<?php
	if (isset($_GET["error"])) {
		if($_GET["error"] == "emptyInput"){
			echo"<p style='color:red; size:20px;'>Συμπληρώστε όλα τα πεδία!</p>";
		}else if ($_GET["error"] == "invalidEmail") {
			echo"<p style='color:red; size:20px;'>Χρησιμοποιήστε έγκυρο email!</p>";
		}else if ($_GET["error"] == "pwddontMatch") {
			echo"<p style='color:red; size:20px;'>Οι κωδικοί δεν ταιριάζουν!</p>";
		}else if ($_GET["error"] == "usernameExists") {
			echo"<p style='color:red; size:20px;'>Το username ή το email χρησιμοποιείται ήδη!</p>";
		}else if ($_GET["error"] == "stmtFailed") {
			echo"<p style='color:red;' size:20px;>Κάτι πήγε στραβά!Προσπαθήστε ξανά!</p>";
		}else if ($_GET["error"] == "none") {
			echo"<p style='color:green; size:20px';>Επιτυχής εγγραφή!</p>";
		}
	}
?>

<br>
<input type="reset" value="Ακύρωση">
<input type="submit" value="Αποστολή" name="submit">
<br><br><br>

</form>
<?php
  include_once 'footer.php';
?>
