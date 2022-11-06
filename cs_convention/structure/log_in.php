<?php
  include_once 'header.php';
?>
<h2 class="h">&nbsp;&nbsp;Φόρμα Σύνδεσης </h2>
<form action="accounts/login.php" method="post">
<table class="login_table">
<tr><td class="td1"><p class="h">Email/Username&nbsp;&nbsp;&nbsp;&nbsp;</p></td><td class="td2">&nbsp;<input id="uid/mail" name="name" type="text" placeholder="Email or Username..." required></td></tr>
<tr><td class="td1"><p class="h">Password&nbsp;&nbsp;&nbsp;&nbsp;</p></td><td class="td2">&nbsp;<input type="password" name="password" minlength="6" maxlength="8" pattern="[a-zA-Z]+" required></td></tr>
</table>

<?php
	if (isset($_GET["error"])) {
		if($_GET["error"] == "emptyInput"){
			echo"<p style='color:red; size:20px;'>Συμπληρώστε όλα τα πεδία!</p>";
		}else if ($_GET["error"] == "stmtFailed") {
			echo"<p style='color:red;' size:20px;>Κάτι πήγε στραβά!Προσπαθήστε ξανά!</p>";
		}else if ($_GET["error"] == "wronglogin") {
			echo"<p style='color:red; size:20px';>Λανθασμένο email/username!</p>";
		}else if ($_GET["error"] == "wrongpass") {
			echo"<p style='color:red; size:20px';>Λανθασμένο password!</p>";
		}
	}
?>

<br>
<input type="reset" value="Ακύρωση">
<input type="submit" value="Σύνδεση" name="sumbit">
<br><br><br>

</form>
<?php
  include_once 'footer.php';
?>
