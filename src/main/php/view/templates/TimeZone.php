<?php

class TimeZone
{
    public static function get($selected)
    {
        foreach(DateTimeZone::listIdentifiers() as &$time_zone)
        {
            if($time_zone!==$selected)
                echo '<option value="'.$time_zone.'">'.$time_zone.'</option>';
            else
                echo '<option value="'.$time_zone.'" selected>'.$time_zone.'</option>';
        }
    }
}
