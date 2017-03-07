<?php

namespace Aplications\DomainsBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\Type;

/**
 * Class AbstractProduct
 * @MongoDB\Document
 * @JMS\Discriminator(field="type", map = {"book" : "Aplications\DomainsBundle\Document\Book", "computer" : "Aplications\DomainsBundle\Document\Computer"})
 * @package Aplications\DomainsBundle\Document
 */
 class AbstractProduct
{
    /**
     * @JMS\Type("int")
     * @MongoDB\Id
     */
    protected $id;

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

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }
}
