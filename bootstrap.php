<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/13
 * Time: 11:35
 */
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/App2.php';

use App\ExceptionHandler as MyExceptionHandler;
use Illuminate\Config\Repository;
use Illuminate\Contracts\Debug\ExceptionHandler;


$app = new App2(__DIR__);
// 绑定接口
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    MyExceptionHandler::class
);
// 注册实例
$app->instance(ExceptionHandler::class, new MyExceptionHandler());
$app->instance('config', new Repository([
    'database' => [
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
    ],
    'queue' => [
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
    ],
    'failed' => [
        'database' => 'mysql',
        'table' => 'failed_jobs',
    ],
]));
// 注册服务提供商
$app->register(Illuminate\Bus\BusServiceProvider::class);
$app->register(Illuminate\Queue\QueueServiceProvider::class);
$app->register(Illuminate\Redis\RedisServiceProvider::class);

return $app;