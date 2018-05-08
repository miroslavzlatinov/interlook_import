<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpFoundation\StreamedResponse;
use App\Client\Soap\SearchHotelServicesMinHotel;
use App\Client\Soap\SearchHotelServiceRequest;


class HotelMinListController extends Controller
{
    /**
     * @Route("/hotel/min/list", name="hotel_min_list")
     */
    public function index()
    {
        return $this->render('hotel_min_list/index.html.twig', [
            'controller_name' => 'HotelMinListController',
        ]);
    }

    /**
     * @Route("/stream", name="stream")
     * @Template("stream.html.twig")
     */
    public function streamAction(Request $request)
    {

        return array('local'=>['aaa']);

    }
    /**
     * @Route("/hotelslist", name="hotel_list")
     * @Template("ajaxhotels.html.twig")
     */
    public function listHotelsAction(Request $request)
    {

        return array('local'=>['aaa']);

    }
    /**
     * @param Request $request
     * @Method({"GET"})
     * @Route("/streamajax", name="stream_ajax")
     *
     *
     */
    public function streamAjaxAction(Request $request)
    {



        if (!$request->isXmlHttpRequest()) {
            throw new BadRequestHttpException('AJAX request expected.');
        }




        $response = new StreamedResponse();

        $interlook_client  = $this->get('interlook_soap_client');
        $guid_string = $interlook_client
            ->Connect($this->getParameter('wsdl_user'),
                $this->getParameter('wsdl_pass'));

        //1918,2606,2983,3045,3512,3665,4187,5429,1901,1902,1905,1906,1907,1908,1910,1912,1913,1917,5471
        $hotels = [1919,1921,1924,1925,1926,
            1927,1928,1931,1932,2259
            ,2260,2261,2264,2265,2304,2384,2387,2403,2412,2441,2442,
            2443,2450,2459,2466,2468,2595,2607,2608,2626,2678,2711,2836,3082,
            3091,3506,3509,3514,3845,4048,4267,4635,5353,5915,6281,
            6339,6408,6410,6412];
        $by10 = array_chunk($hotels, 10);

        $page = 1;
        $response->setCallback(function () use($interlook_client,$by10,$guid_string,$page) {

            foreach($by10 as $hotel) {

                $guid_string = $interlook_client
                    ->Connect($this->getParameter('wsdl_user'),
                        $this->getParameter('wsdl_pass'));
                $search_request = new SearchHotelServiceRequest(100,
                    0,
                    new \DateTime('01-06-2018'),
                    new \DateTime('10-06-2018'),
                    2,
                    1,
                    0);
                // $search_request->setRegionKeys([2]);

                $search_request->setCityKeys([33]);
                $search_request->setHotelKeys($hotel);
                $search_request->setRoomDescriptionsKeys([-1]);
                // $search_request->setPansionKeys([-1]);
                // $search_request->setTariffs([0]);
                // $search_request->setAges([-1]);

                // $search_request->setAges([]);
                try {
                    $res = $interlook_client->SearchHotelServicesMinHotel($guid_string->getConnectResult(), $search_request);
                }
                catch (\SoapFault $fault) {
                    // <xmp> tag displays xml output in html
//           dump($interlook_client->__getLastRequest());
                    dump($interlook_client->__getLastResponse());

                    dump($fault->getMessage());
                }


                $res1 = $res->getSearchHotelServicesMinHotelResult()
                    ->getData()
                    ->getDataRequestResult();



                $str = $res1[0]->getResultTable()->getAny();
                $pattern = '/(\S+)=["\']?((?:.(?!["\']?\s+(?:\S+)=|[>"\']))+.)["\']?/';
                $pattern2 = '/<DocumentElement\s[x]\w+[=]"">(.+)(<\/DocumentElement>)/';
                // Remove the actual namespace declaration using the Pattern
                $xml = preg_replace($pattern, '', $str);

                preg_match_all($pattern2, $xml, $matches, PREG_SET_ORDER, 0);
                if ($matches) {

                    $final_hotel = '<root><page>'.$page.'</page>' . $matches[0][1] . '</root>';

                    trim($final_hotel);

                    $xml_hotel_services = $this->namespacedXMLToArray($final_hotel);


                    echo json_encode($xml_hotel_services);
                    $page = $page+1;
                }

                ob_flush();
//                flush();
            }


        });
        return $response;


    }

    /**
     * @param Request $request
     * @Method({"GET"})
     * @Route("/normalajax", name="request_ajax")
     *
     *
     */
    public function normalAjaxAction(Request $request )
    {



//        if (!$request->isXmlHttpRequest()) {
//            throw new BadRequestHttpException('AJAX request expected.');
//        }
        $session = new Session();

        if(!$request->getSession()->getId()){

            $session->start();
        }



        $interlook_client  = $this->get('interlook_soap_client');
        $guid_string = $interlook_client
            ->Connect($this->getParameter('wsdl_user'),
                $this->getParameter('wsdl_pass'));


        //1918,2606,2983,3045,3512,3665,4187,5429,1901,1902,1905,1906,1907,1908,1910,1912,1913,1917,5471
        $hotels = [1919,1921,1924,1925,1926,
            1927,1928,1931,1932,2259
            ,2260,2261,2264,2265,2304,2384,2387,2403,2412,2441,2442,
            2443,2450,2459,2466,2468,2595,2607,2608,2626,2678,2711,2836,3082,
            3091,3506,3509,3514,3845,4048,4267,4635,5353,5915,6281,
            6339,6408,6410,6412];
        $by10 = array_chunk($hotels, 10);

        $page = 1;
        $pages = count($by10);

         //   foreach($by10 as $hotel) {

                $guid_string = $interlook_client
                    ->Connect($this->getParameter('wsdl_user'),
                        $this->getParameter('wsdl_pass'));
                $search_request = new SearchHotelServiceRequest(10,
                    30,
                    new \DateTime('01-06-2018'),
                    new \DateTime('10-06-2018'),
                    2,
                    0,
                    0);
                // $search_request->setRegionKeys([2]);

                $search_request->setCityKeys([33]);
                $search_request->setHotelKeys($hotels);
                $search_request->setRoomDescriptionsKeys([-1]);
                // $search_request->setPansionKeys([-1]);
                // $search_request->setTariffs([0]);
                // $search_request->setAges([-1]);

                // $search_request->setAges([]);
              if($request->getSession()->get('paginator')) {
                $search_request->setCacheGuid($request->getSession()->get('paginator'));
              }
                try {
                    $res = $interlook_client->SearchHotelServicesMinHotel($guid_string->getConnectResult(), $search_request);
                }
                catch (\SoapFault $fault) {
                    // <xmp> tag displays xml output in html
//           dump($interlook_client->__getLastRequest());
                    dump($interlook_client->__getLastResponse());

                    dump($fault->getMessage());
                }

                $res1 = $res->getSearchHotelServicesMinHotelResult()
                    ->getData()
                    ->getDataRequestResult();

               $session->set('paginator',$res1[0]->getResponseGuid());
        dump($interlook_client->__getLastRequest());
               dump($res1);

                $str = $res1[0]->getResultTable()->getAny();
                $pattern = '/(\S+)=["\']?((?:.(?!["\']?\s+(?:\S+)=|[>"\']))+.)["\']?/';
                $pattern2 = '/<DocumentElement\s[x]\w+[=]"">(.+)(<\/DocumentElement>)/';
                // Remove the actual namespace declaration using the Pattern
                $xml = preg_replace($pattern, '', $str);

                preg_match_all($pattern2, $xml, $matches, PREG_SET_ORDER, 0);
                if ($matches) {

                    $final_hotel = '<root><page>'.$page.'</page>' . $matches[0][1] . '</root>';

                    trim($final_hotel);

                    $xml_hotel_services = $this->namespacedXMLToArray($final_hotel);
dump($xml_hotel_services);
                    exit;

                   // $response = json_encode($xml_hotel_services);
                    $page = $page+1;
                }






       // };
        return new JsonResponse($xml_hotel_services);


    }
    function namespacedXMLToArray($xml)
    {
        // One function to both clean the XML string and return an array
        return json_decode(json_encode(simplexml_load_string($xml)));
    }

}
