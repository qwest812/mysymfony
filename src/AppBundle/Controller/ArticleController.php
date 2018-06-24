<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{

    /**
     * single article page by id
     *
     * @Route("/articles", name="article_page")
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
        return $this->render('article/index.html.twig');
    }


    /**
     * single article page by id
     *
     * @Route("/articlenew/{id}{sl}", name="articlenew_page", requirements={"id"="[1-9][0-9]*", "sl"="/?"})
     */
    public function articlenewAction(Request $request)
    {
        $id= $request->get('id');
        return $this->render('article/show.html.twig',['id_for_twig'=>$id]);
//        return new Response("<html><body>Article page:{$id}</body></html>");
    }
}
