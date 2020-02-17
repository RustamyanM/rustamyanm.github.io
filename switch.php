<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 27/8/2019
 * Time: 1:47 AM
 */

if (!empty($_REQUEST['lang'])) {
    $_REQUEST['lang'] = strtolower($_REQUEST['lang']);
    if (in_array($_REQUEST['lang'], ['en', 'fr'])) {
        setcookie("locale", $_REQUEST['lang'], time() + 86400 * 30);
        switch ($_REQUEST['lang']) {
            case 'fr':
                header("location: /fr");
                break;
            default:
                header("location: /");
        }
    }
}


exit;
//header("location:javascript://history.go(-1)");