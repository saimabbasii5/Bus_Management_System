<?php include "config.php"; include "navbar.php"; ?>
<link rel="stylesheet" href="style.css">
<div class="main">

<div class="hero">
<h1>🚌 Bus Booking System</h1>
<p>Route Based Ticket Management</p>
</div>

<div class="card-box">
Routes:
<?php echo $conn->query("SELECT COUNT(*) c FROM routes")->fetch_assoc()['c']; ?>
</div>

<div class="card-box">
Tickets:
<?php echo $conn->query("SELECT COUNT(*) c FROM tickets")->fetch_assoc()['c']; ?>
</div>

</div>