<?php declare(strict_types=1);

namespace Acme;

use Acme\Controller\TodosController;
use Siler\Route;

require_once __DIR__ . '/vendor/autoload.php';

Route\class_name('/todos', TodosController::class);