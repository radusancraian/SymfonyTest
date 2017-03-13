<?php

namespace Aplications\DomainsBundle\Document;
use Aplications\DomainsBundle\Document\BookDetails\Author;
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
     * @JMS\VirtualProperty
     */
    public function getObjectType()
    {
        return "book";
    }

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @MongoDB\Integer
     * @JMS\SerializedName("abc")
     */
    protected $price;

    /**
     * @var integer
     *
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
     * @var Author
     *
     * @JMS\Type("Aplications\DomainsBundle\Document\BookDetails\Author")
     * @MongoDB\EmbedOne(targetDocument="Aplications\DomainsBundle\Document\BookDetails\Author")
     */
    protected $author;

    /**
     * @var array
     *
     * @JMS\Type("array")
     * @MongoDB\Collection
     */
    protected $documents = array();
}
