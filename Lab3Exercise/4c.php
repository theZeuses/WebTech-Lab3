<!DOCTYPE html>
<html>
<body>

<?php
	$gender="Male";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		$gender = $_POST["gender"];
  	}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend>GENDER</legend>
    <input type="radio" name=gender value="Male" <?php if($gender=="Male") echo 'checked'; ?>>Male
    <input type="radio" name=gender value="Female" <?php if($gender=="Female") echo 'checked'; ?>>Female 
    <input type="radio" name=gender value="Other" <?php if($gender=="Other") echo 'checked'; ?>>Other
    <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

Selected gender: <?php echo $gender ?>

</body>
</html>
