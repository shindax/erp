<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as AbstractControllerAlias;

class MainController extends AbstractControllerAlias
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
		  return $this->render('welcome.html.twig',
        [
          'name' => "Shidax",
          'title' => "ERP",
          'hello1' => "Hello1",
          'hello2' => "Hello2",
          'date' => "Date",
        ]);
    }
}