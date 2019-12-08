<?php declare(strict_types=1);

namespace Acme\Controller;

class TodosController
{
    public function getIndex(): void
    {
        echo 'GET request to /todos';
    }

    public function postIndex(): void
    {
        echo 'POST request to /todos';
    }

    public function getDone(): void
    {
        echo 'GET request to /todos/done';
    }
}