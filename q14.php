<?php
ob_start();
include('ass.php');
?>

<?php
include('connection.php');
// $conn = new mysqli("localhost", "root", "", "school");
// $create_tbl = "create table student(id int primary key auto_increment,
// name varchar(50),
// email varchar(30),
// mobile varchar(10),
// address varchar(30),
// pincode varchar(10),
// gender varchar(6),
// country varchar(20),
// hobbie varchar(30),
// profile_picture varchar(200))";
// $conn->query($create_tbl);
?>


<?php
if (isset($_POST['upload'])) {


    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $hobbies = implode(",", $_POST['hobbies']);
    $hobbie = explode(",", $hobbies);

    $image = "image/" . $_FILES['image']['name'];
    if ($_FILES['image']['size'] <= 5000000) {
        move_uploaded_file($_FILES['image']['tmp_name'], "image/" . $_FILES['image']['name']);
    } else {
        echo "file must be 5 MB";
    }
}
?>

<div class="container bg-dark text-white w-50 p-2">
    <form method="POST" enctype="multipart/form-data">
        <h1 class="border-bottom">Student Information</h1>
        <div class="row p-1">
            <div class="col-3">Name</div>
            <div class="col-9"><input type="text" onkeypress="return(event.charCode>=65 && event.charCode<=90)|| (event.charCode>=97 && event.charCode<=122)" value="<?php echo @$name; ?>" name="name" placeholder="Enter your name" class="form-control" required /> </div>
        </div>
        <div class="row p-1">
            <div class="col-3">Mobile</div>
            <div class="col-9"><input type="text" onkeypress="return event.charCode>=48 && event.charCode<=57" value="<?php echo @$mobile; ?>" maxlength="10" mixlength="10" name="mobile" class="form-control" placeholder="Enter your mobile" required /> </div>
        </div>
        <div class="row p-1">
            <div class="col-3">email</div>
            <div class="col-9"><input type="email" value="<?php echo @$email; ?>" name="email" placeholder="Enter your email" class="form-control" required /> </div>
        </div>
        <div class="row p-1">
            <div class="col-3">pincode</div>
            <div class="col-9"><input type="text" value="<?php echo @$pincode; ?>" maxlength="6" mixlength="6" name="pincode" class="form-control" placeholder="Enter your name" required /> </div>
        </div>
        <div class="row p-1">
            <div class="col-3">Gender</div>
            <div class="col-9"><input type="radio" name="gender" value="male" <?php if (@$gender == 'male') echo 'checked'; ?> class="form-input-check" />Male
                <input type="radio" name="gender" value="female" <?php if (@$gender == 'female') echo 'checked'; ?> class="form-input-check" />Female
            </div>
        </div>
        <div class="row p-1">
            <div class="col-3">Hobbies</div>
            <div class="col-9"><input type="checkbox" name="hobbies[]" value="singing"> Singing
                <input type="checkbox" name="hobbies[]" value="dancing"> Dancing
                <input type="checkbox" name="hobbies[]" value="reading"> Reading
            </div>
        </div>
        <div class="row p-1">
            <div class="col-3">Address</div>
            <div class="col-9"><textarea name="address" row="5" cols="5" placeholder="Enter your Address" class="form-control"><?php echo @$address; ?></textarea> </div>
        </div>
        <div class="row p-1">
            <div class="col-3">country</div>
            <div class="col-9"><select name="country">
                    <option vlaue="India" <?php if (@$country == 'India') echo 'checked'; ?>select>India</option>
                    <option vlaue="Russia" <?php if (@$country == 'Russia') echo 'checked'; ?>>Russia</option>
                    <option vlaue="Pakistan" <?php if (@$country == 'Pakistan') echo 'checked'; ?>>Pakistan</option>
                    <option vlaue="China" <?php if (@$country == 'China') echo 'checked'; ?>>China</option>
                </select> </div>
        </div>


        <div class="row p-2">
            <div class="col-3">Profile Picture</div>
            <div class="col-4"><input type="file" name="image" accept=".jpeg,.png,.jpg" class='form-control'><input type="hidden" name="hidden" value="<?php echo $image; ?>"></div>
            <div class="col-3"><input type="submit" name="upload" class="btn bg-warning text-white" Value="Upload"></div>
            <div class="col-2"><img src="<?php echo $image; ?>" height="100px" width="100px" class="img-thumbnail" /></div>
        </div>

        <div class="row p-2">

            <div class="col-12 text-center"><button type="submit" name="btn" class="btn bg-warning text-white m-2">Add</button><a href="q14_show.php" class="btn bg-danger text-dark ">SHOW</a></div>
        </div>


    </form>
</div>

<?php

if (isset($_POST['btn'])) {

    $name = $_POST['name'];
    $pincode = $_POST['pincode'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    // $hobbie = implode(",", $_POST['hobbies']);
    $image = $_POST['hidden'];
    $hobbie = 'hii';
    $insert = "insert into result (name,email,mobile,address,pincode,gender, country,hobbie,profile_picture) values('$name','$email','$mobile','$address','$pincode','$gender','$country','$hobbie','$image')";
    $result = $conn->query($insert);
    if ($result) {
        echo "<script> alert('inserted')</script>";
        echo "<script>windows.location.href='q14_dummy.php'</script>";
    } else {
        echo $conn->error;
    }
}

?>
<?php
include('footer.php');
?>