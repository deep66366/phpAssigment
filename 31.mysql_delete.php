<?php
$conn = mysqli_connect("localhost", "root", "", "Deepak");
if (!$conn) {
    die("Coudn't connect to server");
} else {
    echo "Connected successfully<br>";
}
$q="DELETE FROM emp WHERE emp_id=11";
$res = mysqli_query($conn,$q);
echo "<br>record Deleted Successfully";
mysqli_close($conn);
?>