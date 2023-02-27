<?php
ob_start();

include('ass.php');
?>

<?php
include('connection.php');
?>
<div class='container bg-warning text-dark mt-5 w-50'>
    <h1 class='border-bottom'>Login</h1>
    <form method="POST">
        <div class='row p-1'>
            <div class='col-3'>
                User Name
            </div>
            <div class='col-9'>
                <input type='text' minlength="8" maxlength="16" onkeypress='return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)' class='form-control' name='name' placeholder='Enter User Name'>
            </div>
        </div>
        <div class='row p-1'>
            <div class='col-3'>
                Password
            </div>
            <div class='col-9'>
                <input type='password' minlength='10' name='password' maxlength='10' class='form-control' placeholder='Enter your Password'>
            </div>
        </div>
        <div class='row p-1'>
            <div class='col-12 text-center'>
                <button class='btn bg-dark text-white' name='login' type='submit'>Login</button>
                <!-- <a href="q12_home.php" class="btn bg-danger text-dark ">Register</a> -->
            </div>

        </div>
    </form>
</div>
<?php
session_start();
if (isset($_POST['login'])) {
    // $conn = new mysqli("localhost", "root", "", "HOST");
    // $create_tbl = "create table login(id int primary key auto_increment,
    // username varchar(50),
    // password varchar(20),

    // )";
    // $conn->query($create_tbl);
    $name = $_POST['name'];
    $password = $_POST['password'];

    $select = "select username,password from login where username='$name' and password = '$password'";
    $result = $conn->query($select);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        foreach ($result as $r) {
            $name = $r['username'];
            $password = $r['password'];
        }
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
        echo "<script>window.location.href='q12_welcome.php';</script>";
    } else {
        echo "<script>  
        alert('Incorrect Username Or Password');
        window.location.href='q12_home.php';
   </script>";
        // header('location:q12_home.php');
    }
}
?>
<?php
include('footer.php');
?>