<?php

namespace VilhoBanike\Framework\Http;

use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;


class Kernel
{
  public function handle(Request $request): Response
  {
  
    // Create a dispatcher
    $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector) {
      
      $routes = include BASE_PATH . '/routes/web.php';   



      foreach ($routes as $route) {
        $routeCollector->addRoute(...$route);
      }
    });

    // Dispatche a URI, to obtain the route info
    $routeInfo = $dispatcher->dispatch(
      $request->getMethod(),
      $request->getPathInfo()
    );  


    [$status, [$controller, $method], $vars] = $routeInfo;

    // Call the handler, provided by the route info, in order to create a response
    $response = call_user_func_array([new $controller, $method], $vars);

    return $response;

  }
}
