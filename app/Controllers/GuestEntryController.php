<?php

namespace App\Controllers;

use App\Requests\CustomRequestHandler;
use App\Response\CustomResponse;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;

class GuestEntryController
{
  protected $customResponse;
  public function __construct()
  {
    $this->customResponse = new CustomResponse();
  }

  public function createGuest(Request $request, Response $response)
  {
    $userName = CustomRequestHandler::getParam($request, "name");
    $responseMessage = "🚀 this route works, " . $userName;
    return $this->customResponse->is200Response($response, $responseMessage);
  }
}
