<?php

interface DBConnection {

    public function queryRaw($query);

}

class Mysql implements DBConnection {

    public function queryRaw($query){

        echo "Run Query: {" . $query . "} Via MySQL\n";

    }
}

class Postgresql implements DBConnection {

    public function queryRaw($query){

        echo "Run Query: {" . $query . "} Via Postgresql\n";

    }
}