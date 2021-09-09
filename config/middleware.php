<?php

use Slim\App;

return function (App $app) {
  $app->addRoutingMiddleware();
  $app->addErrorMiddleware(true, true, true);
};
