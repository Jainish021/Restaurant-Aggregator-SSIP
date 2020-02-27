<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssstyle3.css" type="text/css">
    <title>Stats</title>
  </head>
  <body style="padding:20px ; background-image: url('bg2.jpg'); background-size: cover;";>

      <div id="menu-nav">
        <div id="navigation-bar">
          <ul>
           <li><a href="home.html"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="inventory.html"><i class="fas fa-warehouse" ></i><span>Inventory</span></a></li>
                <li><a href="stats.php"><i class="fas fa-chart-line"></i><span>Stats</span></a></li>
                <li><a href="about.html"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="contact.html"><i class="fa fa-book"></i><span>Contact</span></a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
          </ul>
        </div>
        </div>
        <div class="box" align="center">
          <div class="about">
            <?php
              $conn=mysqli_connect("localhost","root","","abc");
              $query="select * from `order`";
              $result=mysqli_query($conn,$query);

              echo"<table border='1px' style='width:550px; text-align:center;font-size: 16px; float:left;margin-top:20px; margin-left:25px; line-height:40px;'>
              <tr>
                  <th colspan='6'><h2> Order Details </h2></th>
                  
              </tr>
              <tr>
              
                <th> Username </th>
                <th> Party </th>
                <th> DishName </th>
                <th> MobileNo </th>
                <th> Quantity </th>
                <th> Address </th>
                
              </tr>";
                while($rows=mysqli_fetch_assoc($result)) 
                {
                    echo"<tr>";
                    echo"<td text='center'>".$rows['Username']."</td>"; 
                    echo"<td>".$rows['Party']. "</td>";   
                    echo"<td>".$rows['DishName']."</td>";   
                    echo"<td>".$rows['MobileNo']."</td>";   
                    echo"<td>".$rows['Quantity']."</td>";
                    echo"<td>".$rows['Address']."</td>";
                    echo "</tr>";
                  }
                echo"</table>";

                echo"<table border='1px' style='width:400px; text-align:center;font-size: 16px; margin-top:20px;float:right; margin-right:25px; line-height:40px;'>
                <tr>
                    <th colspan='2'><h2> Total Quantity </h2></th>
                </tr>
                <tr>
                <th> DishName </th>
                <th> No of Dishes </th>
               </tr>"; 
                $query="select DishName,SUM(Quantity) from `order` WHERE DishName='Dish1'";
                $result=mysqli_query($conn,$query);

                while($rows=mysqli_fetch_assoc($result))
                { 
                    echo"<tr>";
                    echo"<td>".$rows['DishName']."</td>";
                    echo"<td>".$rows['SUM(Quantity)']."</td>";
                    echo"</tr>";
                }
                $query="select DishName,SUM(Quantity) from `order` WHERE DishName='Dish2'";
                $result=mysqli_query($conn,$query);
  
                while($rows=mysqli_fetch_assoc($result))
                {
                    echo"<tr>";
                   echo"<td>".$rows['DishName']."</td>";
                   echo"<td>".$rows['SUM(Quantity)']."</td>";
                   echo"</tr>";
                }
                $query="select DishName,SUM(Quantity) from `order` WHERE DishName='Dish3'";
                $result=mysqli_query($conn,$query);
  
                while($rows=mysqli_fetch_assoc($result))
                { 
                    echo"<tr>";
                   echo"<td>".$rows['DishName']."</td>";
                   echo"<td>".$rows['SUM(Quantity)']."</td>";
                   echo"</tr>";
                }
                $query="select DishName,SUM(Quantity) from `order` WHERE DishName='Dish4'";
                $result=mysqli_query($conn,$query);
              
                while($rows=mysqli_fetch_assoc($result))
                { 
                    echo"<tr>";
                    echo"<td>".$rows['DishName']."</td>";
                    echo"<td>".$rows['SUM(Quantity)']."</td>";   
                    echo"</tr>";
                }

                  
                echo"</table>";
                ?>

          </div>
        </div>
        
        
        
             
        </div> 
  </body>
</html>