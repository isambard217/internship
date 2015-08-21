<?php

namespace IWABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


use IWABundle\Entity\quest;
use IWABundle\Form\QuestType;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="sort")
     * @Method({"POST", "GET"})
     * @Template()
     */
    public function bestAction(Request $request)
    {
        return $this->render('IWABundle:Default:index.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     * @Template()
     */
    public function contactFormAction(Request $request)
    {
        $quest = new quest();
        $form = $this->createFormBuilder($quest)

        ->add('firstname', 'text')
        ->add("email", "email")
        ->add("enqiry", "textarea")
        ->add('save','submit', array('label'=> "Submit enquiry"))
        ->getForm();

        $form->handleRequest($request);

        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($quest);
            $em->flush();

            return $this->redirectToRoute('sort');

        }else{

            return $this->render('IWABundle:Default:contact.html.twig', array('form'=>$form->createView()));
        }

    }

    /**
     * @Route("/demo", name="demo")
     * @Template()
     */
    public function suczAction(Request $request)
    {
        return $this->render('IWABundle:Default:demo.html.twig');
    }


    /**
     * @Route("/success", name="task_success")
     * @Template()
     */
    public function bossAction(Request $request)
    {
        return new Response("Success!!!");
    }


    /**
     * @Route("/stores", name="stores")
     * @Template()
     */
    public function storesAction()
    {
        return $this->render('IWABundle:Default:stores.html.twig');
    }

    /**
     * @Route("/about", name="aboutus")
     * @Template()
     */
    public function aboutAction()
    {
        return $this->render('IWABundle:Default:aboutus.html.twig');
    }

    /**
     * @Route("/layout", name="layout")
     * @Template()
     */
    public function layoutAction()
    {
        return $this->render('IWABundle:Default:layout.html.twig');
    }

}















