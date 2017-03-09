<?php

namespace Aplications\DomainsBundle\Controller;

use Aplications\DomainsBundle\Document\Computer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Aplications\DomainsBundle\Document\Product;

/**
 * Class DefaultController
 * @package Aplications\DomainsBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $serializer = $this->container->get('jms_serializer');

        $object = $serializer->deserialize($GLOBALS['HTTP_RAW_POST_DATA'], 'Aplications\DomainsBundle\Document\AbstractProduct', 'json');

       /// $dm = $this->get('doctrine_mongodb')->getManager();
       // $dm->persist($object);
      //  $dm->flush();

      //  $dm->getRepository('AplicationsDomainsBundle:Book');

        $repository = $this->get('doctrine_mongodb')->getManager()
            ->getRepository('AplicationsDomainsBundle:Book');

        $books = $repository->findAll();


        return $this->render('AplicationsDomainsBundle:Default:index.html.twig');


    }
}
