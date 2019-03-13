<?php
/**
 * Created by PhpStorm.
 * User: NHZEXG
 * Date: 2019/3/13
 * Time: 15:12
 */

namespace App\Console;

use Illuminate\Foundation\Providers\ArtisanServiceProvider;

class ArtisanCommand extends ArtisanServiceProvider
{
    public function __construct($app)
    {
        parent::__construct($app);

        unset(
            $this->commands['ClearResets'],
            $this->commands['RouteList']
        );

        unset(
            $this->devCommands['AuthMake'],
            $this->devCommands['ControllerMake'],
            $this->devCommands['MiddlewareMake'],
            $this->devCommands['NotificationMake'],
            $this->devCommands['NotificationTable']
        );
    }

    protected function registerClearResetsCommand(){}

    protected function registerRouteListCommand(){}

}
