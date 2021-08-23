<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use SecIT\ImapBundle\Service\Imap;
class IndexController extends AbstractController
{
    /**
     * @Route("/ymdddfony", name="index")
     */
    public function index(): Response
    {

    }

}