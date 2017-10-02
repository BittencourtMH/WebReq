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
}
