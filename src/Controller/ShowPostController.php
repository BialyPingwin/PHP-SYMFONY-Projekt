<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comments;
use App\Entity\Post;
use DateTime;
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
        if(!$id){
            return $this->json('nie ma ID');
        }
        return $this->json('Author:'.$id->getAuthor().' Title:'.$id->getTitle().' Text:'.$id->getText());
    }
}
