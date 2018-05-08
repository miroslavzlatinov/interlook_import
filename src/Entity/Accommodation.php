<?php

namespace App\Entity;



use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccommodationRepository")
 */
class Accommodation
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

    /**
     * @var
     * @ORM\Column(name="is_per_room", type="boolean")
     */

    private $is_per_room;

    /**
     * @var
     * @ORM\Column(name="count_adult_main",type="integer" ,length=2)
     */
    private $count_adult_main;
    /**
     * @var
     * @ORM\Column(name="count_child_main",type="integer",length=2)
     */
    private $count_child_main;
    /**
     * @var
     * @ORM\Column(name="count_adult_extra",type="integer",length=2)
     */
    private $count_adult_extra;
    /**
     * @var
     * @ORM\Column(name="count_child_extra",type="integer",length=2)
     */
    private $count_child_extra;

    /**
     * @var
     * @ORM\Column(name="children_ages" , type="text" ,nullable=true, length=50)
     */
    private $children_ages;
    /**
     * @var
     * @ORM\Column(name="is_web", type="boolean")
     */
    private $is_web;
    /**
     * @var
     * @ORM\Column(name="is_package", type="boolean")
     */
    private $is_package;
    /**
     * @var
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $update_date;

    /**
     * @var AccommodationAge
     * @ORM\OneToMany(targetEntity="App\Entity\AccommodationAge", mappedBy="age" , cascade={"persist" ,"remove"})
     */
    private $accommodation_ages;


    public function __toString() {
        return $this->name;
    }


    /**
     * Accommodation constructor.
     * @param AccommodationAge $accommodation_ages
     */
    public function __construct()
    {
        $this->accommodation_ages = new ArrayCollection();
    }


    /**
     * @return ArrayCollection
     */
    public function getAccommodationAges()
    {
        return $this->accommodation_ages;
    }

    /**
     * @param AccommodationAge $accommodation_ages
     */
    public function setAccommodationAges(AccommodationAge $accommodation_ages): void
    {
        $this->accommodation_ages->add($accommodation_ages);
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

    /**
     * @return mixed
     */
    public function getisPerRoom()
    {
        return $this->is_per_room;
    }

    /**
     * @param mixed $is_per_room
     */
    public function setIsPerRoom($is_per_room): void
    {
        $this->is_per_room = $is_per_room;
    }

    /**
     * @return mixed
     */
    public function getCountAdultMain()
    {
        return $this->count_adult_main;
    }

    /**
     * @param mixed $count_adult_main
     */
    public function setCountAdultMain($count_adult_main): void
    {
        $this->count_adult_main = $count_adult_main;
    }

    /**
     * @return mixed
     */
    public function getCountChildMain()
    {
        return $this->count_child_main;
    }

    /**
     * @param mixed $count_child_main
     */
    public function setCountChildMain($count_child_main): void
    {
        $this->count_child_main = $count_child_main;
    }

    /**
     * @return mixed
     */
    public function getCountAdultExtra()
    {
        return $this->count_adult_extra;
    }

    /**
     * @param mixed $count_adult_extra
     */
    public function setCountAdultExtra($count_adult_extra): void
    {
        $this->count_adult_extra = $count_adult_extra;
    }

    /**
     * @return mixed
     */
    public function getCountChildExtra()
    {
        return $this->count_child_extra;
    }

    /**
     * @param mixed $count_child_extra
     */
    public function setCountChildExtra($count_child_extra): void
    {
        $this->count_child_extra = $count_child_extra;
    }

    /**
     * @return mixed
     */
    public function getChildrenAges()
    {
        return $this->children_ages;
    }

    /**
     * @param mixed $children_ages
     */
    public function setChildrenAges($children_ages): void
    {
        $this->children_ages = $children_ages;
    }

    /**
     * @return mixed
     */
    public function getisWeb()
    {
        return $this->is_web;
    }

    /**
     * @param mixed $is_web
     */
    public function setIsWeb($is_web): void
    {
        $this->is_web = $is_web;
    }

    /**
     * @return mixed
     */
    public function getisPackage()
    {
        return $this->is_package;
    }

    /**
     * @param mixed $is_package
     */
    public function setIsPackage($is_package): void
    {
        $this->is_package = $is_package;
    }

    /**
     * @return mixed
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * @param mixed $update_date
     */
    public function setUpdateDate($update_date): void
    {
        $this->update_date = $update_date;
    }




}
