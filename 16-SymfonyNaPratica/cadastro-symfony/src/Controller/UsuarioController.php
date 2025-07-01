<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route("/", name: "web_usuario_")]
class UsuarioController extends AbstractController
{

    #[Route('/', name: 'index', methods: ["GET"])]
    public function index(): Response
    {

        return new Response("Implementar formulário de cadastro");

    }

    #[Route("/salvar", name: "salvar", methods: ["POST"])]
    public function salvar(): Response
    {

        return new Response("Implementar lógica de salvar");

    }

}