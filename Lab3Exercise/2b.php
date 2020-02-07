<!DOCTYPE html>
<html>
<body>

<?php
	$email="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		$email = $_POST["email"];
  	}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend>EMAIL</legend>
    <input type="EMAIL" name="email" value="">
    <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

<?php echo "Inputed Email: ".$email; ?>

</body>
</html>
