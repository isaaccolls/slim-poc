<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;
use App\Controllers\GuestEntryController;

return function (App $app) {
  $app->get('/health', [GuestEntryController::class, 'health']);
  $app->post('/create-guest', [GuestEntryController::class, 'createGuest']);
};
