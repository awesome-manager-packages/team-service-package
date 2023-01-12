<?php

namespace AwesomeManager\TeamService\Client\Contracts;

use Awesome\Connector\Contracts\Request;

interface Client
{
    public function employees(bool $activeOnly = true): Request;
    public function grades(array $ids = []): Request;
    public function positions(array $ids = []): Request;
    public function vacations(bool $activeOnlyEmployees = true): Request;
}
