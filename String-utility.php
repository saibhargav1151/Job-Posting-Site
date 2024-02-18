<?php
class StringUtility{
    public static function shout($string){
        return strtoupper($string).'!';
    }


    public static function whisper($string){
        return strtolower($string).'.';
    }
}


echo StringUtility::shout('sai bhargav');

?>