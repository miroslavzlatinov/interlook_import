<?php

namespace App\Client\Soap;

class Connect
{

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param string $login
     * @param string $password
     */
    public function __construct($login, $password)
    {
      $this->login = $login;
      $this->password = $password;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param string $login
     * @return \App\Client\Soap\Connect
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \App\Client\Soap\Connect
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
