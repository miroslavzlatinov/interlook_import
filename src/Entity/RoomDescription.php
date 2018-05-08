<?php

namespace App\Entity;

use App\Client\Soap\AdditionalDescription;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomDescriptionRepository")
 */
class RoomDescription
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
     * @ORM\Column(name="name" , type="text" , length=10)
     */

    private $name;

    /**
     * @var
     * @ORM\Column(name="name_lat" , type="text" ,nullable=true, length=10)
     */

    private $name_lat;

    /**
     * @var
     * @ORM\Column(name="description" , type="text" ,nullable=true, length=10)
     */

    private $description;

    /**
     * @var
     * @ORM\Column(name="code" , type="text" ,nullable=true, length=50)
     */

    private $code;

    /**
     * @var
     * @ORM\Column(name="code_lat" , type="text" ,nullable=true, length=10)
     */

    private $code_lat;

    /**
     * @var
     * @ORM\Column(name="unicode" , type="text" ,nullable=true, length=10)
     */

    private $unicode;


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

    /**
     * @return mixed
     */
    public function getNameLat()
    {
        return $this->name_lat;
    }

    /**
     * @param mixed $name_lat
     */
    public function setNameLat($name_lat): void
    {
        $this->name_lat = $name_lat;
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
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCodeLat()
    {
        return $this->code_lat;
    }

    /**
     * @param mixed $code_lat
     */
    public function setCodeLat($code_lat): void
    {
        $this->code_lat = $code_lat;
    }

    /**
     * @return mixed
     */
    public function getUnicode()
    {
        return $this->unicode;
    }

    /**
     * @param mixed $unicode
     */
    public function setUnicode($unicode): void
    {
        $this->unicode = $unicode;
    }



}
