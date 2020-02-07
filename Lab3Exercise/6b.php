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
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
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
