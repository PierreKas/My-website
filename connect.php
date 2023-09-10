<?php
//print_r($_POST);
//exit;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $First_Name= $_POST['First_Name'];
    $Email= $_POST['Email'];
    $Phone= $_POST['Phone'];
    $Message= $_POST['Message'];

    $severname="localhost";
    $username="root";
    $password="";
    $database_name="portfolio";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if($conn){
   // echo "Successfully connected";
    $sql="insert into contact(First_Name,Email,Phone,Message) values('$First_Name','$Email','$Phone','$Message')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully";
    }
        else{
            echo "Insertion failed: " . mysqli_error($conn);
        }
    }

     else{
    die(mysqli_error($conn));
    echo "connection failed";
    }
    mysqli_close($conn);
}
?>