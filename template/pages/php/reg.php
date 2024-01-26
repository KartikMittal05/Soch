<?php
$un=$_POST['t1'];
$nm=$_POST['t2'];
$pd=$_POST['t3'];
$em=$_POST['t4'];
$cd=$_POST['t5'];
$db=$_POST['t6'];
$servername="localhost";//kiss server pe krre ho
$username="root"; //by default name of my sql
$password="";// password if given to ypur sql
$name="";
$mobileno="";
$emailid="";
$dateofbirth="";
$dbname="soch"; //server pe database name jo create kiya tha
$conn=mysqli_connect($servername,$username,$password,$dbname,"3310");       //function for connecting my sql and php     //function for connecting my sql and php


$sql="insert into userdetails values('$un','$nm','$pd','$em','$cd','$db')";               //querry lgayi where student is table name
$result=mysqli_query($conn,$sql);
if($result){                                //error handling
    header("location:http://localhost/sochv2/template/");
}

?>