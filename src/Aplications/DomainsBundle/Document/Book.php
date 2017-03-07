<?php

namespace Aplications\DomainsBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Book
 * @MongoDB\Document
 * @package Aplications\DomainsBundle\Document
 */
class Book extends AbstractProduct
{
    /**
     * @MongoDB\Integer
     */
    protected $price;

    /**
     * @JMS\Type("int")
     * @MongoDB\Integer
     */
    protected $nrPages;

    /**
     * @JMS\Type("string")
     * @MongoDB\String
     */
    protected $title;


    /**
     * Set price
     *
     * @param integer $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return integer $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set nrPages
     *
     * @param integer $nrPages
     * @return $this
     */
    public function setNrPages($nrPages)
    {
        $this->nrPages = $nrPages;
        return $this;
    }

    /**
     * Get nrPages
     *
     * @return integer $nrPages
     */
    public function getNrPages()
    {
        return $this->nrPages;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
