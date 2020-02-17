<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17/9/2019
 * Time: 7:58 PM
 */

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client as GuzzleClient;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Client\Common\HttpMethodsClient as HttpClient;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use OneSignal\Config;
use OneSignal\OneSignal;

$config = new Config();
$config->setApplicationId('3046b489-6711-43e8-b6e4-27ce99be5a7a');
$config->setApplicationAuthKey('NTFkMTMzNTgtMjAwYy00NWU1LTgwMmYtYjdmYTQwOTRlMWVh');
$config->setUserAuthKey('ODNjNWJkNjItZDJmNC00YWU4LWIyZWEtMDBlYmQzYTA4YmNi');

$guzzle = new GuzzleClient([ // http://docs.guzzlephp.org/en/stable/quickstart.html
    // ..config
]);

$client = new HttpClient(new GuzzleAdapter($guzzle), new GuzzleMessageFactory());
$api = new OneSignal($config, $client);

$api->notifications->add([
    'contents' => [
        'en' => 'Notification message'
    ],
    'included_segments' => ['All'],
    'data' => ['foo' => 'bar'],
    'isChrome' => true,


    // ..other options
]);