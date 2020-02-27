
<?php
$conn=new mysqli("localhost","root","","abc");
	$Dish_Name = $_POST['Dish_Name'];
$Total = $_POST['Total'];
	

if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);

}
else {
$stmt=$conn->prepare("update inventory SET Total=$Total+(SELECT Total from inventory WHERE Dish_Name='$Dish_Name') WHERE Dish_Name='$Dish_Name'");
#$stmt->bind_param("ii",$Dish1,$Dish2);
$stmt->execute();
echo "<h1>Updated Succesfully</h1>";
$stmt->close();
$conn->close();
}



?>