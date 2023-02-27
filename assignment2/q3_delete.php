<?php
include('ass.php');
?>
<?php

include('connection.php');
?>
<?php
$id = $_REQUEST['id'];
$delete = "delete from stud_tbl_1 where stud_id=$id";
$result = $conn->query($delete);

if ($result) {
    header("location:q3_show.php");
}
?>
<?php
include('footer.php');
?>