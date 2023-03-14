<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("hello/{nom<[a-zA-Z]+>?World}", name ="hello", methods={"GET","POST"})
     */
    public function index($nom)
    {
        return new Response("Hello $nom !");
    }
}
