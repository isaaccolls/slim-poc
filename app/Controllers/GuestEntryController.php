<?php

namespace App\Controllers;

use App\Models\GuestEntry;
use App\Requests\CustomRequestHandler;
use App\Response\CustomResponse;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;

class GuestEntryController
{
  protected $customResponse;
  protected $guestEntry;

  public function __construct()
  {
    $this->customResponse = new CustomResponse();
    $this->guestEntry = new GuestEntry();
  }

  public function health(Request $request, Response $response)
  {
    $responseMessage = "🚀 this route works 🔥";
    return $this->customResponse->is200Response($response, $responseMessage);
  }

  public function createGuest(Request $request, Response $response)
  {
    $this->guestEntry->create([
      'full_name' => CustomRequestHandler::getParam($request, 'name'),
      'email' => CustomRequestHandler::getParam($request, 'email'),
      'comment' => CustomRequestHandler::getParam($request, 'comment')
    ]);
    $responseMessage = "guest entry data created successfully";
    return $this->customResponse->is200Response($response, $responseMessage);
  }
}
