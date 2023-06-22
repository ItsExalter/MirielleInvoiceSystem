<?php
    require 'dbconnect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $product_name = $_POST["productName"];
        $product_desc = $_POST["productDesc"];
        $product_price = $_POST["productPrice"];
        $product_pict = addslashes(file_get_contents($_FILES['productPict']["tmp_name"]));

        $query = "UPDATE `product` SET `product_name`='$product_name',`product_desc`='$product_desc',`product_price`='$product_price',`product_pict`='$product_pict' WHERE `id` = $id";

        if ($conn->query($query)) {
            header("Location: ../manageProduct.php");
        } 
    }

    // close connection 
    $conn->close();

?>