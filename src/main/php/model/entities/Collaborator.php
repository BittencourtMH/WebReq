<?php

class Collaborator
{
    private $id, $project, $user, $role, $status;
    public function getId()
    {
        return $this->id;
    }
    public function getProject()
    {
        return $this->project;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setId($id)
    {
        $this->id=$id;
    }
    public function setProject($project)
    {
        $this->project=$project;
    }
    public function setUser($user)
    {
        $this->user=$user;
    }
    public function setRole($role)
    {
        $this->role=$role;
    }
    public function setStatus($status)
    {
        $this->status=$status;
    }
    public function role()
    {
        return $this->role=== 'S' ? SUPERVISOR : COLLABORATOR;
    }
    public function status()
    {
        if($this->status=== 'A')
            return ACCEPTED;
        return $this->status=== 'P' ? PENDING : REJECTED;
    }
}
