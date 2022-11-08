<?php
$conn = mysqli_connect("localhost", "root", "", "Deepak");
if (!$conn) {
    die("Coudn't connect to server");
} else {
    echo "Connected successfully<br>";
}
$q = "Create table emp(emp_name varchar(20),
        emp_id int primary key,
        hiredate date,
        dept_no int(5),
        sal int(10),
        gender varchar(20),
        mobile_no int(10))";
mysqli_query($conn, $q);
echo "<br> table created";
mysqli_close($conn);
?>