<?php
//Michał Bogusławski
//Marcin Kurach

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Comments;
use App\Entity\Post;
use App\Form\CommentsType;
use DateTime;

class BlogController extends AbstractController
{
    
    public function index()
    {
        
        //$viewPostController = $this->get('ViewPostService');
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAll();
        //$posts = $viewPostController->returnPosts();
        return $this->render('blog/index.html.twig', [
            'blog_posts' => $posts,
        ]);
    }

    public function show_post($post_id,Request $request)
    {


        $post =$this->getDoctrine()
        ->getRepository(Post::class)
        ->find($post_id);
        $comments = $post->getComments();
        $comment = new Comments();
        //$post->setPostId($post->getId());
        //$post->setDate(new \DateTimeInterface('now'));
        $form = $this->createForm(CommentsType::class, $comment);

        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $comment = $form->getData();            
            $comment->setDate(new \DateTime('now'));
            $post->addComment($comment);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();
            unset($form);
            $form = $this->createForm(CommentsType::class, $comment);
        }


        return $this->render('blog/post.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
            'post_comments' => $comments,
        ]);
    }
}
