<?php

class User
{
    private $username, $name, $email, $timeZone, $educational, $professional;
    private $password;
    private $validEmail;
    private $language;

    public function getUsername()
    {
        return $this->username;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getTimeZone()
    {
        return $this->timeZone;
    }
    public function getEducational()
    {
        return $this->educational;
    }
    public function getProfessional()
    {
        return $this->professional;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getValidEmail()
    {
        return $this->validEmail;
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function setUsername($username)
    {
        $this->username=$username;
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function setTimeZone($timeZone)
    {
        $this->timeZone=$timeZone;
    }
    public function setEducational($educational)
    {
        $this->educational=$educational;
    }
    public function setProfessional($professional)
    {
        $this->professional=$professional;
    }
    public function setPassword($password)
    {
        $this->password=$password;
    }
    public function setValidEmail($validEmail)
    {
        $this->validEmail=$validEmail;
    }
    public function setLanguage($language)
    {
        $this->language=$language;
    }
    public function validateUsername()
    {
        return strlen($this->username)>0 && strlen($this->username)<=30 && mb_check_encoding($this->username, 'ASCII') && strpos($this->username, ' ')===false;
    }
    public function validatePassword()
    {
        return strlen($this->password)>=8 && strlen($this->password)<=30 && mb_check_encoding($this->password, 'ASCII') && strpos($this->password, ' ')===false;
    }
    public function validateName()
    {
        return strlen($this->name)>0 && strlen($this->name)<=100;
    }
    public function validate()
    {
        return $this->validateUsername() && $this->validatePassword() && $this->validateName();
    }
    public static function encryptPassword($password)
    {
        return hash('sha256', $password, true);
    }
}
