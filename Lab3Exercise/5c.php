<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend>DEGREE</legend>
    <input type="checkbox" name=degree1 value="ssc" <?php if(isset($_POST["degree1"])) echo "checked"; ?> >SSC
    <input type="checkbox" name=degree2 value="hsc" <?php if(isset($_POST["degree2"])) echo "checked"; ?> >HSC 
    <input type="checkbox" name=degree3 value="bsc" <?php if(isset($_POST["degree3"])) echo "checked"; ?> >BSc
    <input type="checkbox" name=degree4 value="msc" <?php if(isset($_POST["degree4"])) echo "checked"; ?> >MSc
    <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

Selected Degree(s): <br>
<?php
	if(isset($_POST["degree1"])){
		echo "SSC"."</br>";
	}
	if(isset($_POST["degree2"])){
		echo "HSC"."</br>";
	}
	if(isset($_POST["degree3"])){
		echo "BSc"."</br>";
	}
	if(isset($_POST["degree4"])){
		echo "MSc"."</br>";
	}
?>

</body>
</html>
