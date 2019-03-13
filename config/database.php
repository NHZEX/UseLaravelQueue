<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/13
 * Time: 14:55
 */
return [
    'redis' => [
        'client' => 'predis',
        'default' => [
            'host' => 'localhost',
            'password' => null,
            'port' => 6379,
            'database' => 0,
            'retry_after' => 60,
        ],
        'clusters' => [],
    ],
];