<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/dsgsd", name="homepage")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $name= 'Bob';
        $a=1;
//        return 'hello';
//        return new Response('<html><body>hello</body></html>');
//         replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'name_in_twig'=>$name,
//        ]);

        return $this->render('default/index.html.twig', [
            'name_in_twig'=>$name,
        ]);
    }

}
