$sql = "SELECT * from aggregate_data WHERE Type = '$housetype' and BHK = $bedrooms and Area = '$area'";
//$sql = "SELECT * from aggregate_data WHERE Type = 'Apartment' and BHK = 3 and Area = 'Maninagar'";

$conn = new mysqli("localhost","root","","housedata");
$result = $conn->query($sql);

 while($row=$result->fetch_assoc()){