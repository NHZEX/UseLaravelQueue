<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/13
 * Time: 15:25
 */
return [
    'default' => 'redis',
    'connections' => [
        'sync' => [
            'driver' => 'sync',
        ],
        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],
        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => 'default',
            'retry_after' => 60,
            'block_for' => null,
        ],

    ],
    'failed' => [
        'database' => 'mysql',
        'table' => 'failed_jobs',
    ],
];