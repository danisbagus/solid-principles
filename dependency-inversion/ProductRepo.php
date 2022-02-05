<?php

class ProductRepo {

    private $connection;

    public function NewUserRepo(DBConnection $connection) {

        $this->connection = $connection;

    }

    public function fetchAllProduct() {

        $this->connection->queryRaw("select * from products");

    }

}
