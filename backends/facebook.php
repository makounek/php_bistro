<?php

    require_once './vendor/facebook/graph-sdk/src/Facebook/autoload.php';

if (!session_id()) {
    session_start();
}

    $fb = new Facebook\Facebook([
        'app_id' => '1154250238306878',
        'app_secret' => '32ea4fee1da9bc21595d9dd26ba37a3d',
        'default_graph_version' => 'v4.0',
    ]);
