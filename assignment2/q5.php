<?php
include("connection.php");
include('ass.php');
// $conn = new mysqli("localhost", "root", "", "school");
// $create_tbl = "create table register(id int primary key auto_increment,
//                                                         name varchar(50),
//                                                         email varchar(30),
//                                                         contact varchar(10)
//                                                         )";
// $conn->query($create_tbl);
?>
<form method="POST">
    <div class="container bg-dark text-white mt-4 w-50">
        <h1 class="border-bottom">Registration Form</h1>
        <div class="row p-1">
            <div class="col-3">Name</div>
            <div class="col-9"><input type="text" onkeypress='return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)' name="name" placeholder="Enter your name" class="form-control" required /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Email</div>
            <div class="col-9"><input type="email" name="email" placeholder="Enter your email" class="form-control" required /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Contact Number </div>
            <div class="col-9"><input type="text" minlength="10" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode <=57" name="contact" placeholder="Enter Mobile number" class="form-control" required /></div>
        </div>

        <div class="row p-1 text-center">
            <div class="col-12"><input type="submit" name="submit" value="registration" class="btn bg-danger text-dark font-weight-bold " />
                <a href="q5_show.php" class="btn bg-warning text-dark"> Show</a>
            </div>
        </div>
    </div>
</form>
<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $insert = "insert into register (name , email, contact) values('$name','$email','$contact')";
    $result = $conn->query($insert);
    if ($result) {
        echo "<script> alert('inserted')</script>";
        echo "<script>window.location.href='q5_dummy.php'</script>";
    } else
        echo $conn->error;
}

?>
<?php
include('footer.php');
?>