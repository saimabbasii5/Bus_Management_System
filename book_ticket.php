<?php include "config.php"; include "navbar.php"; ?>
<link rel="stylesheet" href="style.css">
<div class="main">
<div class="card-box">

<h3>Book Ticket</h3>

<form method="POST">

<input name="name" placeholder="Passenger Name"><br>
<input name="from" placeholder="From"><br>
<input name="to" placeholder="To"><br>
<input type="date" name="date"><br>
<input name="seat" placeholder="Seat"><br><br>

<button name="book">Book</button>

</form>

<?php
if(isset($_POST['book'])){

$check = $conn->query("SELECT * FROM routes 
WHERE route_from='$_POST[from]'
AND route_to='$_POST[to]'
AND travel_date='$_POST[date]'");

if($check->num_rows > 0){

$route = $check->fetch_assoc();

$conn->query("INSERT INTO tickets(passenger_name,route_id,seat_number)
VALUES('$_POST[name]',$route[route_id],'$_POST[seat]')");

echo "Ticket Booked ✔";

}else{
echo "❌ Route Not Found";
}

}
?>

</div>
</div>