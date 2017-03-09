<?php
namespace Aplications\DomainsBundle\Document\BookDetails;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @MongoDB\EmbeddedDocument
 * Class Author
 * @package Aplications\DomainsBundle\Document\BookDetails
 */
class Author
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    /**
     * @JMS\Type("string")
     * @MongoDB\String
     */
     protected $name;

    /**
     * @JMS\Type("integer")
     * @MongoDB\Integer
     */
     protected $age;
}
