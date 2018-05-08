<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TouristRepository")
 */
class Tourist
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var
     * @ORM\Column(name="name" , type="text" , length=50)
     */


       private $name;

    /**
     * @var
     * @ORM\Column(name="sex",type="text",length=5)
     *
     */
     private $sex;

    /**
     * @var
     * @ORM\Column(name="age" , type="integer",length=3)
     */
     private $age;

    /**
     * @var
     * @ORM\Column(name="date_of_birth" , type="date")
     */
     private $dateOfBirth;


     /**
     *
     * @ORM\Column(name="pax_comment" , type="text")
      *
     */

     private $pax_comment;

    /**
     * @var
     * @ORM\ManyToMany(targetEntity="App\Entity\VoucherServices", mappedBy="tourists")
     */

     private $voucherServices;

    public function __construct()
    {
        $this->voucherServices = new ArrayCollection();
    }

    public function __toString() {
        return $this->sex.' '.$this->name.'  '.$this->age;
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

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getPaxComment()
    {
        return $this->pax_comment;
    }

    /**
     * @param mixed $pax_comment
     */
    public function setPaxComment($pax_comment): void
    {
        $this->pax_comment = $pax_comment;
    }

    /**
     * @return mixed
     */
    public function getVoucherServices()
    {
        return $this->voucherServices;
    }

    /**
     * @param mixed $voucherServices
     */
    public function setVoucherServices($voucherServices): void
    {
        $this->voucherServices = $voucherServices;
    }



    // add your own fields
}
