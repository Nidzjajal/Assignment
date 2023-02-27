<?php
include('connection.php');
include('ass.php');
?>
<?php
if (isset($_POST['add'])) {

    $image = "image/" . $_FILES['image']['name'];
    $img = explode(".", $image);

    $file = strtolower(pathinfo($image, PATHINFO_EXTENSION));

    if ($file == 'jpg' || $file == 'png' || $file == 'jpeg') {

        if ($_FILES['image']['size'] <= 1000000) {

            move_uploaded_file($_FILES['image']['tmp_name'], "image/" . $_FILES['image']['name']);
        } else {
            echo "<div class='alert alert-danger'><strong>Image must be less than 1 MB</strong></div>";
        }
    } else {
        echo "<div class='alert alert-danger'><strong>Only JPG , PNG , JPEG</strong></div>";
    }
}
?>
<div class="container bg-dark text-white w-50">
    <form method="POST" enctype="multipart/form-data">
        <h1 class="border-bottom">UPLODE PROFILE</h1>
        <div class="row p-1">
            <div class="col-3">Profile Picture:- </div>
            <div class="col-9"><input type="file" accept=".jpg,.jpeg,.png" name="image" class="form-control" /></div>
        </div>
        <div class="row p-1">
            <div class="col-6 text-center"><input type="submit" name="add" value="UPLOAD" class="btn bg-warning text-white" /></div>
            <div class="col-6"><img src="<?php echo @$image; ?>" height="200px" width="200px" class="img-thumbnail rounded-circle" /></div>


        </div>
    </form>
</div>
<?php
include('footer.php');
?>