<?php include "config.php"; include "navbar.php"; ?>
<link rel="stylesheet" href="style.css">
<div class="main">
<div class="card-box">

<h3>Tickets</h3>

<?php
$q=$conn->query("
SELECT t.*, r.route_from, r.route_to
FROM tickets t
JOIN routes r ON t.route_id=r.route_id
");

while($r=$q->fetch_assoc()){
echo "$r[passenger_name] - $r[route_from] → $r[route_to] - Seat $r[seat_number]<br>";
}
?>

</div>
</div>