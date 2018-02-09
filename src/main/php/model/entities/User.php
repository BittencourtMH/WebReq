<?php

class User
{
    private $id, $username, $password, $name, $email, $validEmail, $language, $timeZone, $academic, $professional, $admin;
    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getValidEmail()
    {
        return $this->validEmail;
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function getTimeZone()
    {
        return $this->timeZone;
    }
    public function getAcademic()
    {
        return $this->academic;
    }
    public function getProfessional()
    {
        return $this->professional;
    }
    public function getAdmin()
    {
        return $this->admin;
    }
    public function setId($id)
    {
        $this->id=$id;
    }
    public function setUsername($username)
    {
        $this->username=$username;
    }
    public function setPassword($password)
    {
        $this->password=$password;
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function setValidEmail($validEmail)
    {
        $this->validEmail=$validEmail;
    }
    public function setLanguage($language)
    {
        $this->language=$language;
    }
    public function setTimeZone($timeZone)
    {
        $this->timeZone=$timeZone;
    }
    public function setAcademic($academic)
    {
        $this->academic=$academic;
    }
    public function setProfessional($professional)
    {
        $this->professional=$professional;
    }
    public function setAdmin($admin)
    {
        $this->admin=$admin;
    }
    public function validateUsername()
    {
        return strlen($this->username) > 0 && strlen($this->username)<= 30 && mb_check_encoding($this->username, 'ASCII') && strpos($this->username, ' ')=== false;
    }
    public function validatePassword()
    {
        return strlen($this->password)>= 8 && strlen($this->password)<= 30 && mb_check_encoding($this->password, 'ASCII') && strpos($this->password, ' ')=== false;
    }
    public function validateName()
    {
        return strlen($this->name) > 0 && strlen($this->name)<= 100;
    }
    public function validate()
    {
        return $this->validateUsername() && $this->validatePassword() && $this->validateName();
    }
    public static function encryptPassword($password)
    {
        return hash('sha256', $password, true);
    }
    public function link()
    {
        return "<a href=\"user.php?id=$this->id\">$this->name</a>";
    }
    public function type()
    {
        return $this->admin ? ADMIN : USER;
    }
}