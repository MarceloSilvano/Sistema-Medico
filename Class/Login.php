<?php
class Login{
    private $user;
    private $password;
    private $conn;

    public function _construct($user,$password,$conn){
        $this->user = $user;
        $this->password = $password;
        $this->conn = $conn;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    
    public function setUser($user){
        $this->user=$user;
    }

    public function getUser(){
        return $this->user;
    }

    public function verificaLogin(){
        $sql = "SELECT * FROM usuario WHERE email='$this->user' AND senha = '$this->password'";
        $query = mysqli_query($this->conn,$sql);

        if($query->num_rows==1){
            return true;
        }else{
            return false;
        }
    }
}

?>