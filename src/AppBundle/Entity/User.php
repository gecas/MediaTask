<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    protected $lastname;

    /**
     * @ORM\OneToMany(targetEntity="Adverts", mappedBy="user_id")
     * @ORM\OrderBy({"created_at" = "DESC"})
     */
    private $adverts;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return mixed
     */
    public function getAdverts()
    {
        return $this->adverts;
    }

    /**
     * @param mixed $adverts
     */
    public function setAdverts($adverts)
    {
        $this->adverts = $adverts;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password
            ) = unserialize($serialized);
    }
}