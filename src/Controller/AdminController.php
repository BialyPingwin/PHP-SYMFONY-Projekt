<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Post;
use App\Form\PostType;
use DateTime;

class AdminController extends AbstractController
{
    
    public function index(Request $request)
    {

        $post = new Post();
        
        //$post->setPostId($post->getId());
        //$post->setDate(new \DateTimeInterface('now'));
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $post = $form->getData();            
            $post->setDate(new \DateTime('now'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();
            return $this->redirectToRoute('admin');
        }

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'form' => $form->createView(),
        ]);
    }

    public function login()
    {
        return $this->render('admin/login.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
