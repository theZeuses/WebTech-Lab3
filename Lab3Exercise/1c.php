<!DOCTYPE html>
<html>
<body>

<?php
	$name="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		$name = $_POST["name"];
  	}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend>NAME</legend>
    <input type="text" name="name" value="<?php echo $name; ?>" >
    <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

<?php echo "Name: ".$name; ?>

</body>
</html>
