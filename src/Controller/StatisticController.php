<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatisticController extends Controller
{
    /**
     * @Route("/statistic", name="statistic")
     */
    public function index()
    {
        return $this->render('statistic/index.html.twig', [
            'controller_name' => 'StatisticController',
        ]);
    }

    /**
     * @param Request $request
     * @Route("/websearches/" , name="web_searches")
     */
    public function webSearchesByPartner(Request $request)
    {

        $form = $this->createForm('App\Form\DateFilterType');

        $from1 = new\DateTime('now');
        $to1 = new\DateTime('now');
        $to1->modify('+1 day');
        $from = date_format($from1,'Y-m-d');
        $to = date_format($to1,'Y-m-d');

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $from = $form->getData()['date_from'];
            $to = $form->getData()['date_to'];
        }
        $res = $this->getDoctrine()->getRepository('App:InterlookWebSearchParners')
            ->findCountByP($from,$to);
        apcu_add('aaa' ,$res,0);
        foreach ($res as $rowk => $rowv) {
            $table[$rowv['date_a']][$rowv['name']][] = $rowv['cnt'];
        }

        $head = array_keys($table);
        foreach($table as $k=>$v){
            foreach($v as $k1 =>$v1){

                $rows[$k1][$k]=array_reduce($v1,function($carry, $item)
                {
                    $carry += $item;
                    return $carry;
                });
            }
        }


        foreach($head as $k=>$v){
            $head_inner[$v] = 0;
        }
        $final = array();
        array_walk($rows,function ($i,$k)use($head_inner,&$final){


            $final[$k] = array_merge($head_inner,$i);

        });






        return $this->render('dashboard/count_seacrhes_partner.html.twig',[
            'table' => $final , 'head'=>$head , 'form'=>$form->createView()]);

    }

    /**
     * @param Request $request
     * @ROute("/timestat/",name="timestat")
     */
    public function countSeacrchesTime(Request $request)
    {

        $table['0-1000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(0, 1000);
        $table['1000-2000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(1000, 2000);
        $table['2000-3000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(2000, 3000);
        $table['3000-4000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(3000, 4000);
        $table['4000-5000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(4000, 5000);
        $table['5000-6000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(5000, 6000);
        $table['6000-10000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(6000, 10000);
        $table['10000-20000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(10000, 20000);
        $table['20000-40000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(20000, 40000);
        $table['40000-60000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(40000, 60000);
        $table['60000-120000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(60000, 120000);
        $table['120000-300000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(120000, 300000);
        $table['300000-600000'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(300000, 600000);
        $table['total'] = $this->getDoctrine()->getRepository('App:LogData')
            ->countSeacrchesTime(1, 600000);



        foreach ($table as $rowk => $rowv) {
            foreach ($rowv as $col) {
                $table_temp[$col['date']][] = $col['count'];
            }
        }

        $head = array_keys($table_temp);
        $rows = array_values($table_temp);

        $first_column = array_keys($table);
        array_unshift($rows, $first_column);
        for ($x = 0; $x <= count($table)-1; $x++) {
            $rows2[] = array_column($rows, $x);
        }

        return $this->render('dashboard/count_seacrhes_time.html.twig', ['head' => $head,
            'table' => $rows2]);
    }

    /**
     * @param Request $request
     *
     * @Route("/map/{id}" ,name="map" )
     */

    public function mapAction(Request $request)
    {


        $lowdate = $this->getDoctrine()->getRepository('App:LogData')->getLowDate();

        $form = $this->createForm('App\Form\HotelFilterType');


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $partner = $form->getData()['name'];
            $from = $form->getData()['date_from'];
            $to = $form->getData()['date_to'];
            $single = $form->getData()['single_hotel'];


            if ($from < new \DateTime($lowdate[0]['1'])) {
                $from = new \DateTime($lowdate[0]['1']);
                $to = new \DateTime();
                $to->modify('+1 day');
            }

            $sql_data1 = $this->getDoctrine()->getRepository('App:LogData')
                ->findLogEachDateByUser($partner->getInterlookId(), $from, $to,$single);
        } else {
            if ($request->get('id') == 'all') {
//                $sql_data1 = $this->getDoctrine()->getRepository('App:LogData')
//                    ->findLogEachDate();
                $from1 = new\DateTime('now');
                $to1 = new\DateTime('now');
                $to1->modify('+1 day');
                $from = date_format($from1,'Y-m-d');
                $to = date_format($to1,'Y-m-d');

                $sql_data1 = $this->getDoctrine()->getRepository('App:LogData')
                    ->findLogEachDateByUser(-1, $from, $to,$single =false);

            }
//            else {
//                $sql_data1 = $this->getDoctrine()->getRepository('App:LogData')
//                    ->findLogEachDateByUser($request->get('id'));
//            }

        }

        if ($sql_data1 == null) {
            $table = array('prazno' => array('prazno'));
            return $this->render('dashboard/dash.html.twig', ['head3' => $table, 'form' => $form->createView()]);
        }
        $tool = $this->get('chart:data');
        $tool->setMinHotels(1);
        $data = $tool->preFilterWithDate($sql_data1);

        $table = array();
        array_walk($data, function ($v, $k) use (&$table) {
            $table[] = array_merge(array($k), $v);
        });

        // dump($table);
        //$table_1 = $tool->hotelCount($sql_data);
        // $table_2 = $tool->hotelCountPieChart($sql_data);
        // $table_3 = $tool->hotelsCountTable($sql_data);


        // return $this->render('dashboard/map.html.twig',['head'=>$table_2,'head2'=>$table_1,'head3'=>$table_3]);
        return $this->render('dashboard/dash.html.twig', ['head3' => $table, 'form' => $form->createView()]);

    }


}
