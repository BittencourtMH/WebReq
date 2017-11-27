<?php

class Requirement
{
    private $project, $author;
    private $type, $status, $priority, $complexity;
    private $number;
    private $name, $solicitor, $description, $notes;
    private $version;
    private $date_created, $date_modified;
    private $dependencies;
    private $attachments;

    public function get_project()
    {
        return $this->project;
    }
    public function get_author()
    {
        return $this->author;
    }
    public function get_type()
    {
        return $this->type;
    }
    public function get_status()
    {
        return $this->status;
    }
    public function get_priority()
    {
        return $this->priority;
    }
    public function get_complexity()
    {
        return $this->complexity;
    }
    public function get_number()
    {
        return $this->number;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_solicitor()
    {
        return $this->solicitor;
    }
    public function get_description()
    {
        return $this->description;
    }
    public function get_notes()
    {
        return $this->notes;
    }
    public function get_version()
    {
        return $this->version;
    }
    public function get_date_created()
    {
        return $this->date_created;
    }
    public function get_date_modified()
    {
        return $this->date_modified;
    }
    public function get_dependencies()
    {
        return $this->dependencies;
    }
    public function get_attachments()
    {
        return $this->attachments;
    }
    public function set_project($project)
    {
        $this->project=$project;
    }
    public function set_author($author)
    {
        $this->author=$author;
    }
    public function set_type($type)
    {
        $this->type=$type;
    }
    public function set_status($status)
    {
        $this->status=$status;
    }
    public function set_priority($priority)
    {
        $this->priority=$priority;
    }
    public function set_complexity($complexity)
    {
        $this->complexity=$complexity;
    }
    public function set_number($number)
    {
        $this->number=$number;
    }
    public function set_name($name)
    {
        $this->name=$name;
    }
    public function set_solicitor($solicitor)
    {
        $this->solicitor=$solicitor;
    }
    public function set_description($description)
    {
        $this->description=$description;
    }
    public function set_notes($notes)
    {
        $this->notes=$notes;
    }
    public function set_version($version)
    {
        $this->version=$version;
    }
    public function set_date_created($date_created)
    {
        $this->date_created=$date_created;
    }
    public function set_date_modified($date_modified)
    {
        $this->date_modified=$date_modified;
    }
    public function set_dependencies($dependencies)
    {
        $this->dependencies=$dependencies;
    }
    public function set_attachments($attachments)
    {
        $this->attachments=$attachments;
    }
}
