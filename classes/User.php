<?php

include_once "Database.php";

class User extends Database {

    public function createUser($fname, $lname, $username, $password){
        $sql = "INSERT INTO users(first_name,last_name,username,`password`)
            values('$fname,', '$lname', '$username', '$password')";

        if($this->conn->query($sql)){
            header("location: ../views"); //go to views/index.php
            exit;
        }else{
            die("Error adding user: ".$this->conn->error);
        }
    }


    public function login($username,$password){
        $sql = "SELECT * FROM users where username='$username'";

        if($result = $this->conn->query($sql)){
            if($result->num_rows == 1){
                $user_details = $result->fetch_assoc();

                if(password_verify($password, $user_details['password'])){
                    session_start();

                    $_SESSION['user_id'] = $user_details['id'];
                    $_SESSION['username'] = $user_details['username'];

                    header("location: ../views/dashboard.php");
                    exit;
                }else
                    die("Password incorrect");
            }else
                die("User not found");

        }else
            die("Error finding user: ".$this->conn->error);
    }

    public function getUsers(){
        $sql = "SELECT * FROM users";

        if($result = $this->conn->query($sql)){
            return $result;
        }else
            die("Error retrieving users: ".$this->conn->error);
    }

    public function getUser($id){
        $sql = "SELECT * FROM users WHERE id=$id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else
            die("Error retrieving user: ".$this->conn->error);
    }

    public function editUser($id, $fname, $lname, $username){
        $sql = "UPDATE users SET
                first_name = '$fname',
                last_name = '$lname',
                username = '$username'
                WHERE id=$id";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else
            die("Error updating user: ".$this->conn->error);
    }

    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id=$id";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else
            die("Error deleting user: ".$this->conn->error);
    }

    public function uploadPhoto($id, $filename, $tmp_name){
        $sql = "UPDATE users SET
                photo = '$filename'
                WHERE id=$id";
        
        if($this->conn->query($sql)){
            $destination = "../images/$filename";
            if(move_uploaded_file($tmp_name, $destination)){
                header("location: ../views/profile.php");
                exit;
            }else
                die("Error moving photo");

        }else
            die("Error updating photo: ".$this->conn->error);
    }
}