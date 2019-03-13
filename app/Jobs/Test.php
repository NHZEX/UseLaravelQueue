<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/13
 * Time: 10:03
 */

namespace App\Jobs;


use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Test implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $time = 0;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->time = time();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        var_dump('处理完成' . $this->time);
//        var_dump($this->job->payload());
        $this->release(3);
//        $this->fail(new Exception('123'));
    }

    /**
     * 执行失败的任务。
     *
     * @param  Exception  $exception
     * @return void
     */
    public function failed(Exception $exception)
    {
        // 给用户发送失败的通知等等...
        var_dump('任务执行失败');
    }
}
