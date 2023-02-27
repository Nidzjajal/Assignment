<?php
include('ass.php');
?>

<?php
include('connection.php');
?>
<form method="POST">
    <div class="container bg-dark text-white mt-4 w-50">
        <h1 class="border-bottom">Registration Form</h1>
        <div class="row p-1">
            <div class="col-3">Name</div>
            <div class="col-9"><input type="text" onkeypress='return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)' name="name" placeholder="Enter your name" class="form-control" required /></div>
        </div>
        <div class="row p-2">
            <div class="col-3">Password</div>
            <div class="col-9"><Input type="password" required name="password" class="form-control" minlength="10" maxlength="10" placeholder="Enter Your Password"></div>
        </div>
        <div class='row p-2'>
            <div class='col-12 text-center'>
                <button class='btn bg-warning text-dark' name='btn' type='submit'>submit</button>
            </div>

        </div>
    </div>
</form>

<?php
if (isset($_POST['btn'])) {


    $name = $_POST['name'];
    $password = $_POST['password'];
    $insert = "insert into login (username , password) values ('$name','$password')";
    $result = $conn->query($insert);
    if ($result) {
        echo "<script>alert(inserted..)</script>";
        header('location:q12.php');
    } else {
        echo $conn->error;
    }
}
?>
<?php
include('footer.php');
?>