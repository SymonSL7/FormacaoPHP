<?php

    namespace App\Controller\Api;

    use App\Entity\Usuario;
    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\JsonResponse;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;

    #[Route("/api/v1", name: "api_v1_usuario_")]
    class ApiUsuarioController extends AbstractController
    {

        #[Route("/listar", name: "listar", methods: ["GET"])]
        public function listar(EntityManagerInterface $entityManager): JsonResponse
        {
            $repository = $entityManager->getRepository(Usuario::class);

            return new JsonResponse($repository->pegarTodos(), 200);

        }

        #[Route("/cadastrar", name: "cadastrar", methods: ["POST"])]
        public function cadastrar(Request $request, EntityManagerInterface $entityManager): Response
        {

            $data = $request->request->all();

            $usuario = new Usuario();
            $usuario->setNome($data['nome']);
            $usuario->setEmail($data['email']);

            $entityManager->persist($usuario);

                if($usuario->getEmail() != null && $usuario->getNome() != null  && ! $usuario->getId() ) {

                    $entityManager->flush();

                    return new Response("ok", 200);

                } else {
                    return new Response("erro", 404);
                }

        }

    }