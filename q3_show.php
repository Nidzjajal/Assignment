<?php
include('connection.php');
include('ass.php');
?>
<div class="container">
    <?php
    $select = "select * from stud_tbl_1";
    $result = $conn->query($select);


    echo "<div class='container '>";
    echo "<div class='row p-1'>";
    echo "<div class='col-12'><a href='q3.php' class='btn bg-dark text-white'>ADD</a></div>";
    echo "</div>";
    echo "</div>";

    echo "<div class='container bg-info text-white '>";
    echo "<div class='row p-1'>";
    echo "<table class='table table-striped table-border'>";
    echo "<tr class='bg-primary'><th>id</th><th>Name</th><th>Email</th><th>DOB</th><th>Gender</th><th>Total marks</th><th>Action</th></tr>";


    // $dob = date('d/m/Y', strtotime($date));



    foreach ($result as $r) {
        echo "<tr>";
        echo "<td>$r[stud_id]</td>";
        echo "<td>$r[stud_Name]</td>";
        echo "<td>$r[stud_Email]</td>";
        echo "<td> $r[stud_DOB]</td>";
        echo "<td>$r[stud_Gender]</td>";
        echo "<td>$r[stud_tot_marks]</td>";
        echo "<td><a href='q3_delete.php?id=$r[stud_id]' class='btn bg-danger text-dark m-2'>delete</a><a href='q3_update.php?id=$r[stud_id]' class='btn bg-warning text-dark'>Edit</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    echo "</div>";
    ?>
</div>
<?php
include('footer.php');
?>