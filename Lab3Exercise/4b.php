<!DOCTYPE html>
<html>
<body>

<?php
	$gender="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		$gender = $_POST["gender"];
  	}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend>GENDER</legend>
    <input type="radio" name=gender value="Male"checked>Male
    <input type="radio" name=gender value="Female">Female 
    <input type="radio" name=gender value="Other">Other
    <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

Selected gender: <?php echo $gender ?>

</body>
</html>
