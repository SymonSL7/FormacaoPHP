<?php

    namespace App\Controller;

    use App\Entity\Usuario;
    use Doctrine\ORM\EntityManagerInterface;
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

            return $this->render("usuario/form.html.twig");

        }

        #[Route("/salvar", name: "salvar", methods: ["POST"])]
        public function salvar(Request $request, EntityManagerInterface $entityManager): Response
        {

            $data = $request->request->all();

            $usuario = new Usuario();
            $usuario->setNome($data['nome']);
            $usuario->setEmail($data['email']);

            if(empty($usuario->getEmail()) || empty($usuario->getNome()))  {

                return $this->render("usuario/erro.html.twig");

            }

            $entityManager->persist($usuario);
            $entityManager->flush();

            if($usuario->getId()) {

                return $this->render("usuario/sucesso.html.twig", [
                    'fulano' => $usuario->getNome()
                ]);

            } else {

                return $this->render("usuario/erro.html.twig");

            }

        }

    }
