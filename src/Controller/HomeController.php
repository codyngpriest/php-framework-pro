<?php

namespace App\Controller;

use VilhoBanike\Framework\Http\Response;

class HomeController
{
   public function index(): Response
   {
     $content = '<h1>Hello World!</h1>';

     return new Response($content);
   }
}
