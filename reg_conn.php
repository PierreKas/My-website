<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$ID=$_POST['ID'];
$name=$_POST['name'];
$department=$_POST['department'];
$stu_password=$_POST['stu_password'];

$servername="localhost";
$username="root";
$password="";
$database_name="myexample";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if($conn){
    $sql="insert into registration(ID,name,department,stu_password) values('$ID','$name','$department','$stu_password') ";
    $result=mysqli_query($conn,$sql);
    echo"<script>alert('Inserted')</script>";

}
}
?>