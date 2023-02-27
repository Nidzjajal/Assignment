<?php
include('ass.php');
?>

<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>
<div class="container bg-dark text-white w-50 p-2">
    <form method="POST">

        <h1 class="border-bottom">Digits </h1>
        <div class="row p-1">
            <div class="col-4"><B>Enter your all 5 digit :-</b></div>
            <div class="col-8"><input type="text" name="str1" minlength="2" maxlength="10" onkeypress='return event.charCode>=48 && event.charCode<=57' placeholder="Enter  Number" required class="form-control" /></div>
        </div>


        <div class="row p-1">
            <div class="col-12"><input type="submit" name="submit" value="SUBMIT" class="btn bg-warning text-dark" /></div>
        </div>

    </form>
</div>
<?php

if (isset($_POST['submit'])) {
    $str1 = $_POST['str1'];


    $string = strrev($str1);
    echo "<div class='container bg-info text-dark w-50 p-2 mt-4'/>
            <h1 class='border-bottom'>Reverse Digit</h1>
            <div class='row  bg-primary text-dark p-1 m-1'>
                <div class='col-3'> Reverse String is :-</div>
                <div class='col-9'><input type='number' value=$string class='form-control'/></div>
        </div></div>";
}
?>
<?php
include('footer.php');
?>