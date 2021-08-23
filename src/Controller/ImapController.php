<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImapController extends AbstractController
{
    /**
     * @Route("/imap", name="imap")
     */
    public function index(): Response
    {
        return $this->render('imap/index.html.twig', [
            'controller_name' => 'ImapController',
        ]);
    }
    /**
     * @Route("/imap/test", name="imap1")
     */
    public function imap()
    {      //example_connetcion =>imap.yaml
        $isConnectable = $this->get('secit.imap')->testConnection('example_connection');
        var_dump($isConnectable);
    }


}
