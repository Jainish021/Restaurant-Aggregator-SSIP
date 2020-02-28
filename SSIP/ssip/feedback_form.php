
<?php
$conn=new mysqli("localhost","root","","abc");
	$OrderID = $_POST['OrderID'];
$Ratings = $_POST['Ratings'];
$Feedback = $_POST['Feedback'];	
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);

}
$sql="UPDATE `order` SET Ratings=$Ratings,Feedback='$Feedback' WHERE OrderID='$OrderID'";
if($conn->query($sql)===TRUE)
{
echo "<h1>Feedback Given Succesfully</h1>";
}
else {
echo "Error updating record: " . $conn->error;	
}

$conn->close();

?>