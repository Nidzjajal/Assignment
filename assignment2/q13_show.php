<?php
ob_start();

include('ass.php');
?>

<?php
include('connection.php');
$select = "select * from employe";
$result = $conn->query($select);
$count = mysqli_num_rows($result);

setcookie("id", 1);

if (isset($_POST['first'])) {
    setcookie("id", 1);
}

if (isset($_POST['last'])) {

    setcookie("id", $count);
}

if (isset($_POST['next'])) {
    if ($_COOKIE['id'] == $count) {
        setcookie("id", 1);
    } else {
        $next = $_COOKIE['id'] + 1;
        setcookie("id", $next);
    }
}

if (isset($_POST['pre'])) {
    if ($_COOKIE['id'] == 1) {
        setcookie("id", $count);
    } else {
        $prv = $_COOKIE['id'] - 1;
        setcookie("id", $prv);
    }
}
$select = "select * from employe where id=$_COOKIE[id]";
$result = $conn->query($select);

foreach ($result as $r) {
    $name = $r['name'];
    $email = $r['email'];
    $mobile = $r['mobile_no'];
    $basic_salary = $r['basic_salary'];
    $ta = $r['ta'];
    $da = $r['da'];
    $hra = $r['hra'];
    $pf = $r['pf'];
    $gross_salary = $r['gross_salary'];
    $net_salary = $r['net_salary'];
}

$multi = "SET  @num := 0;
       UPDATE employe SET id = @num := (@num+1);
       ALTER TABLE employe AUTO_INCREMENT = 1;";
$result = $conn->multi_query($multi);
?>
<div class="container bg-warning text-white border p-3 w-50">
    <form method="POST">
        <h1 class="border-bottom">Navigation</h1>
        <div class="row p-1">
            <div class="col-3">Name :-</div>
            <div class="col-9"><input type="text" value="<?php echo @$name; ?>" onkeypress='return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)' name="name" class="rounded-pill form-control" required placeholder="Enter your name" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Email :-</div>
            <div class="col-9"><input type="email" name="email" value="<?php echo @$email; ?>" class="form-control rounded-pill" required placeholder="Enter your Email" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Mobile :-</div>
            <div class="col-9"><input type="text" name="mobile" minlength="10" maxlength="10" value="<?php echo @$mobile; ?>" onkeypress="return event.charCode>=48 && event.charCode <=57" class=" rounded-pill form-control" required placeholder="Enter your mobile" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">basic salary :-</div>
            <div class="col-9"><input type="text" name="basic_salary" value="<?php echo @$basic_salary; ?>" onkeypress='return(event.charCode>=48 && event.charCode <=57)' class="form-control rounded-pill" required placeholder="Enter basic salary" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">TA:-</div>
            <div class="col-9"><input type="text" name="ta" class="form-control rounded-pill" value="<?php echo @$ta; ?>" required onkeypress='return(event.charCode>=48 && event.charCode<=57)' /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">DA:-</div>
            <div class="col-9"><input type="text" name="ta" class="form-control rounded-pill" required value="<?php echo @$da; ?>" onkeypress='return(event.charCode>=48 && event.charCode<=57)' /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">HRA:-</div>
            <div class="col-9"><input type="text" name="ta" class="form-control rounded-pill" required value="<?php echo @$hra; ?>" onkeypress='return(event.charCode>=48 && event.charCode<=57)' /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">PF:-</div>
            <div class="col-9"><input type="text" name="ta" class="form-control rounded-pill" required value="<?php echo @$pf; ?>" onkeypress='return(event.charCode>=48 && event.charCode<=57)' /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Gross salary:-</div>
            <div class="col-9"><input type="text" name="ta" class="form-control rounded-pill" required value="<?php echo @$gross_salary; ?>" onkeypress='return(event.charCode>=48 && event.charCode<=57)' /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Net salary:-</div>
            <div class="col-9"><input type="text" name="ta" class="form-control rounded-pill" required value="<?php echo @$net_salary; ?>" onkeypress='return(event.charCode>=48 && event.charCode<=57)' /></div>
        </div>
        <div class="row p-1">
            <div class="col-12 text-center"><input type="submit" name="pre" value="previous" class="btn bg-danger text-white rounded-pill" /><input type="submit" name="next" value="Next" class="btn bg-dark text-white rounded-pill" /><input type="submit" name="first" value="First" class="btn bg-danger text-white  rounded-pill" /><input type="submit" name="last" value="Last" class="btn bg-dark text-white rounded-pill" /></div>
        </div>
    </form>
</div>
<?php
include('footer.php');
?>