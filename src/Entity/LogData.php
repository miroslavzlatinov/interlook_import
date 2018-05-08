<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogDataRepository")
 */
class LogData
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     *
     *
     * @ORM\Column(name="external_id" ,type="integer")
     */
    private $interlook_id;


    /**
     * @var
     * @ORM\Column(name="crete_date", type="datetime")
     *
     */


    private $date;

    /**
     * @var
     * @ORM\Column(name="execute_time" , type="text" , length=20)
     *
     */

    private $execute_time;
    /**
     * @var
     * @ORM\Column(name="computer" , type="text" , length=50)
     *
     */

    private $computer;
    /**
     * @var
     * @ORM\Column(name="hotel_count" ,type="integer")
     */

    private $hotel_count;
    /**
     * @var
     * @ORM\Column(name="log" ,type="text")
     */

    private $log;

    /**
     * @var
     * @ORM\Column(name="external_user_id" ,type="integer")
     */

    private $external_user_id;

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getExecuteTime()
    {
        return $this->execute_time;
    }

    /**
     * @param mixed $execute_time
     */
    public function setExecuteTime($execute_time): void
    {
        $this->execute_time = $execute_time;
    }

    /**
     * @return mixed
     */
    public function getComputer()
    {
        return $this->computer;
    }

    /**
     * @param mixed $computer
     */
    public function setComputer($computer): void
    {
        $this->computer = $computer;
    }

    /**
     * @return mixed
     */
    public function getHotelCount()
    {
        return $this->hotel_count;
    }

    /**
     * @param mixed $hotel_count
     */
    public function setHotelCount($hotel_count): void
    {
        $this->hotel_count = $hotel_count;
    }

    /**
     * @return mixed
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * @param mixed $log
     */
    public function setLog($log): void
    {
        $this->log = $log;
    }

    /**
     * @return mixed
     */
    public function getExternalUserId()
    {
        return $this->external_user_id;
    }

    /**
     * @param mixed $external_user_id
     */
    public function setExternalUserId($external_user_id): void
    {
        $this->external_user_id = $external_user_id;
    }




}
