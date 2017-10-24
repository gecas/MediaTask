<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdvertsCategory
 *
 * @ORM\Table(name="adverts_categories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdvertsCategoryRepository")
 */
class AdvertsCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    protected $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    protected $slug;

    /**
     * @ORM\ManyToOne(targetEntity="AdvertsGroup", inversedBy="adverts_categories", fetch="LAZY")
     * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */
    protected $group_id;

    /**
     * @ORM\OneToMany(targetEntity="Adverts", mappedBy="category_id")
     */
    private $adverts;

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


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @param mixed $group_id
     */
    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;
    }

}

