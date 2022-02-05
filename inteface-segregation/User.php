<?php

interface LowSecureAccess {
    public function login($username, $password);
}

interface MidSecureAccess {
    public function getListUser();
}   

interface VerySecureAcces {
    public function addUser($username);
}

class SuperAdmin implements VerySecureAcces, MidSecureAccess, LowSecureAccess {

    public function login($username, $password) {
        echo "Super admin successfuly login via:" . $username . "\n";
    }

    public function getListUser() {
        echo "Super admin successfuly get list user" . "\n";
    }

    public function addUser($username) {
        echo "Super admin successfuly add user:" . $username . "\n";
    }

}

class Admin implements MidSecureAccess, LowSecureAccess {

    public function login($username, $password) {
        echo "Admin successfuly login via:" . $username . "\n";
    }

    public function getListUser() {
        echo "Admin successfuly get list user" . "\n";
    }
}


class Customer implements LowSecureAccess {

    public function login($username, $password) {
        echo "Customer successfuly login via:" . $username . "\n";
    }
}