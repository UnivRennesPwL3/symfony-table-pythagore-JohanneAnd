<?php

namespace App\Controller;

use App\Service\PythagorUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{

    #[Route('pythagore/view', name: 'app_pythagore')]
    public function index(PythagorUtility $pythagorUtility): Response
    {
        $pythagoreTable = $pythagorUtility->display();
        //var_dump($pythagoreTable);

        return $this->render('pythagore/index.html.twig', [
            'controller_name' => 'PythagoreController',
            'pythagoreTable' => $pythagoreTable
        ]);
    }
}
