<?php
$servername="localhost";
$username="root";
$password="";
$emailid="";
$dateofbirth="";
$dbname="soch";
$conn=mysqli_connect($servername,$username,$password,$dbname,"3310");
if (!$conn){
    die("connection failed:" .mysqli_connect_error());
}
?>