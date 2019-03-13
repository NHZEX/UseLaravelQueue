<?php
namespace App\Overload;

use Illuminate\Events\EventServiceProvider;

/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/12
 * Time: 18:17
 */

class App2 extends \Illuminate\Foundation\Application
{

    protected function registerBaseServiceProviders()
    {
        $this->register(new EventServiceProvider($this));
    }

}
