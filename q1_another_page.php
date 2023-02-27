<?php
session_start();
include('ass.php');

?>
<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css" />

</head>

</html>
<?php

echo "<table class='table container w-50 mt-4  text-white bg-dark rounded-left'";
echo "<tr><th colspan='2' class='border-white text-center'><h1><i>INFORMATION<i><h1></th></tr>";
echo "<tr><th>username</th><td>" . $_SESSION['username'] . "</td></tr>";

echo "<tr><th>gender</th><td>" . $_SESSION['gender'] . "</td></tr>";

echo "<tr><th>course</th><td>" . $_SESSION['course'] . "</td></tr>";

echo "<tr><th>city</th><td>" . $_SESSION['city'] . "</td></tr>";

echo "<tr><th>phone</th><td>" . $_SESSION['mobile'] . "</td></tr>";


echo "</table>";
session_destroy();
?>
<?php
include('footer.php');
?>