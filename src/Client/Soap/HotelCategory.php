<?php

namespace App\Client\Soap;

class HotelCategory extends Reference
{

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      parent::__construct($ID);
    }

}
