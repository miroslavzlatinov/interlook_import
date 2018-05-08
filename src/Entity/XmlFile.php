<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\XmlFileRepository")
 */
class XmlFile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     *
     * @ORM\Column(name="xml_file", type="text", length=20)
     */

    private $xml_file;

    /**
     * @var
     * @ORM\Column(name="is_imprted",type="boolean")
     */

    private $is_imprted;

    /**
     * @return mixed
     */

    /**
     * @var
     *
     * @ORM\Column(name="location", type="text", length=20)
     */

    private $location;



    private $form_file;



    public function __construct()
    {
        $this->location = 'aaa';
        $this->is_imprted = false;
    }

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
    public function getXmlFile()
    {
        return $this->xml_file;
    }

    /**
     * @param mixed $xml_file
     */
    public function setXmlFile($xml_file): void
    {
        $this->xml_file = $xml_file;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location): void
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getFormFile()
    {
        return $this->form_file;
    }

    /**
     * @param mixed $form_file
     */
    public function setFormFile($form_file): void
    {
        $this->form_file = $form_file;
    }

    /**
     * @return mixed
     */
    public function getisImprted()
    {
        return $this->is_imprted;
    }

    /**
     * @param mixed $is_imprted
     */
    public function setIsImprted($is_imprted): void
    {
        $this->is_imprted = $is_imprted;
    }







    // add your own fields
}
