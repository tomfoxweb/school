<?php

return [
    'id' => 'school-web2',
    'basePath' => realpath(__DIR__ . '/../'),
    'bootstrap' => ['debug'],
    'language' => 'ru',
    'aliases' => [
        '@bower' => '@vendor/yidas/yii2-bower-asset/bower',
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'request' => [
            'cookieValidationKey' => 'super secret code'
        ],
    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'allowedIPs' => ['127.0.0.1', '::1']
        ]
    ]
];