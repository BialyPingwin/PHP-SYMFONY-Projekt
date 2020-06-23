<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comments;
use App\Entity\Post;
use DateTime;
use Symfony\Component\HttpFoundation\Response;

class ZwrotIDController extends AbstractController
{
    /**
     * @Route("/zwrot/i/d", name="zwrot_i_d")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ZwrotIDController.php',
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
        return new Response('ID:'.$id->getPostId());
    }
}
