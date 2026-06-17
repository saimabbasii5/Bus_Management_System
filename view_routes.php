<?php include "config.php"; include "navbar.php"; ?>
<link rel="stylesheet" href="style.css">
<div class="main">
<div class="card-box">

<h3>Routes</h3>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>From</th>
<th>To</th>
<th>Date</th>
<th>Fare</th>
</tr>

<?php
$q=$conn->query("SELECT * FROM routes");
while($r=$q->fetch_assoc()){
echo "<tr>
<td>$r[route_id]</td>
<td>$r[route_name]</td>
<td>$r[route_from]</td>
<td>$r[route_to]</td>
<td>$r[travel_date]</td>
<td>$r[fare]</td>
</tr>";
}
?>

</table>

</div>
</div>