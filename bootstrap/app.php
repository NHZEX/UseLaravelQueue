<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/13
 * Time: 14:17
 */

use App\Overload\App2;

$app = new App2(dirname(__DIR__));

// 绑定接口
$app->singleton(
    \App\External\Contract\Kernel::class,
    \App\External\Kernel::class
);
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

return $app;