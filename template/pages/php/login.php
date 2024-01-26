<?php
include("dbconnect.php");
?>
<?php
$un=$_POST['t1'];
$pd=$_POST['t2'];
$c=0;
$sql="SELECT * FROM userdetails";
$result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        if($row["username"]==$un && $row["password"]==$pd)
        $c=1;
        header("location: http://localhost/sochv2/template/pages/main.html");
    }
    if($c==0){
        echo "Incorrect username or Password";
    }
    mysqli_close($conn);
    ?>