<?php
// Your code here!
const BR = "<br />";
interface loginInterface {
        public function authenticateUser($user);
}

class UserAuthentication implements loginInterface {
        public function authenticateUser($user) {
              echo "This is default authentication" ; 
        }
}

class thirdpartyAuthentication implements loginInterface {
        public function authenticateUser($user) {
              echo "This is 3rd party authentication";  
        }
}

class LoginService
{
    public function login(loginInterface $user)
    {
        $user->authenticateUser($user);
    }
}

$login1 = new UserAuthentication;
$login2 = new thirdpartyAuthentication;

$totallogin1 = new LoginService;
$totallogin1->login($login1);
echo BR;
$totallogin1->login($login2);
?>
