<?php include "config.php"; include "navbar.php"; ?>
<link rel="stylesheet" href="style.css">
<div class="main card-box">

<h3>Add Bus</h3>

<form method="POST">

<input name="bus_number" placeholder="Bus Number"><br>
<input name="bus_type" placeholder="Type"><br>
<input name="capacity" placeholder="Capacity"><br><br>

<button name="save">Save</button>

</form>

<?php
if(isset($_POST['save'])){
$conn->query("INSERT INTO buses(bus_number,bus_type,capacity)
VALUES('$_POST[bus_number]','$_POST[bus_type]','$_POST[capacity]')");
echo "Bus Added";
}
?>

</div>