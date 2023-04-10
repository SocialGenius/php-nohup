<?php
/**
 * php-nohup
 * @version 1.0
 * @author SocialGenius (https://socialgenius.net)
 */

namespace socialgenius\nohup;

class OS
{
    public static function isWin()
    {
        return substr(strtoupper(PHP_OS), 0, 3) === 'WIN';
    }
}
