<?php

class User
{
    private $username, $name, $email;
    private $password;
    private $validEmail;
    private $timeZone;
    private $language;

    public function get_username()
    {
        return $this->username;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_password()
    {
        return $this->password;
    }
    public function get_validEmail()
    {
        return $this->validEmail;
    }
    public function get_timeZone()
    {
        return $this->timeZone;
    }
    public function get_language()
    {
        return $this->language;
    }
    public function set_username($username)
    {
        $this->username=$username;
    }
    public function set_name($name)
    {
        $this->name=$name;
    }
    public function set_email($email)
    {
        $this->email=$email;
    }
    public function set_password($password)
    {
        $this->password=$password;
    }
    public function set_validEmail($validEmail)
    {
        $this->validEmail=$validEmail;
    }
    public function set_timeZone($timeZone)
    {
        $this->timeZone=$timeZone;
    }
    public function set_language($language)
    {
        $this->language=$language;
    }
}
