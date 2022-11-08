<?php
$conn = mysqli_connect("localhost", "root", "", "Deepak");
if (!$conn) {
    die("Coudn't connect to server");
} else {
    echo "Connected successfully<br>";
}
$q = "UPDATE emp SET sal=5000 WHERE emp_id=11";
mysqli_query($conn,$q);
echo "<br>record updated Successfully";
mysqli_close($conn);
?>