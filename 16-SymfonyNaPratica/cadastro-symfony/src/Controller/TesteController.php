<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TesteController extends AbstractController
{
    /*
    #[Route('/', name: 'teste')]
    public function index(Request $request): Response
    {

        $resp = new Response();
        $resp->setContent(json_encode(
            [
                "recebido" => $request->get("nome"),
                "ip" => $request->getClientIps()

            ]
        ));

        $resp->setStatusCode(200);

        return $resp;

    }
*/
}
