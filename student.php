<?php
class student {
    private $id;
    private $username;
    private $password;
    

    public function __construct($i, $uname, $pwd) {
        $this->id = $i;
        $this->username = $uname;
        $this->password = $pwd;
       
    }
    public function getId() { return $this->id; }
    public function getUsername() { return $this->username; }
    public function getPassword() { return $this->password; }
   

    public function setId($i) { $this->id = $i; }
    public function setUsername($n) { $this->username = $n; }
    public function setPassword($p) { $this->password = $p; }
   
}
?>
