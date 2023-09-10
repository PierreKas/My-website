<?php 
/*$servername="sql202.infinityfree.com";
$username="if0_34978022";
$password="DBLNCiRoF17jLIO";
$database_name="if0_34978022_kasanani";
*/
$severname="localhost";
$username="root";
$password="";
$database_name="portfolio";

$conn=mysqli_connect($severname,$username,$password,$database_name);
require_once 'C:\inst_xampp\htdocs\portfolio\connect.php';
$query="select * from contact";
$result= mysqli_query($conn,$query);
//$result= display_info();
//$result= admin_access();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT INFO</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body bgcolor="lightgray">
    <header>
        <h2>CONTACT INFO</h2>
    </header>
    <center>
    <table>
        <tr>
            <td>First Name</td>
            <td>Email</td>
           
            <td>Phone</td>
            <td>Message</td>
           
        </tr>
        <tr>
            
            <?php
           
            while($row= mysqli_fetch_assoc($result)){
                ?>
                <td><?php echo $row['First_Name']?></td> 
                <td><?php echo $row['Email']?></td>
                <td><?php echo $row['Phone']?></td>
                <td><?php echo $row['Message']?></td>
                
              
        </tr>
        <?php
            } 
            
        ?>
    </table>
    </center>
</body>
</html>