<?php

namespace DivLooper\Bundle\InboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="inbox_messages")
 * @ORM\Entity()
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

