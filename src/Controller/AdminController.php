<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comments;
use App\Entity\Post;
use DateTime;

class AdminController extends AbstractController
{
    
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    public function login()
    {
        return $this->render('admin/login.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
