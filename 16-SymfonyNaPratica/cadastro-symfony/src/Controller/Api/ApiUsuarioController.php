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

            if(empty($usuario->getEmail()) || empty($usuario->getNome())){
                return new Response("Email e nome devem ser preenchidos!", 404);
            }

            $entityManager->persist($usuario);
            $entityManager->flush();

            if($usuario->getId() ) {

                return new Response("ok", 200);

            } else {
                return new Response("erro", 404);
            }

        }


        #[Route("/deletar/{id}", name: "deletar", methods: ["DELETE"])]
        public function deletar(int $id, EntityManagerInterface $entityManager): Response
        {
            $repository = $entityManager->getRepository(Usuario::class);
            $usuario = $repository->find($id);

            if (!$usuario) {
                return new Response("Usuário não encontrado!", 404);
            }

            $entityManager->remove($usuario);
            $entityManager->flush();

            return new Response("Usuário deletado com sucesso!", 200);
        }


        #[Route("/editar/{id}", name: "editar", methods: ["PUT"])]
        public function editar(int $id, Request $request, EntityManagerInterface $entityManager): Response
        {

            $repository = $entityManager->getRepository(Usuario::class);
            $usuario = $repository->find($id);

            if (!$usuario) {
                return new Response("Usuário não encontrado!", 404);
            }

            $data = json_decode($request->getContent(), true);

            if (isset($data['nome'])) {
                $usuario->setNome($data['nome']);
            }

            if (isset($data['email'])) {
                $usuario->setEmail($data['email']);
            }

            $entityManager->flush();

            return new Response("Usuário atualizado com sucesso!", 200);

        }
    }
