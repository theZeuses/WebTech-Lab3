<!DOCTYPE html>
<html>
<body>

<?php
    $selected_val="A+";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selected_val = $_POST["bloodgroup"];
    }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
    <legend>BLOOD GROUP</legend>
  <select name="bloodgroup">
    <option value="A+" <?php if($selected_val=="A+") echo "selected"; ?> >A+</option>
    <option value="A-" <?php if($selected_val=="A-") echo "selected"; ?> >A-</option>
    <option value="B+" <?php if($selected_val=="B+") echo "selected"; ?> >B+</option>
    <option value="B-" <?php if($selected_val=="B-") echo "selected"; ?> >B-</option>
    <option value="AB+" <?php if($selected_val=="AB+") echo "selected"; ?> >AB+</option>
    <option value="AB-" <?php if($selected_val=="AB-") echo "selected"; ?> >AB-</option>
    <option value="O+" <?php if($selected_val=="O+") echo "selected"; ?> >O+</option>
    <option value="O-" <?php if($selected_val=="O-") echo "selected"; ?> >O-</option>
  </select>
  <br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

Blood Group: 
<?php
    echo $selected_val;
?>

</body>
</html>
