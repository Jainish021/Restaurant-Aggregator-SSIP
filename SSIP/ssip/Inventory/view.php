<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Table with database</title>
    <style type="text/css">
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
        <th>Dish_Name</th>
        <th>Total</th>
        <th>Price</th>
        </tr>
        <?php
$conn=mysqli_connect("localhost","root","","abc");
if($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}
$sql="SELECT Dish_Name,Total,Price from inventory";
$result=$conn->query($sql);
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["Dish_Name"]."</td><td>".$row["Total"]."</td><td>".$row["Price"]."</td></tr>";
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