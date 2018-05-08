<?php

namespace App\Entity;

use App\Client\Soap\GetRatings;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RatingRepository")
 */
class Rating
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var
     * @ORM\Column(name="interlook_id",type="integer")
     */
    private $interlook_id;

    /**
     * @var
     * @ORM\Column(name="name" , type="text" , length=50)
     */

    private $name;



    public function __toString() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getInterlookId()
    {
        return $this->interlook_id;
    }

    /**
     * @param mixed $interlook_id
     */
    public function setInterlookId($interlook_id): void
    {
        $this->interlook_id = $interlook_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }



}
