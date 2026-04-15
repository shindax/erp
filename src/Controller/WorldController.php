<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class WorldController
{
//    #[Route('/hello', name: 'hello_world')]
    public function hello(): Response
    {
        return new Response("<html><body><h1><b>Hello</b> <i>world!</i></h1></body></html>");
    }
}
