<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/api/v1", name: "api_v1_usuario_")]
class ApiUsuarioController extends AbstractController
{

    #[Route("/listar", name: "listar", methods: ["GET"])]
    public function listar(): JsonResponse
    {

        return new JsonResponse(["Implementar lista na API", 404]);

    }

    #[Route("/cadastrar", name: "cadastrar", methods: ["POST"])]
    public function cadastrar(): JsonResponse
    {

        return new JsonResponse(["Implementar cadastro na API", 404]);

    }

}