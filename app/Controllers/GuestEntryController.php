<?php

namespace App\Controllers;

use App\Models\GuestEntry;
use App\Requests\CustomRequestHandler;
use App\Response\CustomResponse;
use App\Validation\Validator;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\RequestInterface as Request;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;


class GuestEntryController
{
  protected $customResponse;
  protected $guestEntry;
  protected $validator;

  public function __construct()
  {
    $this->customResponse = new CustomResponse();
    $this->guestEntry = new GuestEntry();
    $this->validator = new Validator();
  }

  public function health(Request $request, Response $response)
  {
    $responseMessage = "🚀 this route works 🔥";
    return $this->customResponse->is200Response($response, $responseMessage);
  }

  public function createGuest(Request $request, Response $response)
  {
    $this->validator->validate($request, [
      "full_name" => v::notEmpty(),
      "email" => v::notEmpty()->email(),
      "comment" => v::notEmpty()
    ]);
    if ($this->validator->failed()) {
      $responseMessage = $this->validator->errors;
      return $this->customResponse->is400Response($response, $responseMessage);
    }
    $this->guestEntry->create([
      'full_name' => CustomRequestHandler::getParam($request, 'full_name'),
      'email' => CustomRequestHandler::getParam($request, 'email'),
      'comment' => CustomRequestHandler::getParam($request, 'comment')
    ]);
    $responseMessage = "guest entry data created successfully";
    return $this->customResponse->is200Response($response, $responseMessage);
  }
}
