<?php
include('ass.php');
?>
<html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>
<div class="container w-50 p-2 mt-4 bg-info text white">
    <form method="POST">
        <div class="row p-1 ">
            <div class="col-3">ENTER STRING :</div>
            <div class="col-6"><input type="text" onkeypress="return(event.charCode>=65 && event.charCode<=90)|| (event.charCode>=97 && event.charCode<=122)" name="string" placeholder="enter your string " class="form-control" required /></div>
            <div class="col-3"><input type="submit" name="submit" value="submit" class="btn bg-danger text-dark" /></div>
        </div>

</div>
</form>
</div>

</html>
<?php
if (isset($_POST['submit'])) {
    $string = $_POST['string'];
    $s = strlen($string);
    $str = $s - 1;

    echo "<div class='container bg-white w-50 mt-4 text-dark'>
        <table class='table table-striped table-border'>
            <tr>
                <th colspan='3'>String Information </th>
            </tr>
            <tr>
                <td> Total Length :-<td>
                <td>" . $str . "</td>
            </tr>
            <tr>
                <td> Total Words :-<td>
                <td>" . str_word_count($string) . "</td>
            </tr>
            <tr>
                <td> Reverse :-<td>
                <td>" . strrev($string) . "</td>
            </tr>
        </table> 
    </div>";
}
?>
<?php
include('footer.php');
?>