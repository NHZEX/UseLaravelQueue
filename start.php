#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/12
 * Time: 15:24
 */

use App\Jobs\Test as Test;
use Illuminate\Queue\Capsule\Manager as Queue;
use Illuminate\Queue\Events\JobFailed;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobProcessing;

/** @var \Illuminate\Foundation\Application $app */
$app = require_once __DIR__ . '/bootstrap.php';

/** @var Queue $queue */
$queue = $app['queue'];

// 进程停止
$queue->stopping(function () {
    var_dump('进程停止');
    // $event->connectionName
    // $event->job
    // $event->exception
});
// 任务执行失败
$queue->failing(function (JobFailed $event) {
    var_dump(['全局任务失败', $event->connectionName]);
    // $event->connectionName
    // $event->job
    // $event->exception
});
// 任务执行前
$queue->before(function (JobProcessing $event) {
    // $event->connectionName
    // $event->job
    // $event->job->payload()
});
// 任务执行后
$queue->after(function (JobProcessed $event) {
    // $event->connectionName
    // $event->job
    // $event->job->payload()
});
$queue->looping(function () {
    var_dump('事件循环' . time());
});

Test::dispatch()->delay(1);

var_dump($queue->size());

//var_dump($queue->pop()->getRawBody());
/** @var \Illuminate\Events\Dispatcher $events */
$events = $app['events'];

//$worker = new Worker($queue, $events, $app[ExceptionHandler::class]);
//$options = new WorkerOptions();
//$options->maxTries = 5;
//$options->timeout = 300;
//$worker->daemon('redis', 'default', $options);