<?php
 class myphp {
    public $name;
    public function hello()
    {
    return"the naem of function is testing";
    }
    public function database()
    {
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $conn = mysqli_connect($servername,$username,$password) or die("Connect database error");
    }
}
