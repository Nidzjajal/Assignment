<?php
ob_start();

include('connection.php');
include('ass.php');
?>
<form method="POST">
	<div class="container bg-dark text-white w-50 mt-2">
		<h1 class="border-bottom">Login Page</h1>

		<div class="row p-1">
			<div class="col-3">Username</div>
			<div class="col-9"><input type="text" class="form-control" name="name" placeholder="enter user name" />
			</div>
		</div>

		<div class="row p-1">
			<div class="col-3">Password</div>
			<div class="col-9"><input type="password" maxlength='16' minlength='8' class="form-control" name="password" placeholder="enter password" />
			</div>
		</div>
		<div class="row p-1">
			<div class="col text-center">
				<input type="submit" class="btn bg-danger text-white" name="login" value="LOGIN" />
				<a href="q7.php" class="btn bg-warning text-white"> SIGN UP</a>
			</div>
		</div>
	</div>
</form>
<?php
session_start();

if (isset($_POST['login'])) {
	$name = $_POST['name'];
	$password = $_POST['password'];
	$LogInDate = date("d/m/y");


	$Update = "update user set LogInDate='$LogInDate' where name='$name' and Password='$password'";
	$select = "select name,password,photograph,LogInDate from user where name='$name' and password='$password'";
	$result = $conn->query($Update);
	$result = $conn->query($select);
	$count = mysqli_num_rows($result);
	if ($count > 0) {
		foreach ($result as $r) {
			$name = $r['name'];
			$password = $r['password'];
			$photo = $r['photograph'];
			$LogInDate = $r['LogInDate'];
		}
		echo "<script> alert('$LogInDate')</script>";
		$_SESSION['name'] = $name;
		$_SESSION['password'] = $password;
		$_SESSION['photo'] = $photo;
		$_SESSION['LogInDate'] = $LogInDate;

		echo "<script>window.location.href='q7_show.php';</script>";
	} else {
		echo "<div class='alert alert-danger'><strong>User Name or Password Incorrect</strong></div>";
	}
}

?>
<?php
include('footer.php');
?>