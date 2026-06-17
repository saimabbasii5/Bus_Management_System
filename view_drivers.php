<?php include "config.php"; include "navbar.php"; ?>
<link rel="stylesheet" href="style.css">
<div class="main card-box">

<h3>Drivers</h3>

<?php
$q=$conn->query("SELECT * FROM drivers");
while($r=$q->fetch_assoc()){
echo "$r[driver_name] - $r[driver_phone]<br>";
}
?>

</div>