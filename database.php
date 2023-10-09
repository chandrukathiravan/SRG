<?php
error_reporting(1);
$name=$_POST['n'];
$rno=$_POST['r'];
$con=new mysqli('localhost','root','','cseb1');
if(isset($_POST['add']))
{
$sql="INSERT INTO stud(name,rno) value ('$name','$rno')";
$con->query($sql);
echo "inserted";
}
else if(isset($_POST['del']))
{
$sql="DELETE FROM stud WHERE rno='$rno' && name='$name' ";
$con->query($sql);
echo "Deleted";
}
else if(isset($_POST['up']))
{
$sql="UPDATE stud SET name = '$name' WHERE rno = '$rno' ";
$con->query($sql);
echo "Updated";
}
else if(isset($_POST['v']))
{
$sql = "SELECT * FROM stud";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Register number: " . $row["rno"]."<br>  Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
}
?>
