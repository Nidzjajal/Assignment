<?php


include('connection.php');
include('ass.php');
?>
<?php
if (isset($_POST['upload'])) {


    $name = $_POST['name'];
    $password = $_POST['password'];
    $adress = $_POST['adress'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $image = "image/" . $_FILES['image']['name'];
    if ($_FILES['image']['size'] <= 5000000) {
        move_uploaded_file($_FILES['image']['tmp_name'], "image/" . $_FILES['image']['name']);
    } else {
        echo "file must be 5 MB";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <div class="container bg-dark text-white mt-4 w-50">
        <h1 class="border-bottom">Registration Form</h1>
        <div class="row p-1">
            <div class="col-3">Name</div>
            <div class="col-9"><input type="text" value="<?PHP echo @$name; ?>" onkeypress='return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)' name="name" placeholder="Enter your name" class="form-control" required /></div>
        </div>
        <div class="row p-2">
            <div class="col-3">Password</div>
            <div class="col-9"><Input type="password" required name="password" class="form-control" minlength="8" maxlength="16" placeholder="Enter Your Password" value="<?php echo @$password; ?>"></div>
        </div>

        <div class="row p-1">
            <div class="col-3">Address</div>
            <div class="col-9"><textarea name="adress" placeholder="Enter your Address" class="form-control" rows="3" cols="12" required><?PHP echo @$adress; ?></textarea>
            </div>
        </div>
        <div class="row p-1">
            <div class="col-3">Email</div>
            <div class="col-9"><input type="email" name="email" value="<?PHP echo @$email; ?>" placeholder="Enter your email" class="form-control" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3"> Gender</div>
            <div class="col-9"><input type="radio" class="form-check-input" value="Male" <?PHP if (@$gender == 'Male') echo "checked"; ?> name="gender" />Male
                <input type="radio" class="form-check-input" name="gender" value="Female" <?PHP if (@$gender == 'Female') echo "checked"; ?> />Female
            </div>
        </div>
        <div class="row p-1">
            <div class="col-3">Contact Number </div>
            <div class="col-9"><input type="text" value="<?PHP echo @$contact; ?>" placeholder="Enter your Mobile Number.." minlength="10" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode <=57" name="contact" placeholder="Enter Mobile number" class="form-control" required /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Photograph</div>
            <div class="col-4"><input type="file" name="image" class='form-control'><input type="hidden" name="hidden" value="<?php echo $image; ?>"></div>
            <div class="col-3"><input type="submit" name="upload" class="btn bg-warning text-white" Value="Upload"></div>
            <div class="col-2"><img src="<?php echo $image; ?>" height="100px" width="100px" class="img-thumbnail" /></div>
        </div>
        <div class="row p-2">

            <div class="col-12 text-center"><button type="submit" name="btn" class="btn bg-warning m-3 p-3 text-white"><strong>ADD</strong></button> <a href='q7_login.php' class='btn text-white bg-danger m-3 p-3'><strong>LOGIN</strong></a></div>
        </div>

    </div>
</form>


<?php

if (isset($_POST['btn'])) {
    // $conn = new mysqli("localhost", "root", "", "HOST");
    // $create_tbl = "create table user(id int primary key auto_increment,
    //                                                     name varchar(50),
    //                                                     password varchar(20),
    //                                                     address varchar(30),
    //                                                     email varchar(20),
    //                                                     gender varchar(6),
    //                                                     contact varchar(10),
    //                                                     photograph varchar(200),
    //                                                     LogInDate varchar(10)
    //                                                     )";
    // $conn->query($create_tbl);

    $name = $_POST['name'];
    $password = $_POST['password'];
    $address = $_POST['adress'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];


    $image = $_POST['hidden'];
    $insert = "insert into user (name ,password,address, email,gender, contact, photograph) values('$name','$password','$address','$email','$gender','$contact', '$image')";
    $result = $conn->query($insert);
    if ($result) {
        echo "<script> alert('inserted')</script>";
        echo "<script>window.location.href='q7_dummy.php'</script>";
    } else {
        echo $conn->error;
    }
}

?>
<?php
include('footer.php');
?>