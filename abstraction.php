<?php
// Your code here!

abstract class User {
    protected $username;
    public function setusername($username) {
        $this->username = $username;
    }
    public function getusername() {
        return $this->username;
    }
    abstract public function stateYourRole();
}

class Admin extends User {
    public function stateYourRole() {
        return strtolower(__CLASS__);
    }
}

class Viewer extends User {
    public function stateYourRole() {
        return strtolower(__CLASS__);
        
    }
}

$admin1 = new Admin();
$admin1->setusername("Balthazar");
//echo $admin1->getusername();

echo $admin1->stateYourRole();




?>
