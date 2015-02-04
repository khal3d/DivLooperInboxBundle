<?php

namespace DivLooper\Bundle\InboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="inbox_conversations")
 * @ORM\Entity()
 */
class Conversation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="subject", type="string", length=128, nullable=true)
     */
    private $subject;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param  string       $subject
     * @return Conversation
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }
}
