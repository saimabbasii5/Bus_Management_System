<?php include "config.php"; include "navbar.php"; ?>
<link rel="stylesheet" href="style.css">
<div class="main">
<div class="card-box">

<h3>Add Route</h3>

<form method="POST">

<input name="route_name" placeholder="Route Name"><br>
<input name="route_from" placeholder="From"><br>
<input name="route_to" placeholder="To"><br>
<input type="date" name="travel_date"><br>
<input name="fare" placeholder="Fare"><br><br>

<button name="save">Save Route</button>

</form>

<?php
if(isset($_POST['save'])){
$conn->query("INSERT INTO routes(route_name,route_from,route_to,travel_date,fare)
VALUES('$_POST[route_name]','$_POST[route_from]','$_POST[route_to]','$_POST[travel_date]','$_POST[fare]')");
echo "Route Added";
}
?>

</div>
</div>