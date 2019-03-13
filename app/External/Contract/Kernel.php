<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/13
 * Time: 16:01
 */

namespace App\External\Contract;


interface Kernel
{
    /**
     * 引导框架加载
     *
     * @return int
     */
    public function handle();
}
