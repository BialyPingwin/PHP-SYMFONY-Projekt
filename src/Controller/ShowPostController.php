<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comments;
use App\Entity\Post;
use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
class ShowPostController extends AbstractController
{
    /**
     * @Route("/show/post", name="show_post")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ShowPostController.php',
        ]);
    }
    public function  ShowPost($id)
    {
        $id=$this->getDoctrine()
            ->getRepository(Post::class)
            ->find($id);
        return new JsonResponse([
            'author'=>$id->getAuthor(),
            'title'=>$id->getTitle(),
            'text'=>$id->getText()
        ]);
    }
}
