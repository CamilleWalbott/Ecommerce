<?php

namespace App\Controller;

use LDAP\Result;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{

    public function index()
    {
        dd("Ca fonctionne");
    }

    /**
     * @Route("test/{age<\d+>?0}", name ="test", methods={"GET","POST"})
     */

    public function test($age)
    {
        return new Response("vous avez $age ans!");
    }
}
