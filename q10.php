<!-- ?php
include('../connection/connection.php');

?> -->
<?php
include('ass.php');
?>

<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>

</html>
<?php

if (isset($_POST['btn'])) {
    if ($_POST['calc'] == "add") {
        echo "add";
        $s = $_POST['txt1'] + $_POST['txt2'];
    } else if ($_POST['calc'] == "sub") {
        $s = $_POST['txt1'] - $_POST['txt2'];
    } else if ($_POST['calc'] == "mul") {
        $s = $_POST['txt1'] * $_POST['txt2'];
    }
}

?>
<div class="container bg-dark text-white w-50 mt-4 ">
    <form method="POST">
        <h1 class="border-bottom">Arithmatic Calculation</h1>
        <div class="row p-1">
            <div class="col-12"><input type="text" name="txt1" onkeypress='return(event.charCode>=48 && event.charCode<=57)' placeholder="Enter Decimal Value in Text Box..." class="form-control" required /></div>
        </div>
        <div class="row p-1">
            <div class="col-12"><input type="text" name="txt2" onkeypress='return(event.charCode>=48 && event.charCode<=57)' placeholder="Enter Decimal Value in Text Box..." class="form-control" required /></div>
        </div>
        <div class="row p-1">
            <div class="col-12"><input type="radio" name="calc" value="add" class="form-check-input" /><b>Addition</b>
                <input type="radio" name="calc" value="sub" class="form-check-input" /><b>Substraction</b>
                <input type="radio" name="calc" value="mul" class="form-check-input" /><b>Multiplication</b>

            </div>
        </div>
        <div class="row p-1">
            <div class="col-12 text-center"> <input type="submit" name="btn" class="btn bg-info" value="Submit"></div>
        </div>
        <div class="row p-1">
            <div class="col-12"><input type="text" value="<?php echo @$s; ?>" placeholder="Answer is ..." class="form-control" /></div>
        </div>
    </form>
</div>
<?php
include('footer.php');
?>