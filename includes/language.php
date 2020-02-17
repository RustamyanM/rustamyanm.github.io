<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 27/8/2019
 * Time: 12:18 AM
 */


function get_browser_language($default = 'en')
{
    $available = ['en', 'fr'];
    $return = $default;
    if (!empty($_COOKIE['locale'])) {
        //   echo 'cookie';
        return $_COOKIE['locale'];
    }
    if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $langs = explode(',', strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']));
        foreach ($langs as $lang) {
            $lang = substr($lang, 0, 2);
            if (in_array($lang, $available)) {
                $return = $lang;
                break;
            }
        }
    }
    setcookie("locale", $return, time() + 86400 * 30);  /* expire in 1 hour */
    //  echo $return;
    return $return;
}