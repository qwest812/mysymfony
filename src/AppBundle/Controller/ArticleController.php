<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Article;

class ArticleController extends Controller
{

    /**
     * single article page by id
     *
     * @Route("/", name="article_index")
     * @Template()
     */
    public function indexAction()
    {
        $name= 'Bob';
//        return 'hello';
//        return new Response('<html><body>hello</body></html>');
//         replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'name_in_twig'=>$name,
//        ]);
//        return new Response("<html><body>Article page:{$id}</body></html>");
//        return $this->render('article/index.html.twig');

        $repo=$this->get('doctrine')->getRepository('AppBundle:Article');
        $articles=$repo->findAll();
        dump($articles);
        return ['articles'=>compact($articles)];
    }


    /**
     * single article page by id
     *
     * @Route("/show/{id}{sl}", name="article_show", requirements={"id"="[1-9][0-9]*", "sl"="/?"})
     */
    public function showAction(Request $request)
    {
        $id= $request->get('id');
        return $this->render('article/show.html.twig',['id_for_twig'=>$id]);
//        return new Response("<html><body>Article page:{$id}</body></html>");
    }
    /**
     * single article page by id
     *
     *
     * @Route("/test", name="article_test")
     * @Template()
     */
    public function testAction(){

        $article =new Article();
        $article->setTitle('Symfony start')->setContent('Some <b>text</b> bla bla');
//        вызываем доктрину
        $em=$this->get('doctrine')->getManager();

//        подшлтовка для сохранения
        $em->persist($article);
        $em->flush();
        dump($em);
        return ['article'=>$article];
    }
}
