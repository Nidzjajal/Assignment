<?php
include('connection.php');
include('ass.php');
// $conn = new mysqli("localhost", "root", "", "HOST");
// $create_tbl = "create table bookmaster(book_id bigint primary key auto_increment,
//                                                     book_name varchar(50),
//                                                     auther_name varchar(30),
//                                                     price int(20),
//                                                     quantity int(30),
//                                                     net_amount int(11)
//                                                     )";
// $conn->query($create_tbl);
?>
<?php
$select = "select * from bookmaster";
$result = $conn->query($select);

// echo"<div class='container'>";
// echo"<div class='row p-1'>";
//     echo"<div class='col-12'><a href='stu.php' class='btn bg-dark text-white'>ADD</a></div>";
// echo"</div>";
// echo"</div>";

echo "<div class='container bg-info text-white '>";
echo "<div class='row p-1'>";
echo "<table class='table'>";
echo "<tr class='bg-primary'><th>id</th><th>Name</th><th>Auther name</th><th>price</th><th>quantity</th><th>Net amount</th><th>Action</th></tr>";
foreach ($result as $r) {
    echo "<tr>";
    echo "<td>$r[book_id]</td>";
    echo "<td>$r[book_name]</td>";
    echo "<td>$r[auther_name]</td>";
    echo "<td>$r[price]</td>";
    echo "<td>$r[quantity]</td>";
    echo "<td>$r[net_amount]</td>";
    echo "<td><a href='q6_delete.php?id=$r[book_id]' class='btn bg-danger text-dark m-2'>delete</a><a href='q6_update.php?id=$r[book_id]' class='btn bg-warning text-dark'>Edit</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";
?>
<?php
include('footer.php');
?>