<?php
include('connection.php');
include('ass.php');
?>
<?php
$select = "select * from register";
$result = $conn->query($select);

echo "<div class='container'>";
echo "<div class='row p-1'>";
echo "<div class='col-12'><a href='q5.php' class='btn bg-dark text-white'>ADD</a></div>";
echo "</div>";
echo "</div>";

echo "<div class='container bg-primary text-white '>";
echo "<div class='row p-1'>";
echo "<table class='table'>";
echo "<tr class='bg-info'><th>id</th><th>Name</th><th>Email</th><th>contact</th></tr>";
foreach ($result as $r) {
    echo "<tr>";
    echo "<td>$r[id]</td>";
    echo "<td>$r[name]</td>";
    echo "<td>$r[email]</td>";
    echo "<td>$r[contact]</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";
?>
<?php
include('footer.php');
?>