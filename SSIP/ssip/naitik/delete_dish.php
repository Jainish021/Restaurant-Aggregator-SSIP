
<?php
$conn=new mysqli("localhost","root","","abc");
	$Dish_Name = $_POST['Dish_Name'];
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);

}
else {
$stmt=$conn->prepare("delete from inventory WHERE Dish_Name='$Dish_Name'");

$stmt->execute();
echo "<h1>Dish Details deleted Succesfully</h1>";
$stmt->close();
$conn->close();
}



?>