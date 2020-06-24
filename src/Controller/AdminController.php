<?php
//Michał Bogusławski



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Post;
use App\Entity\User;
use App\Form\PostType;
use App\Form\UserType;
use DateTime;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class AdminController extends AbstractController
{
    private $session;
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public function index(Request $request)
    {
        $is_logged = $this->session->get('logged', 0);
        if($is_logged == 0){
            return $this->redirectToRoute('login');
        }



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

    public function login(Request $request)
    {

        
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $user = $form->getData();
            if($user->getLogin() == "admin" && $user->getPassword() == "admin"){
                $this->session->set('logged', 1);
                
            }
            return $this->redirectToRoute('admin');
        }

        return $this->render('admin/login.html.twig', [
            'controller_name' => 'LoginController',
            'form' => $form->createView(),
        ]);
    }


    public function logout(Request $request)
    {

        
        $this->session->set('logged', 0);
        return $this->redirectToRoute('admin');
                
    }
}
