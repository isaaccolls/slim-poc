<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;
use App\Controllers\GuestEntryController;

return function (App $app) {
  $app->get('/health', [GuestEntryController::class, 'health']);
  $app->post('/create-guest', [GuestEntryController::class, 'createGuest']);
  $app->get('/view-guests', [GuestEntryController::class, 'viewGuests']);
  $app->patch('/edit-guest/{id}', [GuestEntryController::class, 'editGuest']);
  $app->delete('/delete-guest/{id}', [GuestEntryController::class, 'deleteGuest']);
};
