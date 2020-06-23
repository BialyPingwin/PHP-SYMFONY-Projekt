<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index($post_id)
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController '.$post_id ,
        ]);
    }
}
