<!DOCTYPE html>
<html>
<body>

<?php
	$day='XX'; $month='XX'; $year='XXXX';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		$day = $_POST["day"];
  		$month=$_POST["month"];
  		$year=$_POST["year"];
  	}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend>DATE OF BIRTH</legend>
          <pre>          dd                         mm                     yyyy  </pre>
    <input type="text" name=day value=""> / <input type="text" name=month value=""> / <input type="text" name=year value="">
    <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

Date of birth: <?php echo $day."/".$month."/". $year." "; ?>
<small>dd/mm/yyyy</small>
</body>
</html>
