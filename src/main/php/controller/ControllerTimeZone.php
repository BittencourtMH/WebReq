<?php
require_once $root.'model/persistence/TimeZoneDAO.php';

class ControllerTimeZone
{
    public static function get($id)
    {
        return TimeZoneDAO::read($id);
    }
    public static function getByName($name)
    {
        TimeZoneDAO::create($name);
        return TimeZoneDAO::readByName($name);
    }
    public static function getAll($selected)
    {
        foreach(DateTimeZone::listIdentifiers() as &$time_zone)
            if($time_zone!== $selected)
                echo "<option value='$time_zone'>$time_zone</option>";
            else
                echo "<option value='$time_zone selected'>$time_zone</option>";
    }
}
