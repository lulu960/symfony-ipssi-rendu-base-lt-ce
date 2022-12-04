<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\ArticleRepository;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(UserRepository $userRepository, ArticleRepository $articleRepository, ProductRepository $productRepository): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'users' => $userRepository->findAll(),
            'articles' => $articleRepository->findAll(),
            'products' => $productRepository->findAll(),
        ]);
    }
}
