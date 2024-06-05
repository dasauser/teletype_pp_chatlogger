<?php
return [
    'id' => 'pp-chatlogger',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'App\Controller',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
        ]
    ],
];