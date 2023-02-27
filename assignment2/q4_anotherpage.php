<?php
ob_start();

include('ass.php');
?>
<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>
<?php
session_start();

echo "<center><img class='img-thumbnail' height='500px' width='500px' src='$_SESSION[file]'/></center>";
?>
<?php
include('footer.php');
?>