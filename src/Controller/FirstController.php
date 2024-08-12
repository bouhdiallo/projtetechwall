<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
            'name' => 'fall',
            'prenom' => 'samba',

        ]);
    }

    #[Route('/sayHello', name: 'say.hello')]
    public function sayHello(): Response
    {


        $rand = Rand(0 , 10);
        if($rand ==3 ){
            return $this->redirectToRoute(route:'first');
        }
        return $this->render('first/hello.html.twig', [
            'name' => 'fall',
            'prenom' => 'samba',

        ]);
    }
}
