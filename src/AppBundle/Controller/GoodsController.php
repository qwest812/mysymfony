<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Goods;
use AppBundle\Form\GoodsType;
use AppBundle\Services\TextExporter;

class GoodsController extends Controller
{

    /**
     * @Route("/", name="get-all-goods")
     * @Template()
     */
    function getAllGoods(Request $request)
    {

        $goods = $this->get('doctrine')->getRepository('AppBundle:Goods')->findAll();

//        $form=$this->createForm(GoodsType::class, $goods);
//        dump($goods);
        dump($goods);
        return ['goods' => $goods];
    }

    /**
     ** @Route("/get-good/{id}", name="get-good", requirements={"id"="[1-9][0-9]*"})
     * @Template
     */
    function getGood(Request $request, $id)
    {
        $doctrine = $this->get('doctrine');

        $good =$doctrine->getRepository('AppBundle:Goods')->find($id);
        $form = $this->createForm(GoodsType::class, $good);

// for change after submit
//        $form->isSubmitted()  if submit form
        $form->handleRequest($request);
        dump($good, $form->isSubmitted(), $form);
        return ['good' => $good, 'form' => $form->createView()];

    }

    /**
     *
     * @Route("/add-new-good", name="add-new-good")
     * @Template
     */
    function  addNewGood(Request $request)
    {
        $newGood = new Goods();
        $newForm = $this->createForm(GoodsType::class, $newGood);
        $newForm->handleRequest($request);
        if ($newForm->isSubmitted() && $newForm->isValid()) {
            $em = $this->get('doctrine')->getManager();
            $em->persist($newGood);
            $em->flush();
            $this->addFlash('add_good_success', 'Saved');
            return $this->redirectToRoute('get-good');
        }
        dump($newForm, $newGood);
        return ['newform' => $newForm->createView()];
    }

}
