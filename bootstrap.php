<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/13
 * Time: 11:35
 */
require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Contracts\Foundation\Application;

/** @var Application $app */
$app = require_once __DIR__.'/bootstrap/app.php';

/** @var \App\External\Contract\Kernel $kernel */
$kernel = $app->make(\App\External\Contract\Kernel::class);
$kernel->handle();

return $app;