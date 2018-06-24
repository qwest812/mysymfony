<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * @Route("/products", name="product_list")
     *
     */
    public function indexAction(Request $request)
    {
        $name= 'Bob';
//        return 'hello';
//        return new Response('<html><body>hello</body></html>');
//         replace this example code with whatever you need
        return $this->render('products/index.html.twig', [
            'name_in_twig'=>$name,
        ]);
    }
    /**
     * @Route("/test", name="product_list")
     *
     */
    public  function testAction(){
        return new Response('<html><body>ggfdgdfg</body></html>');
    }

}
