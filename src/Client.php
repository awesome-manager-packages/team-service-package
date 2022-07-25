<?php

namespace AwesomeManager\TeamService\Client;

use Awesome\Connector\Request;
use Awesome\Connector\Contracts\Request as RequestContract;
use AwesomeManager\TeamService\Client\Contracts\Client as ClientContract;

class Client implements ClientContract
{
    public function employees(): RequestContract
    {
        return $this->makeRequest()->url('employees/');
    }

    protected function makeRequest(): RequestContract
    {
        return new Request();
    }
}
