<?php

use Slim\App;

return function (App $app) {
  $app->getContainer()->get('settings');
  $app->addRoutingMiddleware();
  $app->addErrorMiddleware(true, true, true);
};
