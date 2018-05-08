<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FlightRepository")
 */
class Flight
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
     * @ORM\Column(name="name", type="text", length=10)
     *
     */
    private $name;

    /**
     * @var
     * @ORM\Column(name="number", type="text", length=10)
     *
     */

    private $number;


    /**
     * @var
     * @ORM\Column(name="is_arrival" , type="boolean")
     */

    private $is_arrival;


    /**
     * @var
     * @ORM\Column(name="date_to", type="date")
     *
     */

    private $date_to;

    /**
     * @var
     * @ORM\Column(name="date_from", type="date")
     *
     */

    private $date_from;

    /**
     * @var
     * @ORM\Column(name="time_from", type="time")
     *
     */

    private $time_from;

    /**
     * @var
     * @ORM\Column(name="time_to", type="time")
     *
     */

    private $time_to;


    /**
     * @var
     * @ORM\Column(name="air_line", type="text",nullable=true, length=10)
     *
     */
    private $air_line;

    /**
     *@ORM\ManyToOne(targetEntity="App\Entity\Airport", cascade={"persist"})
     * @ORM\JoinColumn(name="flight_airport_from_id", referencedColumnName="id")
     *
     */
    private $airport_from;


    /**
     *@ORM\ManyToOne(targetEntity="App\Entity\Airport", cascade={"persist"})
     * @ORM\JoinColumn(name="flight_airport_to_id", referencedColumnName="id")
     *
     */
    private $airport_to;

    /**
     * @var
     * @ORM\Column(name="available", type="text", length=3)
     *
     */

    private $available;

    /**
     * @var
     * @ORM\Column(name="city_from", type="text",nullable=true, length=20)
     *
     */
    private $city_from;


    /**
     * @var
     * @ORM\Column(name="city_to", type="text",nullable=true, length=20)
     *
     */
    private $city_to;


    public function __toString() {
        return $this->number;
    }
    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param mixed $available
     */
    public function setAvailable($available): void
    {
        $this->available = $available;
    }





    //    public function __construct(\DateTime $TimeFrom, \DateTime $TimeTo, \DateTime $DateFrom, \DateTime $DateTo, bool $IsArrival, AvailabilityType $Available, int $ID)
//    {
//        parent::__construct($TimeFrom, $TimeTo, $DateFrom, $DateTo, $IsArrival, $Available, $ID);
//    }



    /**
     * @return mixed
     *
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
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getisArrival()
    {
        return $this->is_arrival;
    }

    /**
     * @param mixed $is_arrival
     */
    public function setIsArrival($is_arrival): void
    {
        $this->is_arrival = $is_arrival;
    }

    /**
     * @return mixed
     */
    public function getDateTo()
    {
        return $this->date_to;
    }

    /**
     * @param mixed $date_to
     */
    public function setDateTo($date_to): void
    {
        $this->date_to = $date_to;
    }

    /**
     * @return mixed
     */
    public function getDateFrom()
    {
        return $this->date_from;
    }

    /**
     * @param mixed $date_from
     */
    public function setDateFrom($date_from): void
    {
        $this->date_from = $date_from;
    }

    /**
     * @return mixed
     */
    public function getTimeFrom()
    {
        return $this->time_from;
    }

    /**
     * @param mixed $time_from
     */
    public function setTimeFrom($time_from): void
    {
        $this->time_from = $time_from;
    }

    /**
     * @return mixed
     */
    public function getTimeTo()
    {
        return $this->time_to;
    }

    /**
     * @param mixed $time_to
     */
    public function setTimeTo($time_to): void
    {
        $this->time_to = $time_to;
    }

    /**
     * @return mixed
     */
    public function getAirLine()
    {
        return $this->air_line;
    }

    /**
     * @param mixed $air_line
     */
    public function setAirLine($air_line): void
    {
        $this->air_line = $air_line;
    }

    /**
     * @return mixed
     */
    public function getAirportFrom()
    {
        return $this->airport_from;
    }

    /**
     * @param mixed $airport_from
     */
    public function setAirportFrom($airport_from): void
    {
        $this->airport_from = $airport_from;
    }

    /**
     * @return mixed
     */
    public function getAirportTo()
    {
        return $this->airport_to;
    }

    /**
     * @param mixed $airport_to
     */
    public function setAirportTo($airport_to): void
    {
        $this->airport_to = $airport_to;
    }

    /**
     * @return mixed
     */
    public function getCityFrom()
    {
        return $this->city_from;
    }

    /**
     * @param mixed $city_from
     */
    public function setCityFrom($city_from): void
    {
        $this->city_from = $city_from;
    }

    /**
     * @return mixed
     */
    public function getCityTo()
    {
        return $this->city_to;
    }

    /**
     * @param mixed $city_to
     */
    public function setCityTo($city_to): void
    {
        $this->city_to = $city_to;
    }






}
