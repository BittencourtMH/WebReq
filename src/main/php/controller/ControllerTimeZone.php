<?php

class ControllerTimeZone
{
    public static function get($id)
    {
        return TimeZoneDAO::read($id);
    }
}