<?php
include('connection.php');
include('ass.php');
?>
<?php
$id = $_REQUEST['id'];
$select = "select * from bookmaster where book_id=$id";
$result = $conn->query($select);
foreach ($result as $r) {
    $book_id = $r['book_id'];
    $book_name = $r['book_name'];
    $auther_name = $r['auther_name'];
    $price = $r['price'];
    $quantity = $r['quantity'];
    $net_price = $r['net_amount'];
}

?>
<div class="container  bg-primary text-dark mt-4 w-50">

    <form method="POST">
        <div class="row p-1">
            <div class="col-12 text-dark bg-info font-weight-bold ml-4 mt-2 p-2"> <strong>Update Record</strong></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Name</div>
            <div class="col-9"> <input type="text" onkeypress='return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)' name="name" value="<?php echo $book_name; ?>" class="form-control" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Auther Name</div>
            <div class="col-9"> <input type="auther" onkeypress='return (event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)' name="auther" value="<?php echo $auther_name; ?>" class="form-control" /></div>
        </div>

        <div class="row p-1">
            <div class="col-3">price</div>
            <div class="col-9"> <input type="number" name="price" value="<?php echo $price; ?>" class="form-control" /></div>

        </div>
        <div class="row p-1">
            <div class="col-3">Quantity </div>
            <div class="col-9"> <input type="numeric" name="qty" value="<?php echo $quantity; ?>" class="form-control" /></div>
        </div>
        <div class="row p-1">
            <div class="col-3">Net price</div>
            <div class="col-9"> <input type="numeric" name="net_price" value="<?php echo $net_price; ?>" class="form-control" /></div>
        </div>
        <div class="row p-1">
            <div class="col-12">
                <input type="submit" name="update" value="update" class="btn bg-warning text-dark" />
            </div>
        </div>
    </form>
</div>
<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $auther = $_POST['auther'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $net_price = $_POST['net_price'];
    $update = "update bookmaster set book_name='$name' , auther_name='$auther',price='$price',quantity='$qty',net_amount='$net_price' where book_id=$id";
    $result = $conn->query($update);

    if ($result) {
        //  print_r($result);
        //  echo"<br>". $roll;
        header("location:q6_show.php");
    } else {
        echo $conn->error;
    }
}
?>
<?php
include('footer.php');
?>