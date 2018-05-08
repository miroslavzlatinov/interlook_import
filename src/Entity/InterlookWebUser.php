<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InterlookWebUserRepository")
 */
class InterlookWebUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(name="interlook_id", type="integer")
     */
    private $interlook_id;

    /**
     * @var
     * @ORM\Column(name="partner_id" , type="integer")
     */
    private $partner_id;

    /**
     * @var
     * @ORM\Column(name="login" , type="string",length=100)
     */
    private $login;
    /**
     * @var
     * @ORM\Column(name="name" , type="string",length=100)
     */

    private $name;

    /**
     * @var
     * @ORM\Column(name="type" , type="integer",length=2)
     */
    private $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
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

    public function getPartner(): string
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->name;
    }


    // add your own fields
}
