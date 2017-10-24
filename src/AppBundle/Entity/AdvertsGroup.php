<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdvertsGroup
 *
 * @ORM\Table(name="adverts_groups")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdvertsGroupRepository")
 */
class AdvertsGroup
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
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    protected $icon_class;

    /**
     * @ORM\OneToMany(targetEntity="AdvertsCategory", mappedBy="group_id")
     */
    private $adverts_categories;

    public function __construct()
    {
        $this->adverts_categories = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getAdvertsCategories()
    {
        return $this->adverts_categories;
    }

    /**
     * @param mixed $adverts_categories
     */
    public function setAdvertsCategories($adverts_categories)
    {
        $this->adverts_categories = $adverts_categories;
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
    public function getIconClass()
    {
        return $this->icon_class;
    }

    /**
     * @param mixed $icon_class
     */
    public function setIconClass($icon_class)
    {
        $this->icon_class = $icon_class;
    }

    public function serialize()
    {
        return array(
            "title"=>$this->title,
            "slug"=>$this->slug,
            "icon_class"=>$this->icon_class,
            "categories"=>$this->getAdvertsCategories(),
        );
    }


}

