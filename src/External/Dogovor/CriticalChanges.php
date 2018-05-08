<?php

namespace App\External\Dogovor;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CriticalChangesRepository")
 */
class CriticalChanges
{
    /**
     * @ORM\Id
     *
     * @ORM\Column(name="CC_ID" ,type="integer")
     */
    private $id;
    /**
     * @var
     * @ORM\Column(name="CC_Date", type="datetime")
     *
     */


    private $date;
    /**
     * @var
     * @ORM\Column(name="CC_Creator" ,type="text" , length=25)
     *
     */

    private $creator;

    /**
     * @var
     * @ORM\Column(name="CC_Text" , type="text" ,length=254)
     *
     */


    private $text;

    /**
     * @var
     * @ORM\Column(name="CC_Remark" , type="text" , length=20)
     *
     */

    private $remark;
    /**
     * @var
     * @ORM\Column(name="CC_Computer" , type="text" , length=50)
     *
     */

    private $computer;
    /**
     * @var
     * @ORM\Column(name="CC_LOG" , type="text")
     *
     */

    private $log;

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
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @param mixed $creator
     */
    public function setCreator($creator): void
    {
        $this->creator = $creator;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param mixed $remark
     */
    public function setRemark($remark): void
    {
        $this->remark = $remark;
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




    // add your own fields
}
