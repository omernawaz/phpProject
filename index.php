<?php

class User {
    private $username;
    private $email;
    private $password;

    public function __construct($_username, $_email, $_password)
    {
        $this->username = $_username;
        $this->email = $_email;
        $this->password = $_password;
    }

    public function set_name($_username)
    {
        $this->username = $_username;
    }

    public function get_name()
    {
        return $this->username;
    }
}

class Employee extends User {

    private $title;

    public function __construct($_username, $_email, $_password, $_title)
    {
        parent::__construct($_username,$_email,$_password);
        $this->title = $_title;
    }

    public function get_title()
    {
        return $this->title;
    }
}

$employee = new Employee("Omer", "omer@arbi.com", "1234", "trainee");

var_dump($employee);

?>
