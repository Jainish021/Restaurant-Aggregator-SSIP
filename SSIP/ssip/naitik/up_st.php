
<?php
$conn=new mysqli("localhost","root","","abc");
	$Dish1 = $_POST['dish1'];
$Dish2 = $_POST['dish2'];
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);

}
else {
$stmt=$conn->prepare("update stock SET Dish1=$Dish1+(SELECT Dish1 from stock), Dish2=$Dish2+(SELECT Dish2 from stock) WHERE Dish1=(SELECT Dish1 from stock)");
#$stmt->bind_param("ii",$Dish1,$Dish2);
$stmt->execute();
echo "update success";
$stmt->close();
$conn->close();
}



?>