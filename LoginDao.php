<?php
class LoginDao
{
    private $username;
    private $password;
    private $email;
    private $repassword;
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setRepassword($repassword)
    {
        $this->repassword = $repassword;
    }
    public function getRepassword()
    {
        return $this->repassword;
    }
}
