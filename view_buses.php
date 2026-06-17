<?php include "config.php"; include "navbar.php"; ?>
<link rel="stylesheet" href="style.css">
<div class="main card-box">

<h3>Buses</h3>

<?php
$q=$conn->query("SELECT * FROM buses");
while($r=$q->fetch_assoc()){
echo "$r[bus_number] - $r[bus_type] - $r[capacity]<br>";
}
?>

</div>