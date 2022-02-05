<?php

require_once("./Database.php");
require_once("./ProductRepo.php");

$dbConnection = new Postgresql;

$userRepo = new ProductRepo();
$userRepo->NewUserRepo($dbConnection);

$userRepo->fetchAllProduct();
