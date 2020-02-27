
<?php
$conn=new mysqli("localhost","root","","abc");
	$Dish_Name = $_POST['Dish_Name'];
$Price = $_POST['Price'];
	

if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);

}
else {
$stmt=$conn->prepare("update inventory SET Price=$Price WHERE Dish_Name='$Dish_Name'");
$stmt->execute();
echo "<h1>Price Updated Succesfully</h1>";
$stmt->close();
$conn->close();
}



?>