<?php include "config.php"; include "navbar.php"; ?>
<link rel="stylesheet" href="style.css">
<div class="main card-box">

<h3>Add Driver</h3>

<form method="POST">

<input name="name" placeholder="Driver Name"><br>
<input name="phone" placeholder="Phone"><br><br>

<button name="save">Save</button>

</form>

<?php
if(isset($_POST['save'])){
$conn->query("INSERT INTO drivers(driver_name,driver_phone)
VALUES('$_POST[name]','$_POST[phone]')");
echo "Driver Added";
}
?>

</div>