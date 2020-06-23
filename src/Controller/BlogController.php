<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    public function show_post($post_id)
    {
        return $this->render('blog/post.html.twig', [
            'controller_name' => 'PostController '.$post_id ,
        ]);
    }
}
