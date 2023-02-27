<!-- <php
$conn = new mysqli("localhost", "root", "");
$create_db = "create database School";
$conn->query($create_db);

//$conn = new mysqli("localhost", "root", "", "School");
$conn = new mysqli("localhost", "root", "", "school");
if ($create_tbl) {
    return;
} else {
    $create_tbl = "create table stud_tbl_1(stud_id int primary key auto_increment,
                                                        stud_Name varchar(50),
                                                        stud_Email varchar(30),
                                                        stud_DOB date,
                                                        stud_Gender varchar(6),
                                                        stud_tot_marks int(10))";
    $conn->query($create_tbl);
}

?> -->
<?php
$conn = new mysqli("localhost", "root", "", "kbpccs");
if (!$conn) {
    die('not connected');
}
?>

<head>
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>