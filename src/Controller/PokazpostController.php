<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comments;
use App\Entity\Post;
use DateTime;
use Symfony\Component\HttpFoundation\Response;

class PokazpostController extends AbstractController
{
    /**
     * @Route("/pokazpost", name="pokazpost")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PokazPOSTController.php',
        ]);
    }
    public function  id($id)
    {
        $id=$this->getDoctrine()
            ->getRepository(Post::class)
            ->find($id);
        if(!$id){
            return new Response('nie ma ID');
        }
        return $this->json('Author:'.$id->getAuthor().' Title:'.$id->getTitle().' Text:'.$id->getText());
    }
}
