<?php


include('ass.php');
?>
<?php

include('connection.php');
session_start();
if ($_SESSION['name'] == "") {
    header('locatio:q7_login.php');
} else {
    $id = $_REQUEST['roll'];
    $select = "select *from user where id=$id";
    $result = $conn->query($select);

    foreach ($result as $r) {
        $id = $r['id'];
        $adress = $r['address'];
        $contact = $r['contact'];
        $email = $r['email'];
        $gender = $r['gender'];
        $image = $r['photograph'];
    }
}
?>
<?Php
if (isset($_POST['upload'])) {
    $adress = $_POST['adress'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $image = "image/" . $_FILES['image']['name'];
    if ($_FILES['image']['size'] < 500000) {
        move_uploaded_file($_FILES['image']['tmp_name'], "image/" . $_FILES['image']['name']);
    } else {
        echo "file must be 5 MB";
    }
}
?>
<div class="container  bg-primary text-dark mt-4 w-50">

    <form method="POST" enctype="multipart/form-data">
        <div class=row>
            <div class="col-12 text-dark bg-info font-weight-bold"> update record</div>
        </div>
        <div class="row p-1">
            <div class="col-3">Address</div>
            <div class="col-9"><textarea name="adress" placeholder="Enter your Address" class="form-control" rows="3" cols="12" required><?PHP echo @$adress; ?></textarea>
            </div>
        </div>
        <div class="row p-1">
            <div class="col-3">Contact Number </div>
            <div class="col-9"><input type="text" value="<?PHP echo @$contact; ?>" placeholder="Enter your Mobile Number.." minlength="10" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode <=57" name="contact" placeholder="Enter Mobile number" class="form-control" required /></div>
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
            <div class="col-3">Photograph</div>
            <div class="col-4"><input type="file" name="image" class='form-control'><input type="hidden" name="hidden" value="<?php echo $image; ?>"></div>
            <div class="col-3"><input type="submit" name="upload" class="btn bg-warning text-white" Value="Upload"></div>
            <div class="col-2"><img src="<?php echo $image; ?>" height="100px" width="100px" class="img-thumbnail" /></div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="submit" class="btn bg-warning text-dark" name="update" value="update" />
            </div>
        </div>
    </form>
</div>

<?Php
if (isset($_POST['update'])) {
    $adress = $_POST['adress'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $photo = $_POST['hidden'];

    $update = "update user set address='$adress', contact='$contact', email='$email' , gender='$gender',photograph='$photo'where id=$id";
    $result = $conn->query($update);
    if ($result) {
        header('location:q7_show.php');
    } else {
        echo $conn->error;
    }
}
?>
<?php
include('footer.php');
?>