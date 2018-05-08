<?php

namespace App\External\Dogovor;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonConnectionsRepository")
 */
class PersonConnections
{
    /**
     * @ORM\Id
     *
     * @ORM\Column(name="PCN_ID",type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(name="PCN_PSID" ,type="integer")
     */
    private $person_id;

    /**
     * @var
     * @ORM\Column(name="PCN_PRKey", type="integer")
     */

    private $partner_id;

    /**
     * @var
     * @ORM\Column(name="PCN_FilialKey", type="integer")
     */
    private $filifal_id;

    /**
     * @var
     * @ORM\Column(name="PCN_Login", type="string" ,length=8)
     */

    private $login;

    /**
     * @var
     * @ORM\Column(name="PCN_Password" , type="string" ,length=16)
     */

    private $password;

    /**
     * @var
     * @ORM\Column(name="PCN_XMLSettings" ,type="string")
     */
    private $xml_settings;

    /**
     * @var
     * @ORM\Column(name="PCN_CreateDate" ,type="datetime")
     */

    private $cretae_date;

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
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * @param mixed $person_id
     */
    public function setPersonId($person_id): void
    {
        $this->person_id = $person_id;
    }

    /**
     * @return mixed
     */
    public function getPartnerId()
    {
        return $this->partner_id;
    }

    /**
     * @param mixed $partner_id
     */
    public function setPartnerId($partner_id): void
    {
        $this->partner_id = $partner_id;
    }

    /**
     * @return mixed
     */
    public function getFilifalId()
    {
        return $this->filifal_id;
    }

    /**
     * @param mixed $filifal_id
     */
    public function setFilifalId($filifal_id): void
    {
        $this->filifal_id = $filifal_id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getXmlSettings()
    {
        return $this->xml_settings;
    }

    /**
     * @param mixed $xml_settings
     */
    public function setXmlSettings($xml_settings): void
    {
        $this->xml_settings = $xml_settings;
    }

    /**
     * @return mixed
     */
    public function getCretaeDate()
    {
        return $this->cretae_date;
    }

    /**
     * @param mixed $cretae_date
     */
    public function setCretaeDate($cretae_date): void
    {
        $this->cretae_date = $cretae_date;
    }





}
