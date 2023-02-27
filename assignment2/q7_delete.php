<?Php
include('connection.php');
include('ass.php');
session_start();
if ($_SESSION['name'] == "") {
    header('location:q7_login.php');
} else {
    $id = $_REQUEST['id'];
    $delete = "delete from user where id=$id";
    $result = $conn->query($delete);

    header('location:q7_show.php');
}
?>
<?php
include('footer.php');
?>