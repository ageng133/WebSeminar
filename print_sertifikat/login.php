<?php
  if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    if ( !empty($firstname) && !empty($lastname) ) {
      Header("Location: inputsuccess.php");
    }
    else { $error = true; }
  }
?>
...
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php
  if ( @$error && empty($firstname) ) {
    echo '<span style="color:red">';
    echo 'Error! Please enter a first name.</span><br>';
  }
?>
  First name: <input name="firstname" type="text"
    value="<?php echo @$firstname; ?>">
  <br>
<?php
  if ( @$error && empty($lastname) ) {
    echo '<span style="color:red">';
    echo 'Error! Please enter a last name.</span><br>';
  }
?>
  Last name:
  <input name="lastname" type="text" value="<?php echo @$lastname; ?>">
  <br>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>