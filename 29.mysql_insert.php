<?php
$conn = mysqli_connect("localhost", "root", "", "Deepak");
if (!$conn) {
    die("Coudn't connect to server");
} else {
    echo "Connected successfully<br>";
}
$q = "INSERT into emp(emp_name,emp_id,dept_no,sal)
      values('ABC',11,20,10000)";
$res = mysqli_query($conn, $q);
echo "<br>record inserted Successfully";
mysqli_close($conn);
?>