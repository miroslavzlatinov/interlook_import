<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccommodationAgeRepository")
 */
class AccommodationAge
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
     * @ORM\Column(name="age_from",type="integer" , length=3)
     */
    private $age_from;
    /**
     * @var
     * @ORM\Column(name="age_to",type="integer",length=3)
     */
    private $age_to;

    /**
     * @var
     * @ORM\Column(name="count_man",type="integer",length=3)
     */
    private $count_men;
    /**
     * @var
     * @ORM\Column(name="is_main",type="boolean")
     */
    private $is_main;

    /**
     * @var
     * @ORM\Column(name="interlook_update_date",type="datetime")
     */
    private $interlook_update_date;


    /**
     *@ORM\ManyToOne(targetEntity="App\Entity\Accommodation", inversedBy="accommodation_ages")
     * @ORM\JoinColumn(name="accommodation_id", referencedColumnName="id"  )
     *
     */
    private $age;


    public function __toString() {
        return $this->age_from.' to'.$this->age_to;
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
    public function getAgeFrom()
    {
        return $this->age_from;
    }

    /**
     * @param mixed $age_from
     */
    public function setAgeFrom($age_from): void
    {
        $this->age_from = $age_from;
    }

    /**
     * @return mixed
     */
    public function getAgeTo()
    {
        return $this->age_to;
    }

    /**
     * @param mixed $age_to
     */
    public function setAgeTo($age_to): void
    {
        $this->age_to = $age_to;
    }

    /**
     * @return mixed
     */
    public function getCountMen()
    {
        return $this->count_men;
    }

    /**
     * @param mixed $count_men
     */
    public function setCountMen($count_men): void
    {
        $this->count_men = $count_men;
    }

    /**
     * @return mixed
     */
    public function getisMain()
    {
        return $this->is_main;
    }

    /**
     * @param mixed $is_main
     */
    public function setIsMain($is_main): void
    {
        $this->is_main = $is_main;
    }

    /**
     * @return mixed
     */
    public function getInterlookUpdateDate()
    {
        return $this->interlook_update_date;
    }

    /**
     * @param mixed $interlook_update_date
     */
    public function setInterlookUpdateDate($interlook_update_date): void
    {
        $this->interlook_update_date = $interlook_update_date;
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
    public function setAge($age)
    {
        $this->age = $age;
    }



}
