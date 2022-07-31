<?php

namespace AwesomeManager\TeamService\Client\Contracts;

use Awesome\Connector\Contracts\Request;

interface Client
{
    public function employees(): Request;
    public function vacations(): Request;
}
