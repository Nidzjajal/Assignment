<?php
ob_start();

include('ass.php');
?>

<?php

include('connection.php');
session_start();

if ($_SESSION['name'] == "") {
    header('location:q12.php');
} else {
    echo ("
            <div class='container text-white bg-dark  p-2 ml-4 ' width='40px'>
                <div class='row p-1'>
                    <div class='col-8  pt-4 '> WELCOME TO :<b>$_SESSION[name]</b></div>
                    <div class='col-4 p-3'><a href='q12_logout.php' class='btn text-white bg-danger m-3 p-3 float-right'><strong>LOGOUT</strong></a></div>
                </div>
            </div>
        ");
}
?>
<!-- <html>

<head>
    <link rel="stylesheet" href="bootstrap.min.css" />
</head> -->

<body class="bg-secondary">
    <?php
    $select = "select * from login";
    $result = $conn->query($select);

    echo ("
            <div class='container bg-info text-dark'>
                <table class='table'>
                <tr>
                <td colspan='8'><a href='q12_home.php' class='btn bg-dark text-white float-right'>Add</a></td>
                </tr>
                    <tr class='bg-primary text-dark'>
                    
                        <td>Name</td>
                        <td>password</td>
                       
                    </tr>
                    
            ");
    foreach ($result as $r) {
        echo ("
                        <tr>
                            <td>$r[username]</td>
                            <td>$r[password]</td>
                        </tr>

                ");
    }
    echo "</table></div>";
    ?>
</body>
<?php
include('footer.php');
?>
<!-- </html> -->