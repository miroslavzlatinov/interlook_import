<?php

namespace App\Client\Soap;

class StatusService extends Reference
{

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      parent::__construct($ID);
    }

}
