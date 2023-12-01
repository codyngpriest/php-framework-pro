<?php


namespace App\Controller; 

use VilhoBanike\Framework\Http\Response;


class PostsController
{

  public function show(int $id): Response
  {
    $content = "This is posts $id";


    return new Response($content);
  } 

}
