<?php
/**
 * Created by PhpStorm.
 * User: miroslav
 * Date: 3/30/18
 * Time: 3:59 PM
 */

namespace App\Services;
use Doctrine\ORM\EntityManagerInterface;

class ChartData
{


    protected $em;
    protected $countainer;
    protected $minhotels;
    /**
     * InterlookData constructor.
     */
    public function __construct(EntityManagerInterface $em , \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $this->em = $em;
        $this->countainer = $container;
    }




    public function hotelCount($input)
    {
        $count_by_hotels_names = $this->preFilter($input);
        $header1 = array_keys($count_by_hotels_names);
        $row = array_values($count_by_hotels_names);
        $header = array_map(function($i){return (string)$i;},$header1);   array_unshift($row,'dnes');
        array_unshift($header,'When');
        $row3 = $row;
        $header3 = $header;

        return json_encode(array($header3,$row3));

    }
   public function hotelCountPieChart($input)
   {
       $count_by_hotels_names = $this->preFilter($input);
       $header1 = array_keys($count_by_hotels_names);
       $row = array_values($count_by_hotels_names);
       $header = array_map(function($i){return (string)$i;},$header1);   array_unshift($row,'dnes');
       array_unshift($header,'When');
       $row[] = '';
       $header[] = array('role'=>'annotation');
       return json_encode(array($header,$row));

   }

    public function hotelsCountTable($input)
    {

        $count_by_hotels_names = $this->preFilter($input);
        $header1 = array_keys($count_by_hotels_names);
        $row = array_values($count_by_hotels_names);
        $header = array_map(function($i){return (string)$i;},$header1);

        $row4 = array_map(function($k,$v){return array($k,$v); },array_values($header) ,array_values($row));
        array_unshift($row4,array('Hotels','Searches'));
        return json_encode($row4);



    }

    private function compareHotelsToDatabase($count_by_hotels)
    {
       return  $this->em
            ->getRepository('App:Hotel')
            ->findBy(['interlook_id'=>$count_by_hotels]);

    }

    public function setMinHotels($count)
    {
        $this->minhotels = $count;
    }

    private function preFilter($input)
    {

        $temp2 = array();
        $name_array = array();

        $temp = array_map(function($i) {
            return explode(",", $i['log']);
        },$input);


        array_walk_recursive($temp,
            function($value)use (&$temp2){
                $temp2[] = $value;

            });

        $count_by_hotels_all = array_count_values($temp2);

        $count_by_hotels = array_filter($count_by_hotels_all,
            function($i){
                if($i>$this->minhotels )
                {return $i;}
            });

        $hotel_obj = $this->compareHotelsToDatabase(array_keys($count_by_hotels));


        array_map(function($i)use(&$name_array)
        {$name_array[$i->getInterlookId()] =$i->getName();}
            ,$hotel_obj);


        $filter = array_intersect_key($count_by_hotels ,$name_array);

        ksort($name_array);
        ksort($filter);

       return $count_by_hotels_names =  array_combine(array_values($name_array),array_values($filter));


    }

    public function preFilterWithDate($input)
    {

        $sql_data = array_map(function($i) {

            return array($i['date']->format('d-m-Y') => explode(",", $i['log']));
        },$input);

        array_walk($sql_data,
            function($value)use (&$temp2){
                $temp2[] = $value;

            });
        $result = array();
        foreach ($temp2 as $arr) {
            foreach($arr as $key => $val) {

                $result[$key][] = $val;
            }
        }

        $temp4 =array();
        array_walk($result,function($v,$k) use(&$temp4){
            $temp3  = array();

            array_walk_recursive($v,
                function ($value) use (&$temp3) {
                    $temp3[] = $value;

                });

            $count_by_hotels_all =  array_count_values($temp3);

            $count_by_hotels = array_filter($count_by_hotels_all,
                function($i){
                    if($i>0 )
                    {return $i;}
                });

            $hotel_obj = $this->compareHotelsToDatabase(array_keys($count_by_hotels));

          $name_array = array();
            array_map(function($i)use(&$name_array)
            {$name_array[$i->getInterlookId()] =$i->getName();}
                ,$hotel_obj);
            $filter = array_intersect_key($count_by_hotels ,$name_array);
            ksort($name_array);
            ksort($filter);

            $count_by_hotels_names =  array_combine(array_values($name_array),array_values($filter));
           $temp4[$k] = $count_by_hotels_names;
        });

        $output = array();
        $first_colmn = array();
        array_walk_recursive($temp4,function($k,$v) use (&$first_colmn){
            $first_colmn[$v]=1 ;

        });

        array_walk($first_colmn,function($content,$key) use (&$output,$temp4)
        {

            $temp =array();
            $dates = array();
            array_walk($temp4,function($k,$v) use (&$temp,$key,&$dates){
                $dates[]= $v;

                if(array_key_exists($key,$k)) {
                    $temp[] = $k[$key];
                }
                else
                {
                    $temp[] = $k[$key] =0;
                }

            });

            $output['names'] = $dates;
            $output[$key] =$temp;

        });


        return $output;
    }
}