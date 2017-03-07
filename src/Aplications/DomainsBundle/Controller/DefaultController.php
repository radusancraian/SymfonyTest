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
        $jsonContent = $serializer->serialize($_POST, 'json');

        $object = $serializer->deserialize($jsonContent, 'Aplications\DomainsBundle\Document\AbstractProduct', 'json');

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($object);
        $dm->flush();


        return $this->render('AplicationsDomainsBundle:Default:index.html.twig');


    }
}
