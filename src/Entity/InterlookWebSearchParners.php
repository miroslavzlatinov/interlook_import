<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InterlookWebSearchParnersRepository")
 */
class InterlookWebSearchParners
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(name="crete_date", type="datetime")
     *
     */
    private $date;
    /**
     *
     *
     * @ORM\Column(name="interlook_user" ,type="integer")
     */

    private $interlook_user;

    /**
     *
     *
     * @ORM\Column(name="external_id" ,type="integer")
     */
    private $interlook_id;

    /**
     * @var
     * @ORM\Column(name="computer" , type="text" , length=50)
     *
     */
    private $computer;




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
    public function getInterlookUser()
    {
        return $this->interlook_user;
    }

    /**
     * @param mixed $interlook_user
     */
    public function setInterlookUser($interlook_user): void
    {
        $this->interlook_user = $interlook_user;
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


}
