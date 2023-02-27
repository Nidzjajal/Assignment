<!-- <php
include '../connection/connection.php';
?> -->
<?php
include('ass.php');
?>

<div class="container bg-dark text-white w-50">
    <form method="POST">
        <h1 class="border-bottom">Reverse String</h1>
        <div class="row p-1">
            <div class="col-3"> String :-</div>
            <div class="col-9"><input type="text" name="string" onkeypress='return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)' class="form-control" placeholder="Enter your string" required /></div>
        </div>
        <div class="row p-1">
            <div class="col-12 text-center"><input type="submit" name="submit" value="SUBMIT" class="btn bg-warning text-dark p-2" /></div>
        </div>
    </form>
</div>
<?php
if (isset($_POST['submit'])) {
    $str = $_POST['string'];
    $string = strrev($str);
    echo "
            <div class='container bg-primary text-white w-50 p-1'>
                <h1 class='border-bottom'>Reverse string </h1>
                <div class='row p-1 bg-info text-dark w-20 m-2 p-1'>
                    <div class='col-3'>Reverse String is :</div>
                    <div class='col-9'><input type='text' name='name' value='$string' class='form-control' /></div>
                </div>
            </div>
            ";
}
?>
<?php
include('footer.php');
?>