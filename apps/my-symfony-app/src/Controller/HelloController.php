<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/hello/{name}", methods={"GET","HEAD"})
     * @param $name
     *
     * @return Response
     */
    public function hello($name)
    {
        return new Response('<html><body>Hello: '.$name.'</body></html>');
    }
}
