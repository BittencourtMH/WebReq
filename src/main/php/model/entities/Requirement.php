<?php

class Requirement
{
    private $id, $project, $type, $number, $name, $version, $status, $priority, $complexity, $solicitor, $author, $dateCreated, $dateModified, $description, $notes;
    public function getId()
    {
        return $this->id;
    }
    public function getProject()
    {
        return $this->project;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getVersion()
    {
        return $this->version;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getPriority()
    {
        return $this->priority;
    }
    public function getComplexity()
    {
        return $this->complexity;
    }
    public function getSolicitor()
    {
        return $this->solicitor;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
    public function getDateModified()
    {
        return $this->dateModified;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getNotes()
    {
        return $this->notes;
    }
    public function setId($id)
    {
        $this->id=$id;
    }
    public function setProject($project)
    {
        $this->project=$project;
    }
    public function setType($type)
    {
        $this->type=$type;
    }
    public function setNumber($number)
    {
        $this->number=$number;
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function setVersion($version)
    {
        $this->version=$version;
    }
    public function setStatus($status)
    {
        $this->status=$status;
    }
    public function setPriority($priority)
    {
        $this->priority=$priority;
    }
    public function setComplexity($complexity)
    {
        $this->complexity=$complexity;
    }
    public function setSolicitor($solicitor)
    {
        $this->solicitor=$solicitor;
    }
    public function setAuthor($author)
    {
        $this->author=$author;
    }
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated=$dateCreated;
    }
    public function setDateModified($dateModified)
    {
        $this->dateModified=$dateModified;
    }
    public function setDescription($description)
    {
        $this->description=$description;
    }
    public function setNotes($notes)
    {
        $this->notes=$notes;
    }
    public function code()
    {
        if($this->type=== 'F')
            return 'FR-'.$this->number;
        if($this->type=== 'N')
            return 'NFR-'.$this->number;
        return 'OR-'.$this->number;
    }
    public function type()
    {
        if($this->type=== 'F')
            return FUNCTIONAL;
        if($this->type=== 'N')
            return NON_FUNCTIONAL;
        return ORGANIZATIONAL;
    }
    public function status()
    {
        if($this->status=== 'S')
            return SUBMITTED;
        if($this->status=== 'P')
            return PENDING;
        return FINISHED;
    }
    public function priority()
    {
        switch($this->priority)
        {
            case 0: return '';
            case 1: return LOW;
            case 2: return MEDIUM;
            case 3: return HIGH;
        }
    }
    public function complexity()
    {
        switch($this->complexity)
        {
            case 0: return '';
            case 1: return LOW;
            case 2: return MEDIUM;
            case 3: return HIGH;
        }
    }
}