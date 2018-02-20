<?php

class Project
{
    private $id, $name, $startDate, $endDate, $public, $creator, $manager;
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getStartDate()
    {
        return $this->startDate;
    }
    public function getEndDate()
    {
        return $this->endDate;
    }
    public function getPublic()
    {
        return $this->public;
    }
    public function getCreator()
    {
        return $this->creator;
    }
    public function getManager()
    {
        return $this->manager;
    }
    public function setId($id)
    {
        $this->id=$id;
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function setStartDate($startDate)
    {
        $this->startDate=$startDate;
    }
    public function setEndDate($endDate)
    {
        $this->endDate=$endDate;
    }
    public function setPublic($public)
    {
        $this->public=$public;
    }
    public function setCreator($creator)
    {
        $this->creator=$creator;
    }
    public function setManager($manager)
    {
        $this->manager=$manager;
    }
}
