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
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                'file' => [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ]
        ]
    ],
];