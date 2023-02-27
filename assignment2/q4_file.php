<?php
ob_start();

include('ass.php');
?>
<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>

<body>
    <div class="container bg-dark text-white w-50 mt-4 p-2 ">
        <h1 class="border-bottom">File uplode</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="row p-1">
                <div class="col-3">Profile Picture</div>
                <div class="col-9"><input type="file" name="image" class="form-control" required accept=".jpg,.jpeg,.png" /></div>
            </div>
            <div class="row p-1">

                <div class="col-12 text-center"><input type="submit" name="upload" class="btn bg-dark text-white" value="upload" />
                    <input type="reset" name="cancel" class="btn bg-secondary text-white" value="cancel" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['upload'])) {

    session_start();

    $_SESSION['file'] = "image/" . $_FILES['image']['name'];
    $img = explode(".", $_SESSION['file']);

    $file = strtolower(pathinfo($_SESSION['file'], PATHINFO_EXTENSION));

    if ($file == 'jpg' || $file == 'png' || $file == 'jpeg') {

        if ($_FILES['image']['size'] <= 1000000) {
            echo "ll";
            move_uploaded_file($_FILES['image']['tmp_name'], "image/" . $_FILES['image']['name']);
        } else {
            echo "<div class='alert alert-danger'><strong>Image must be less than 1 MB</strong></div>";
        }
    } else {
        echo "<div class='alert alert-danger'><strong>Only JPG , PNG , JPEG</strong></div>";
    }
    // move_uploaded_file($_FILES['image']['tmp_name'], "image/" . $_FILES['image']['name']);
    header("location:q4_anotherpage.php");
}

?>
<?php
include('footer.php');
?>