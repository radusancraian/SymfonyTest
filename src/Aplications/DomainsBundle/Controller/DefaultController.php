<?php

namespace Aplications\DomainsBundle\Controller;

use Aplications\DomainsBundle\Document\Computer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Aplications\DomainsBundle\Document\Product;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 * @package Aplications\DomainsBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $serializer = $this->container->get('jms_serializer');

        $object = $serializer->deserialize($request->getContent(), 'Aplications\DomainsBundle\Document\AbstractProduct', 'json');

       $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($object);
        $dm->flush();

       $dm->getRepository('AplicationsDomainsBundle:Book');

        $repository = $dm->getRepository('AplicationsDomainsBundle:Book');

        $books = $repository->findAll();


        return $this->render('AplicationsDomainsBundle:Default:index.html.twig');


    }
}
