<?php
include('connection.php');
include('ass.php');
?>
<?php
$id = $_REQUEST['id'];
$select = "select * from stud_tbl_1 where stud_id=$id";
$result = $conn->query($select);
foreach ($result as $r) {
    $id = $r['stud_id'];
    $name = $r['stud_Name'];
    $email = $r['stud_Email'];
    $dob = $r['stud_DOB'];
    $gender = $r['stud_Gender'];
    $mark = $r['stud_tot_marks'];
}

?>
<div class="container  bg-info text-dark mt-4 w-50">

    <form method="POST">

        <div class=row>
            <div class="col-12 text-dark bg-primary font-weight-bold ml-4 mt-2 p-2"> update record</div>
        </div>
        <div class="row p-1">
            <div class="col-3">Name</div>
            <div class="col-9"> <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Email</div>
            <div class="col-9"> <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" /></div>
        </div>
        <div class="row p-1 ">
            <div class="col-3">Date of Birth</div>
            <div class="col-9"> <input type="date" name="dob" value="<?php echo date('Y-m-d', strtotime($dob)); ?>" class="form-control" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Gender</div>
            <div class="col-9"> <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') echo 'checked'; ?> />Male
                <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') echo 'checked'; ?> />Female
            </div>
        </div>
        <div class="row p-1">
            <div class="col-3">Total Marks </div>
            <div class="col-9"> <input type="numeric" name="mark" value="<?php echo $mark; ?>" class="form-control" /></div>
        </div>
        <div class="row p-1">
            <div class="col-12">
                <input type="submit" name="update" value="update" class="btn bg-warning text-dark p-2 " />
            </div>
        </div>
    </form>
</div>
<?php
if (isset($_POST['update'])) {
    $name   =  $_POST['name'];
    $email  =  $_POST['email'];
    $dob   =  $_POST['dob'];

    $gender = $_POST['gender'];
    $mark = $_POST['mark'];
    $update = "update stud_tbl_1 set stud_Name='$name' , stud_Email='$email' ,stud_DOB='$dob' ,stud_Gender='$gender', stud_tot_marks='$mark' where stud_id=$id";
    $result = $conn->query($update);

    if ($result) {
        //  print_r($result);
        //  echo"<br>". $roll;
        header("location:q3_show.php");
    } else {
        $conn->error;
    }
}
?>
<?php
include('footer.php');
?>