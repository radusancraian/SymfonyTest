<?php

namespace Aplications\DomainsBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Computer
 * @MongoDB\Document
 * @package Aplications\DomainsBundle\Document
 */
class Computer extends AbstractProduct
{
    /**
     * @JMS\VirtualProperty
     */
    public function getObjectType()
    {
        return "computer";
    }

    /**
     * @JMS\Type("int")
     * @MongoDB\Int
     */
    protected $price;

    /**
     * @JMS\Type("string")
     * @MongoDB\String
     */
    protected $colour;

}
