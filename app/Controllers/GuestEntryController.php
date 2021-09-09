<?php

namespace App\Controllers;

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
    $responseMessage = "this route works 🚀";
    return $this->customResponse->is200Response($response, $responseMessage);
  }
}
