<?php

namespace AwesomeManager\TeamService\Client\Facades;

use Illuminate\Support\Facades\Facade;
use Awesome\Connector\Contracts\Request;
use AwesomeManager\TeamService\Client\Contracts\Client as ClientContract;

/**
 * @method static Request employees(bool $activeOnly = true)
 * @method static Request grades(array $ids = [])
 * @method static Request positions(array $ids = [])
 * @method static Request vacations(bool $activeOnlyEmployees = true)
 */
class TeamClient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ClientContract::class;
    }
}
