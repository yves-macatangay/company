<?php

class Database {
    private $server_name="localhost";
    private $user="root";
    private $password="";
    private $db_name="the_company";

    protected $conn;

    public function __construct(){
        $this->conn = new mysqli($this->server_name, $this->user, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die("Unable to connect database");
        }
    }
}