<?php
include('ass.php');
?>

<?php
include('connection.php');
?>



<?php
echo "
        <div class='container'>
        <form method='POST'>
            <div class='row p-1 text-center'>
            <div class='col-9'><input type='text' name='name' placeholder='search as per name OR email...' class='form-control rounded-pill' required/></div>
                <div class='col-3'><input type='submit' name='search' value='SEARCH'class='btn bg-danger text-dark rounded-circle'/></div>
            </div>
            </form>
        </div>
    ";
if (isset($_POST['search'])) {
    $select = "select * from result where name='$_POST[name]' or email='$_POST[name]'";
    $result = $conn->query($select);
    $count = mysqli_num_rows($result);
    foreach ($result as $r) {

        $name = $r['name'];
        $email = $r['email'];
        $mobile = $r['mobile'];
        $address = $r['address'];
        $pincode = $r['pincode'];
        $gender = $r['gender'];
        $country = $r['country'];
        $hobbie = $r['hobbie'];
        $image = $r['profile_picture'];
    }
    if ($count > 0) {

        echo ("
            <div style='border-radius: 30px;'>
        <div class='container  bg-info mt-4 text-dark w-50'>
        <table class='table table-striped table-border-danger  '>
        <tr>
            <th>Information</th>
            <th><img src='$image' height='100px width='100px'/></th>
            
        </tr>
        <tr>
            <td> Name :</td><td> $name </td>
            </tr>
        <tr>
            <td> Email :</td><td>  $email </td>
            </tr>
        <tr>
            <td> Contact :</td><td> $mobile </td>
            </tr>
        <tr>
            <td> Address :</td><td> $address </td>
            </tr>
        <tr>
            <td> Pincode :</td><td> $pincode </td>
            </tr>
        <tr>
            <td> Gender :</td><td> $gender </td>
        </tr>
        <tr>
            <td> Country :</td><td> $country </td>
        </tr>
        <tr>
            <td> Hobby :</td><td> $hobbie </td>
        </tr>
       
       </table>
        </div>
        </div>
        ");
    }
}
?>



<?php
include('footer.php');
?>
</body>

</html>