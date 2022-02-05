<?php

require_once("./User.php");


$user1 = new SuperAdmin;
$user2 = new Admin;
$user3 = new Customer;

$user1->login("user1@live.com", "rahasia123");
$user1->getListUser();
$user1->addUser("user4@live.com");

$user2->login("user2@live.com", "rahasia123");
$user1->getListUser();

$user3->login("user3@live.com", "rahasia123");