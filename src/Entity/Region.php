<?php
/**
 * Created by PhpStorm.
 * User: miroslav
 * Date: 2/6/18
 * Time: 3:16 PM
 */
namespace App\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegionRepository")
 * @ORM\Entity
 * @ORM\Table(name="region")
 */
class Region
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

    /**
     * @var
     * @ORM\Column(name="name_lat" , type="text" ,nullable=true, length=50)
     */

    private $name_lat;

    /**
     * @var
     * @ORM\Column(name="description" , type="text" ,nullable=true, length=50)
     */

    private $description;

    /**
     * @var
     * @ORM\Column(name="code" , type="text" ,nullable=true, length=50)
     */

    private $code;

    /**
     * @var
     * @ORM\Column(name="code_lat" , type="text" ,nullable=true, length=50)
     */

    private $code_lat;

    /**
     * @var
     * @ORM\Column(name="unicode" , type="text" ,nullable=true, length=50)
     */

    private $unicode;

    /**
     *@ORM\ManyToOne(targetEntity="App\Entity\Country", inversedBy="regions" , cascade={"persist"})
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     *
     */

    private $country;

    /**
     * @var City
     * @ORM\OneToMany(targetEntity="App\Entity\City", mappedBy="region" , cascade={"persist"})
     */
    private $cities;

    public function __construct()
    {
      $this->cities = new ArrayCollection();

    }

    public function __toString() {
        return $this->name;
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
     * @return City
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param City $cities
     */
    public function setCities(City $cities): void
    {
        $this->cities = $cities;
    }




    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }



    public function getName()
    {
        return $this->name;
    }

    public function setName($Name)
    {
        $this->name = $Name;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($ID)
    {
        $this->id = $ID;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($Description)
    {
        return $this->description = $Description;
    }


    public function getNameLat()
    {
        return $this->name_lat;
    }

    public function setNameLat($NameLat)
    {
         $this->name_lat = $NameLat;
    }

    public function getCode()
    {

        return $this->code;
    }

    public function setCode($Code)
    {
        $this->code = $Code;
    }

    public function getCodeLat()
    {
        return $this->code_lat;
    }

    public function setCodeLat($CodeLat)
    {
        $this->code_lat = $CodeLat;
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
