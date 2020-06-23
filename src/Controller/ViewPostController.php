<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comments;
use App\Entity\Post;
use DateTime;

class ViewPostController extends AbstractController
{
    /**
     * @Route("/view/post", name="view_post")
     */
    public function index()
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();

        return $this->render('viewpost/index.html.twig', [
            'base' => $posts,
        ]);
    }
}
