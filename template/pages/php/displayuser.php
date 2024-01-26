<?php
include("dbconnect.php");
?>
<?php
$sql="SELECT * FROM userdetails";
$result=mysqli_query($conn,$sql);
echo mysqli_num_rows($result);
if (mysqli_num_rows($result)>0){
    while($rows=mysqli_fetch_assoc($result))
    {
        echo "<hr>UserName" . $rows["username"]. "&nbsp;&nbsp;&nbsp;Name:" . $rows["name"]. "&nbsp;&nbsp;&nbsp;Password:" . $rows["password"]. "&nbsp;&nbsp;&nbsp;Email ID:" . $rows["email id"]. "&nbsp;&nbsp;&nbsp;Mobile No.:" . $rows["contact"]. "&nbsp;&nbsp;&nbsp;Date of Birth" . $rows["date of birth"].;
    }
}
else {
    echo "0 results";
}
mysqli_close($conn);