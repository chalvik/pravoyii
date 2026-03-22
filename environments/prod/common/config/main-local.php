<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host='.getenv('DB_HOST').';dbname='.getenv('DB_DATABASE'),
            'username' => getenv('DB_USER'),
            'password' => getenv('DB_USER_PASSWORD'),
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@common/mail',
        ],
    ],
];
