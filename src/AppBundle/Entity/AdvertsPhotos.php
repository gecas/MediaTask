<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AdvertsPhotos
 *
 * @ORM\Table(name="adverts_photos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdvertsPhotosRepository")
 */
class AdvertsPhotos
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
     *
     */
    protected $photo_path;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $photo_name;

    /**
     * @ORM\ManyToOne(targetEntity="Adverts", inversedBy="adverts_photos")
     * @ORM\JoinColumn(name="advert_id", referencedColumnName="id")
     */

    private $advert_id;

    /**
     * @return mixed
     */
    public function getPhotoPath()
    {
        return $this->photo_path;
    }

    /**
     * @param mixed $photo_path
     */
    public function setPhotoPath($photo_path)
    {
        $this->photo_path = $photo_path;
    }

    /**
     * @return mixed
     */
    public function getPhotoName()
    {
        return $this->photo_name;
    }

    /**
     * @param mixed $photo_name
     */
    public function setPhotoName($photo_name)
    {
        $this->photo_name = $photo_name;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo_path.$this->photo_name;
    }

    /**
     * @return mixed
     */
    public function getAdvertId()
    {
        return $this->advert_id;
    }

    /**
     * @param mixed $advert_id
     */
    public function setAdvertId($advert_id)
    {
        $this->advert_id = $advert_id;
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
}

