<?php

namespace AwesomeManager\TeamService\Client\Facades;

use Illuminate\Support\Facades\Facade;
use Awesome\Connector\Contracts\Request;
use AwesomeManager\TeamService\Client\Contracts\Client as ClientContract;

/**
 * @method static Request employee()
 */
class TeamClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ClientContract::class;
    }
}
