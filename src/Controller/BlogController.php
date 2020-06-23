<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Comments;
use App\Entity\Post;
use DateTime;

class BlogController extends AbstractController
{
    
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    public function show_post($post_id,Request $request)
    {



        $comment = new Comments();
        
        //$post->setPostId($post->getId());
        //$post->setDate(new \DateTimeInterface('now'));
        // $form = $this->createForm(Comments::class, $comment);

        // $form->handleRequest($request);
        // if ($form->isSubmitted()){
        //     $comment = $form->getData();            
        //     $comment->setDate(new \DateTime('now'));
        //     $entityManager = $this->getDoctrine()->getManager();
        //     $entityManager->persist($comment);
        //     $entityManager->flush();
        //     return $this->redirectToRoute('post', $post_id);
        // }


        return $this->render('blog/post.html.twig', [
            'controller_name' => 'PostController '.$post_id ,
            'form' => 'form',
            'post_comments' => 'null',
        ]);
    }
}
