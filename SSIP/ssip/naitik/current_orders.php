<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Table with database</title>
    <style type="text/css">
    body{
     padding: 200px 200px;
	}
        table{
    border-collapse:collapse;
    width:100%;
    color:#d96459;
    font-family:monospace;
    font-size:25px;
    text-align:left;
        }
    th{
    background-color:#d96459;
    color:white;
    }
tr:nth-child(even){background-color:#f2f2f2}
     </style>   
</head>
<body>
    <table>
        <tr>
        <th>Username</th>
        <th>Party</th>
        <th>DishName</th>
        <th>MobileNo</th>
        <th>Quantity</th>
        <th>Address</th>
        </tr>
        <?php
$conn=mysqli_connect("localhost","root","","abc");
if($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}
$sql1="SELECT Username,Party,DishName,MobileNo,Quantity,Address from delivery";
$result1=$conn->query($sql1);
if($result1->num_rows > 0){
    while($row=$result1->fetch_assoc()){
    echo "<tr><td>".$row["Username"]."</td><td>".$row["Party"]."</td><td>".$row["DishName"]."</td><td>".$row["MobileNo"]."</td><td>".$row["Quantity"]."</td><td>".$row["Address"]."</td></tr>";
    }
echo "</table>";
}
else{
    echo "0 result";
}
$conn->close();
?>
    </table>
</body>
</html>