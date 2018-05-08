<?php
/**
 * Created by PhpStorm.
 * User: miroslav
 * Date: 2/19/18
 * Time: 5:12 PM
 */

namespace App\Services;




use App\Client\Soap\ArrayOfTouristService;

use App\Client\Soap\TouristService;

class ReservConstructor
{

    private $map_sex = array('Mrs.'=>'Female','Mr.'=>'Male','Child'=>'Child');
    private $map_adult = array('Mrs.'=>'Adult','Mr.'=>'Adult','Child'=>'Child');


    /**
     * ReservConstructor constructor.
     */
    public function __construct()
    {
    }


    public function createTourist($sex,$bd,$fname,$sname,$count)
    {
       return $tur = new \App\Client\Soap\Tourist('',$this->map_sex[$sex],'','','',$bd,$sname,
            '',$fname,'','','','','');
        $tur->setAgeType($this->map_adult[$sex]);
        $tur->setID($count);
        $tur->setForeignPassport(null);
        $tur->setLocalPassport(null);
    }

    public function TouristByService($arr_t):ArrayOfTouristService
    {
        $arr_ts = new ArrayOfTouristService();

        $ts_a = array();
        foreach ($arr_t as $t)
        {
            $ts = new TouristService(0,$t->getID(),1);
            $ts->setName('');
            $ts_a[] = $ts;
            $arr_ts->setTouristService($ts_a);
        }
        return $arr_ts;

    }
}