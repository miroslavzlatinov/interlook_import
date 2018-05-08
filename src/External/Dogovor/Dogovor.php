<?php

namespace App\External\Dogovor;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DogovorRepository")
 */
class Dogovor
{
    /**
     * @ORM\Id()
     *
     * @ORM\Column(name="DG_key" ,type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(name="DG_code")
     */

    private $dg_code;

    /**
     * @var
     * @ORM\Column(name="dg_touropercode")
     */
    private $reserv_num;

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
    public function getDgCode()
    {
        return $this->dg_code;
    }

    /**
     * @param mixed $dg_code
     */
    public function setDgCode($dg_code): void
    {
        $this->dg_code = $dg_code;
    }

    /**
     * @return mixed
     */
    public function getReservNum()
    {
        return $this->reserv_num;
    }

    /**
     * @param mixed $reserv_num
     */
    public function setReservNum($reserv_num): void
    {
        $this->reserv_num = $reserv_num;
    }





    // add your own fields
}
