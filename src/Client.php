<?php

namespace AwesomeManager\TeamService\Client;

use Awesome\Connector\Request;
use Awesome\Connector\Contracts\Request as RequestContract;
use AwesomeManager\TeamService\Client\Contracts\Client as ClientContract;

class Client implements ClientContract
{
    public function employees(bool $activeOnly = true): RequestContract
    {
        return $this->makeRequest()
            ->url('employees/')
            ->query(['active_only' => $activeOnly]);
    }
    
    public function grades(array $ids = []): RequestContract
    {
        return $this->makeRequest()
            ->url('grades/')
            ->query(['ids' => $ids]);
    }
    
    public function positions(array $ids = []): RequestContract
    {
        return $this->makeRequest()
            ->url('positions/')
            ->query(['ids' => $ids]);
    }

    public function vacations(bool $activeOnlyEmployees = true): RequestContract
    {
        return $this->makeRequest()
            ->url('vacations/')
            ->query(['active_only_employees' => $activeOnlyEmployees]);
    }

    protected function makeRequest(): RequestContract
    {
        return new Request();
    }
}
