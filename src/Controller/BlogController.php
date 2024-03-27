<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
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
    public function index(ArticlesRepository $repo): Response
    {
       
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

    #[Route('/blog/article/{id}', name: 'blog_show')]
    public function show(Articles $article)
    {

        return $this->render('blog/show.html.twig', [
            'article' => $article
        ]);
    }
}
