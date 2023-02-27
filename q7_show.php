<?php
include('ass.php');
?>

<body class="bg-secondary">
    <?php

    include('connection.php');
    session_start();

    if ($_SESSION['name'] == "") {
        header('location:q7_login.php');
    } else {
        $Select = "select * from user where name='$_SESSION[name]'";

        $result = $conn->query($Select);

        if ($result) {

            foreach ($result as $Data) {
                $Id            = $Data['id'];
                $Name          = $Data['name'];
                $Password      = $Data['password'];
                $Address       = $Data['address'];
                $Email         = $Data['email'];
                $Gender        = $Data['gender'];
                $ContactNumber = $Data['contact'];
                $Photo         = $Data['photograph'];
            }

            echo "
                <div class='container-fluid bg-warning text-white '>
            <table class='table'>
                <tr>
                    <td> 
                        <img src='$Photo' class='p-1 float-left rounded-circle' heigth='150px' width='105px' />
                        <b> Welcome " . $_SESSION['name'] . "</b> 
                    </td>
                    <td> <b> LogIn Date : </b> <b> " . $_SESSION['LogInDate'] . " </b></td>
                    <td align='center'> 
                        <form method='post'> 
                        <a href='q7_logout.php' class='btn text-white bg-danger m-3 p-3 float-right'><strong>LOGOUT</strong></a>
                        </form>
                    </td>
                </tr>
            </table>
            </div>
            ";

            echo ("
            <div style='border-radius: 30px;'>
        <div class='container  bg-info mt-4 text-dark w-50'>
        <table class='table table-striped table-border-danger  '>
        <tr>
            <th colspan='2'>Information</th>
            
        </tr>
        <tr>
            <td> Name :</td><td> $Name </td>
            </tr>
        <tr>
            <td> Password :</td><td>  $Password </td>
            </tr>
        <tr>
            <td> Address :</td><td> $Address </td>
            </tr>
        <tr>
            <td> Email :</td><td> $Email </td>
            </tr>
        <tr>
            <td> Gender :</td><td> $Gender </td>
            </tr>
        <tr>
            <td> Contact :</td><td> $ContactNumber </td>
        </tr>
       </table>
        </div>
        </div>
        ");
        }
    }
    ?>
</body>

<?php
include('footer.php');
?>