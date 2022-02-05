<?php

require_once("./ProductModel.php");
require_once("./ProductRepo.php");

$product = new ProductModel();
$productRepo = new ProductRepo();

$product->setName("TV Modern 15");
$product->setPrice(1000000);

$newProduct = $productRepo->insertProduct($product);

print_r($newProduct);

