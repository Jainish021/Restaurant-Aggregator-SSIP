
<?php
$conn=new mysqli("localhost","root","","abc");
	$Dish_Name = $_POST['Dish_Name'];
$Total = $_POST['Total'];
$Price = $_POST['Price'];	
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);

}
else {
$stmt=$conn->prepare("insert into inventory SET Dish_Name='$Dish_Name',Total=$Total,Price=$Price");

$stmt->execute();
echo "<h1>New Dish Details entered Succesfully</h1>";
$stmt->close();
$conn->close();
}



?>