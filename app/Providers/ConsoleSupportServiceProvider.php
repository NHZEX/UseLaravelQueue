<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/13
 * Time: 15:09
 */

namespace App\Providers;

use App\Console\ArtisanCommand;
use Illuminate\Database\MigrationServiceProvider;
use Illuminate\Foundation\Providers\ComposerServiceProvider;
use Illuminate\Foundation\Providers\ConsoleSupportServiceProvider as Base;

class ConsoleSupportServiceProvider extends Base
{
    protected $providers = [
        ArtisanCommand::class,  //Illuminate\Foundation\Providers\ArtisanServiceProvider
        MigrationServiceProvider::class,
        ComposerServiceProvider::class,
    ];
}
