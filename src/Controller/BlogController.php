<?php

namespace App\Controller;

use App\Entity\Articles;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    private $entityManager; // Déclarer une propriété privée pour EntityManager

    public function __construct(EntityManagerInterface $entityManager) // Injecter EntityManager via le constructeur
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        $repo = $this->entityManager->getRepository(Articles::class);
        $articles = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }
    #[Route('/', name: 'home')]
    public function home(){
        return $this->render('blog/home.html.twig');
    }

    #[Route('/blog/article/1', name: 'blog_show')]
    public function show()
    {
        return $this->render('blog/show.html.twig');
    }
}
