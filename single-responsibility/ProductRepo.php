<?php

class ProductRepo {

    public function insertProduct(ProductModel $product) {

        // logic insert prouduct and get product id

        $product->setId(888);

        return $product;
    }
}