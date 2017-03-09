<?php

namespace Aplications\DomainsBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Book
 * @MongoDB\Document
 * @package Aplications\DomainsBundle\Document
 */
class Book extends AbstractProduct
{
    /**
     * @JMS\Type("integer")
     * @MongoDB\Integer
     */
    protected $price;

    /**
     * @JMS\Type("integer")
     * @MongoDB\Integer
     */
    protected $numberPages;

    /**
     * @JMS\Type("string")
     * @MongoDB\String
     */
    protected $title;


    /**
     * @MongoDB\ReferenceOne(targetDocument="Aplications\DomainsBundle\Document\BookDetails\Author", cascade={"persist"})
     * @JMS\Type("Aplications\DomainsBundle\Document\BookDetails\Author")
     */
    protected $author;
}
