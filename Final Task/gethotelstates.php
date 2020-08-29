<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="homecss.css?version=51">


<?php
include 'dbconnhotel.php';


$q = explode("!", $_GET['q']);

$case=$q[0];

if ($case == '1'){
	$state = $q[1];
	$date = $q[2];
	$sql = "SELECT * from hotelinfo WHERE state= '$state' and availabledate < '$date'";
			$result = $conn->query($sql);

}

elseif ($case == '2'){
	$state = $q[1];
	$sql = "SELECT * from hotelinfo WHERE state= '$state' ";
			$result = $conn->query($sql);
}
elseif ($case == '3'){
	$state = $q[2];
	$date = $q[1];
	$sql = "SELECT * from hotelinfo WHERE state= '$state' and availabledate < '$date'";
			$result = $conn->query($sql);
}
elseif ($case == '4'){
	$date = $q[1];
	$sql = "SELECT * from hotelinfo WHERE availabledate < '$date'";
			$result = $conn->query($sql);
}
			
	
			while($row=$result->fetch_assoc()){

	?>

	<div class="hotel-cards middle-card">
		<img src="hl2.png" class="hotel-logo">
		<h3 class="hotel-name"><?php echo ($row["name"])?></h3>

		<div class="hotel-location"><?php echo ($row["state"])?></div>


		<div class="hotel-date-price">
			<p class="hotel-available"><?php echo ($row["availabledate"])?></p>
			<p class="hotel-price">start @  ₹<?php echo ($row["price"])?>/-</p>
		</div>	
		<div class="hotel-book">
			Book now &nbsp; <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
		</div>

	</div>

	<?php } ?>





</body>
</html>