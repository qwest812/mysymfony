<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
use AppBundle\Services\TextExporter;


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
        $name = 'Bob';
//        return 'hello';
//        return new Response('<html><body>hello</body></html>');
//         replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'name_in_twig'=>$name,
//        ]);
//        return new Response("<html><body>Article page:{$id}</body></html>");
//        return $this->render('article/index.html.twig');

        $repo = $this->get('doctrine')->getRepository('AppBundle:Article');
        $articles = $repo->findAll();
        dump($repo->findMy(5));
        return ['articles' => $articles];
    }


    /**
     * single article page by id
     *
     * @Route("/show/{id}{sl}", name="article_show", defaults = {"sl" : ""} , requirements={"id"="[1-9][0-9]*", "sl"="/?"})
     * @Template()
     *
     */
    public function showAction(Request $request)
    {
        $id = $request->get('id');
//        $sl=$request->get('sl');
//        dump($id);
        $repo =$this->get('doctrine')->getRepository('AppBundle:Article')->find($id);
        $exporter=$this->get('text_exporter');
        $exporter->text_exporter($repo);
//dump($dd->text_exporter($repo));
        if(!$repo){
            throw $this->createNotFoundException('Article not found');
        }
//        dump($content);
        return ['id' => $id, 'content'=>$repo];

//        return $this->render('article/show.html.twig',['id_for_twig'=>$id]);
//        return new Response("<html><body>Article page:{$id}</body></html>");
    }

    /**
     * single article page by id
     *
     *
     * @Route("/test", name="article_test")
     * @Template()
     */
    public function testAction()
    {

        $article = new Article();
        $article->setTitle('Symfony start')->setContent('Some <b>text</b> bla bla');
//        вызываем доктрину
        $em = $this->get('doctrine')->getManager();

//        подгтовка для сохранения
        $em->persist($article);
        $em->flush();
        dump($em);
        return ['article' => $article];
    }


    /**
     *
     * @Route("/article/edit/{id}", name="article_edit", requirements={"id"="[1-9][0-9]*"})
     * @Template()
     */
    public  function editArticleAction(Request $request, $id){
//        $id= $request->get('id');
        $doctrine=$this->get('doctrine');

        $repo = $doctrine->getRepository('AppBundle:Article')->find($id);
        if(!$repo){
            throw $this->createNotFoundException('Article not found');
        }
//        $result=$repo->findOneId($id);
        $form=$this->createForm(ArticleType::class, $repo);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$doctrine->getManager();
            $em->persist($repo);
            $em->flush();
            //create message
            $this->addFlash('my_success', 'Saved');
            return $this->redirectToRoute('article_edit', ['id'=>$id]);
        }
        dump($repo, $form->isSubmitted(), $form->isValid());
        return ['article'=>$repo, 'form'=>$form->createView()];

    }

    /**
     * @param Request $request
     * @return array
     * @Route("/add-category", name="category_add")
     * @Template
     */
    public  function addCategory(Request $request){
        dump($request);
        return [];
    }
}
