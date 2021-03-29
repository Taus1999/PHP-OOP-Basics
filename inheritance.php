<?php
// Your code here!
class User {
    protected $username;
    
    public function setUserName($username) {
        $this->username = $username;
    }
    
    public function getUserName() {
        return $this->username;
    }
}

interface Author {
    public function setAuthorPrivileges($array);
    
    public function getAuthorPrivileges();
}

interface Editor {
    public function setEditorPrivileges($array);
    
    public function getEditorPrivileges();
}

class AuthorEditor extends User implements Author, Editor{
    
    private $authorPrivilegesArray = array();
    private $editorPrivilegesArray = array();
    
    public function setAuthorPrivileges($array){
        $this->authorPrivilegesArray = $array;
    }
    
    public function getAuthorPrivileges() {
        return $this->authorPrivilegesArray;
    }
    
    public function setEditorPrivileges($array){
        $this->editorPrivilegesArray = $array;
    }
    
    public function getEditorPrivileges() {
        return $this->editorPrivilegesArray;
    }
}

$user1 = new AuthorEditor();
$user1->setUserName("Balthazar");
$user1->setAuthorPrivileges(["write text", "add punctiation"]);
$user1->setEditorPrivileges(["edit text", "edit punctiation"]);

$userName = $user1->getUserName();
$userPrivileges = array_merge($user1->getAuthorPrivileges(), $user1->getEditorPrivileges());

$fullstop = ".";
echo $userName . " has the following privileges: ";
echo implode(", ", $userPrivileges).$fullstop;


?>
