<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Adverts
 *
 * @ORM\Table(name="adverts")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdvertsRepository")
 */
class Adverts
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
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message = "Title field should not be blank.")
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message = "Description field should not be blank.")
     *
     */
    protected $description;

    /**
     * @ORM\Column(type="string", unique=true, length=255)
     *
     */
    protected $slug;

    /**
     * @ORM\Column(type="integer", options={"unsigned"=true})
     *
     */
    protected $views;

    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime")
     *
     */
    protected $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="adverts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user_id;

    /**
     * @ORM\ManyToOne(targetEntity="AdvertsCategory", inversedBy="adverts")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category_id;

    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank(message = "Price field should not be blank.")
     */
    protected $price;

    /**
     * @ORM\OneToMany(targetEntity="AdvertsPhotos", mappedBy="advert_id")
     * @Assert\Image()
     */
    private $adverts_photos;

    public function __construct()
    {
        $this->adverts_photos = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getAdvertsPhotos()
    {
        return $this->adverts_photos;
    }

    /**
     * @return mixed
     */
    public function getAdvertsPhotosFirst()
    {
        return $this->adverts_photos->first();
    }

    /**
     * @param mixed $adverts_photos
     */
    public function setAdvertsPhotos($adverts_photos)
    {
        $this->adverts_photos = $adverts_photos;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param mixed $views
     */
    public function setViews($views)
    {
        $this->views = $views;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    public function serialize()
    {
        return array(
            "title"=>$this->title,
            "slug"=>$this->slug,
            "description"=>$this->description,
            "price"=>$this->price,
            "created_at"=>date('Y-m-d'),
            "views"=>$this->views,
            "photo_name"=>$this->getAdvertsPhotos()->first()->getPhotoName(),
            "photo_path"=>$this->getAdvertsPhotos()->first()->getPhotoPath(),
        );
    }

}

