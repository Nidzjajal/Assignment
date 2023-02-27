<?php
include('ass.php');
?>
<?php
include('connection.php');
?>
<div class="container bg-secondary text-dark w-50 p-2">
    <form method="POST">
        <h1 class="border-bottom">Information</h1>
        <div class="row p-1">
            <div class="col-3">Name :-</div>
            <div class="col-9"><input type="text" onkeypress='return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)' name="name" class="form-control" required placeholder="Enter your name" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Email :-</div>
            <div class="col-9"><input type="email" name="email" class="form-control" required placeholder="Enter your Email" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Mobile :-</div>
            <div class="col-9"><input type="text" name="mobile" minlength="10" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode <=57" class="form-control" required placeholder="Enter your mobile" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">basic salary :-</div>
            <div class="col-9"><input type="text" name="basic_salary" onkeypress='return(event.charCode>=48 && event.charCode <=57)' class="form-control" required placeholder="Enter basic salary" /></div>
        </div>
        <div class="row p-1">
            <div class="col-12 text-center"><button type="submit" name="submit" class="btn bg-warning m-3 p-3 text-white"><strong>ADD</strong></button> <a href='q13_show.php' class='btn text-white bg-danger m-3 p-3 float-right'><strong>SHOW RECORD</strong></a></div>
        </div>
</div>
</form>
</div>
<?php
if (isset($_POST['submit'])) {
    // $conn = new mysqli("localhost", "root", "", "HOST");
    // $create_tbl = "create table employe(id int primary key auto_increment,
    //                                                     name varchar(50),
    //                                                     email varchar(20) unique key,
    //                                                     gross_salary int(30),
    //                                                     net_salary int(20),
    //                                                     mobile_no varchar(10),
    //                                                     basic_salary bigint(50),
    //                                                     ta int(20),
    //                                                     da int(20),
    //                                                     hra int(20),
    //                                                     pf int(20)
    //                                                     )";
    // $conn->query($create_tbl);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $basic_salary = $_POST['basic_salary'];
    $mobile = $_POST['mobile'];
    $ta = ($basic_salary * 10) / 100;
    $da = ($basic_salary * 12) / 100;
    $hra = ($basic_salary * 15) / 100;
    $pf = ($basic_salary * 12.5) / 100;

    $gross_salary = $basic_salary + $ta + $da + $hra;
    $net_salary = $gross_salary - $pf;

    $insert = "insert into employe (name,email,gross_salary,net_salary,mobile_no,basic_salary,ta,da,hra,pf)values('$name','$email','$gross_salary','$net_salary','$mobile','$basic_salary','$ta','$da','$hra','$pf')";
    $result = $conn->query($insert);
    if ($result) {
        echo "<script> alert('inserted')</script>";
        echo "<script> window.location.href='q13_show.php' </script>";
    } else {
        echo $conn->error;
    }
}
?>
<?php
include('footer.php');
?>