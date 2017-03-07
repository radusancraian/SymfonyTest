<?php

namespace Aplications\DomainsBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Computer
 * @MongoDB\Document
 * @package Aplications\DomainsBundle\Document
 */
class Computer extends AbstractProduct
{
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
     * @return integer $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set colour
     *
     * @param string $colour
     * @return $this
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
        return $this;
    }

    /**
     * Get colour
     *
     * @return string $colour
     */
    public function getColour()
    {
        return $this->colour;
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
