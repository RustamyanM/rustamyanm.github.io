<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17/9/2019
 * Time: 9:44 PM
 */

file_get_contents('http://medical.ingeniousmedia.ca/sendNotification');
header("location:javascript://history.go(-1)");
