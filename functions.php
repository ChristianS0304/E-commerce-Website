<?php

//require MySQL Connection
require("database/DBController.php");

//require MySQL Connection
require("database/Product.php");

//DBController
$db = new DBController();

//prodcut object
$product = new Product($db);

print_r($product->getData());

?>