<?php

require 'core/bootstrap.php';

use Core\{Router\Router, Request\Request};

(new Router)->load('src/app/routes.php')
      ->direct(Request::uri(), Request::method());
