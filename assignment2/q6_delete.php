<?php

include('connection.php');
include('ass.php');
?>
<?php
$id = $_REQUEST['id'];
$delete = "delete from bookmaster where book_id=$id";
$result = $conn->query($delete);

if ($result) {
    header("location:q6_show.php");
}
?>
<?php
include('footer.php');
?>