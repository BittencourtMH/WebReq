<?php

class TimeZone
{
    public static function get()
    {
        foreach(DateTimeZone::listIdentifiers() as &$tz)
        {
            if($tz!=='UTC')
                echo '<option value="'.$tz.'">'.$tz.'</option>';
            else
                echo '<option value="'.$tz.'" selected>'.$tz.'</option>';
        }
    }
}
