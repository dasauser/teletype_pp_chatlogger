<?php

return [
    'id' => 'pp-chatlogger',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'App\Controller',
    'container' => [
        'definitions' => require 'definitions.php'
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
        ],
    ],
];