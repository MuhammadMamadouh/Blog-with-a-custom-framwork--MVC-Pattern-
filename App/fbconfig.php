<?php

session_start();

require_once '../vendor/facebook/graph-sdk/src/Facebook/autoload.php';
//require '../vendor/autoload.php';

try {
    $fb = new \Facebook\Facebook([
        'app_id' => '161866348096337',
        'app_secret' => '89ecd9404757225373fbca3ab62ef0c7',
        'default_graph_version' => '3.2',
    ]);

    $helper = $fb->getRedirectLoginHelper();
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
    echo $e->getMessage();
}