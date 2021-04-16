<?php
require_once 'Connection.php';



$productName = $_REQUEST['productName'];
$quantity = $_REQUEST['quantity'];
$productPrice = $_REQUEST['productPrice'];



$query = "insert into Product (productName, quantity, productprice) values ('$productName',$quantity,$productPrice)";

$result = mysqli_query($conn, $query);


if ($result == 1)
{

   header("Location:add-product.php?result=success");
    ob_end_flush();
    die();
} else
{
    header("Location:add-product.php?result=fail");
      ob_end_flush();
    die();
}
?>
