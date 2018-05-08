<?php

namespace App\Controller;


use App\Client\Soap\ArrayOfParameterPair;
use App\Client\Soap\ArrayOfService;
use App\Client\Soap\ArrayOfTourist;
use App\Client\Soap\HotelService;
use App\Client\Soap\ParameterPair;
use App\Client\Soap\Rate;
use App\Client\Soap\Reservation;
use App\Client\Soap\SearchActualCostCalculationVariantRequest;
use App\Client\Soap\SearchHotelServiceRequest;
use App\Entity\Accommodation;
use App\Entity\AccommodationAge;
use App\Entity\Airport;
use App\Entity\Flight;
use App\Entity\Hotel;
use App\Entity\InterlookWebSearchParners;
use App\Entity\InterlookWebUser;
use App\Entity\LogData;
use App\Entity\Pansion;
use App\Entity\Rating;
use App\Entity\City;
use App\Entity\Country;
use App\Entity\Region;
use App\Entity\RoomCategory;
use App\Entity\RoomDescription;
use App\Entity\RoomType;
use App\Entity\Tourist;
use App\Entity\Voucher;
use App\Entity\VoucherServices;
use App\Entity\XmlFile;

use Symfony\Component\Cache\Adapter\ApcuAdapter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use Symfony\Component\HttpFoundation\Request;



class AdminController extends BaseAdminController
{






    /**
     * @Route("/myadmin", name="easyadmin")
     */
    public function indexAction(Request $request)
    {

        return parent::indexAction($request);


    }









    /**
     * @param Request $request
     *
     */

    public function importAction()
    {

        $id = $this->request->query->get('id');
        $file = $this->getDoctrine()->getRepository('App\Entity\XmlFile');
        $filelocation = $file->find($id);


        $xml = simplexml_load_file($this->get('kernel')->getRootDir() . '/../web' . $filelocation->getLocation());

        $em = $this->getDoctrine()->getManager();
        foreach ($xml as $data) {

            foreach ($data->voucher as $voucher) {
                $voucherData = new Voucher();
                $serviceHotel = new VoucherServices();
                $serviceFlight1 = new VoucherServices();
                $serviceFlight2 = new VoucherServices();


                $voucherData->setVoucherNo((string)$voucher->children()->children()->voucher_no);
                $voucherData->setRecordType((string)$voucher->children()->children()->record_type);
                $voucherData->setPartner((string)$voucher->children()->children()->partner);
                $voucherData->setCommentBooking((string)$voucher->children()->children()->comment_booking);


                if ($serviceHotel->getServiceId() == null) {
                    $serviceHotel->setServiceType('HTL');
                    $serviceHotel->setServiceId((string)$voucher->pax->hotel_id);
                    $serviceHotel->setServiceName((string)$voucher->pax->hotel_name);
                    $serviceHotel->setCheckInDate(new \DateTime($voucher->pax->check_in_date));
                    $serviceHotel->setCheckOutDate(new \DateTime($voucher->pax->check_out_date));
                    $serviceHotel->setServiceCount((string)$voucher->pax->room_count);
                    $serviceHotel->setServiceMaxPax((string)$voucher->pax->room_max_pax);
                    $serviceHotel->setServiceCode('HTL');
                    $serviceHotel->setServiceCode1((string)$voucher->pax->room_type);
                    $serviceHotel->setServiceCode2((string)$voucher->pax->board);
                    $serviceHotel->setVoucher($voucherData);
                }
                if ($serviceFlight1->getServiceId() == null) {
                    $serviceFlight1->setServiceType('FLY');
                    $serviceFlight1->setServiceId('1');
                    $serviceFlight1->setServiceName((string)$voucher->pax->Flight_Arrival_Number);
                    $serviceFlight1->setCheckInDate(new \DateTime($voucher->pax->Flight_Arrival_Date));
                    $serviceFlight1->setCheckOutDate(new \DateTime($voucher->pax->Flight_Arrival_Date));
                    $serviceFlight1->setServiceCount('1');
                    $serviceFlight1->setServiceMaxPax((string)$voucher->pax->room_max_pax);
                    $serviceFlight1->setServiceCode((string)$voucher->pax->Flight_Arrival_Hour);
                    $serviceFlight1->setServiceCode1((string)$voucher->pax->Flight_Arrival_From);
                    $serviceFlight1->setServiceCode2((string)$voucher->pax->Flight_Arrival_To);
                    $serviceFlight1->setVoucher($voucherData);
                }

                if ($serviceFlight2->getServiceId() == null) {
                    $serviceFlight2->setServiceType('FLY');
                    $serviceFlight2->setServiceId('2');
                    $serviceFlight2->setServiceName((string)$voucher->pax->Flight_Departure_Number);
                    $serviceFlight2->setCheckInDate(new \DateTime($voucher->pax->Flight_Departure_Date));
                    $serviceFlight2->setCheckOutDate(new \DateTime($voucher->pax->Flight_Departure_Date));
                    $serviceFlight2->setServiceCount('1');
                    $serviceFlight2->setServiceMaxPax((string)$voucher->pax->room_max_pax);
                    $serviceFlight2->setServiceCode((string)$voucher->pax->Flight_Departure_Hour);
                    $serviceFlight2->setServiceCode1((string)$voucher->pax->Flight_Departure_From);
                    $serviceFlight2->setServiceCode2((string)$voucher->pax->Flight_Departure_To);
                    $serviceFlight2->setVoucher($voucherData);
                }
                foreach ($voucher->pax as $tourist) {
                    $turistData = new Tourist();
                    $turistData->setName((string)$tourist->name);
                    $turistData->setDateOfBirth(new \DateTime($tourist->date_of_birth));
                    $turistData->setAge((string)$tourist->age);
                    $turistData->setSex((string)$tourist->sex);
                    $turistData->setPaxComment((string)$tourist->pax_comment);
                    $serviceFlight1->setTourists($turistData);
                    $serviceHotel->setTourists($turistData);
                    $serviceFlight2->setTourists($turistData);
                }


                $em->persist($serviceFlight1);
                $em->persist($serviceFlight2);
                $em->persist($serviceHotel);

            }

            $issaved = $em->getRepository('App\Entity\XmlFile')->find($id);
            $issaved->setIsImprted(true);
            $em->flush();

        }

        return $this->redirectToReferrer();
    }

    public function importToInterlookAction()
    {
        $id = $this->request->query->get('id');
        $voucher_loader = $this->getDoctrine()->getRepository('App\Entity\Voucher');
        $voucher = $voucher_loader->find($id);

        $services = $voucher->getVoucherServices();
        $service_hotel = '';
        foreach ($services as $service) {
            if ($service->getServiceType() == 'HTL') {
                $service_hotel = $service;
            }
        }
        $from = $service_hotel->getCheckInDate();
        $to = $service_hotel->getCheckOutDate();
        $pax = $service_hotel->getServiceMaxPax();
        $room = $service_hotel->getServiceCode1();
        $age = array();
        $res_num = $voucher->getVoucherNo();
        $tourists = $service_hotel->getTourists();
        $arr_t = new ArrayOfTourist();
        $arr_t2 = new ArrayOfTourist();
        $tur_a = array();
        $tur_a2 = array();
        $n = -1;
        foreach ($tourists as $tourist) {

            $names = explode(" ", $tourist->getName());
            $sex_n = $tourist->getSex();
            //$sex_s = $map_sex[$sex_n];
            $bd = $tourist->getDateOfBirth();
            $tur = $this->get('interlook.create.reservation_constructor')
                ->createTourist($sex_n, $bd, $names[0], $names[1], $n);
            $n--;
            $tur_a[] = $tur;
            $tur_a2[] = clone  $tur;
            if ($tourist->getSex() == 'Child') {
                $age[] = $tourist->getAge();
            }
        }
        $arr_t->setTourist($tur_a);
        $arr_t2->setTourist($tur_a2);

//        dump($from);
//        dump($to);
//        dump($pax);

        $room_descriptions = array();
        $pansions = array();

        $soap_client = $this->get('interlook_soap_client');
        try {
            $guid = $soap_client
                ->Connect($this->getParameter('wsdl_user'),
                    $this->getParameter('wsdl_pass'));
        } catch (\SoapFault $fault) {
            //   <xmp> tag displays xml output in html
            dump($soap_client->__getLastRequest());
            dump($fault->getMessage());
        }
        dump($soap_client->__getLastRequest());
        $request_search_actual = new SearchActualCostCalculationVariantRequest
        (5353, new \DateTime('01-05-2018'), new \DateTime('10-09-2018'), false, true, 'EU');
        try {
            $dump = $soap_client->SearchActualCostCalculationVariant($guid->getConnectResult(), $request_search_actual);
        } catch (\SoapFault $fault) {
            // <xmp> tag displays xml output in html
//            dump($soap_client->__getLastRequest());
//            dump($fault->getMessage());
        }
//        dump($soap_client->__getLastRequest());
//        dump($soap_client->__getLastResponse());

        // dump($dump);
        foreach ($dump->getSearchActualCostCalculationVariantResult()->getData()->getCostCalculationVariant() as $d) {

            if ($d->getCountAdult() == $pax - count($age) && $d->getCountChildren() == count($age)) {

                $acc_id = $this->em->getRepository('App:Accommodation')->findBy(['interlook_id' => $d->getRoomAccommodationId()]);
                $ages_c = $acc_id[0]->getAccommodationAges()->getValues();
                if (!in_array($d->getPansionId(), $pansions)) {
                    $pansions[] = $d->getPansionId();
                }
                if ($ages_c != null) {
                    foreach ($ages_c as $ages) {

                        if (!$contains = 0 == count(array_intersect($age, range($ages->GetAgeFrom(), $ages->GetAgeTo())))) {
                            dump('CH');
                            dump($d);
                            $room_d = $soap_client->GetRoomDescriptions($d->getRoomTypeId(), $d->getRoomCategoryId());

                            $room_descriptions[] = $room_d->getGetRoomDescriptionsResult()->getAdditionalDescription()[0]->getID();

                        }
                    }
                } else {
                    dump('NOT');
                    dump($d);
                    $room_d = $soap_client->GetRoomDescriptions($d->getRoomTypeId(), $d->getRoomCategoryId());

                    $room_descriptions[] = $room_d->getGetRoomDescriptionsResult()->getAdditionalDescription()[0]->getID();


                }
            }
        }
        dump($room_descriptions);
        dump($pansions);
        dump($pax);
        dump($age);
        $search = new SearchHotelServiceRequest('100',
            '0',

            new \DateTime('01-06-2018'),
            new \DateTime('06-06-2018'),
            $pax,1,0);
        // $search->setRegionKeys();
        $search->setCityKeys([33]);
        $search->setHotelKeys([5353]);
        $search->setRoomDescriptionsKeys($room_descriptions);
        $search->setPansionKeys($pansions);
        $search->setAges($age);

        $search->setTariffs([0]);
        $responce = $soap_client->GetReservation($guid->getConnectResult(), 344203);
        dump($soap_client->__getLastResponse());
       // $ca = $this->get('interlook.sql.data')->getDogvor();
        $result = $soap_client->SearchHotelServices($guid->getConnectResult(), $search);
        $table = $result->getSearchHotelServicesResult()->getData()->getDataRequestResult();


        $str = $table[0]->getResultTable()->getAny();
        $extra_service = $table[0]->getAdditionalData()->getArrayOfAnyType();

        $pattern = '/(\S+)=["\']?((?:.(?!["\']?\s+(?:\S+)=|[>"\']))+.)["\']?/';
        $pattern2 = '/<DocumentElement\s[x]\w+[=]"">(.+)(<\/DocumentElement>)/';
        // Remove the actual namespace declaration using the Pattern
        $xml = preg_replace($pattern, '', $str);

        preg_match_all($pattern2, $xml, $matches, PREG_SET_ORDER, 0);
        $final_hotel = '<root>' . $matches[0][1] . '</root>';
        trim($final_hotel);
        $xml_hotel_services = $this->namespacedXMLToArray($final_hotel);

        if (is_array($xml_hotel_services->HotelServices)) {
            $hotelServices = array_map(function ($i) {
                return $i;
            }, $xml_hotel_services->HotelServices);
        } else {
            $hotelServices = $xml_hotel_services;
        }

        $extraServices = array_map(function ($i) {
            return $i->enc_value;
        }, $extra_service[0]->getAnyType());

        $pansionId = '';

        foreach ($hotelServices as $hs) {

            dump($hs);
            if (strpos($room, $hs->RtCode) !== false) {

                $pansionId = $hs->PnKey;
                $hotelId = $hs->HotelKey;
                $room_type_id = $hs->RtKey;
                $room_category_id = $hs->RcKey;
                $room_acc_id = $hs->AcKey;
                $name = $hs->HotelName;
                //dump($hs->PnKey);


            }
            $iner_es = array();
            foreach ($extraServices as $es) {

                if (in_array($es->getID(), explode(',', $hs->AddHots))) {
                    //dump(explode(',',$hs->AddHots));
                    $iner_es[] = $es->getID();
                    //  dump($es);

                }
            }
            dump($iner_es);
        }


        $arr_ts = $this->get('interlook.create.reservation_constructor')->TouristByService($arr_t);

        $duration = date_diff(new \DateTime('01-06-2018'), new \DateTime('06-06-2018'));
        $duration_in = $duration->format('%a');

        $rateNew = new Rate(1, false, false);
        $rateNew->setCode('EU');
        $rateNew->setCodeLat('EU');
        $reservationNew = new Reservation(0,
            -1,
            0.0,
            0.0, 4, 33, 0, 0.0, 'WaitingConfirmation',
            new \DateTime('01-06-2018'), new \DateTime('06-06-2018'), $duration_in, new \DateTime('now'), 0, 0,
            0, false);
        $reservationNew->setName($res_num);
        $hotelServiceNew = new HotelService(0, 0.0, $pax, 0, 'Request',
            0, new \DateTime('01-06-2018'), 0, $duration_in, 0.0, 0.0, 1, $pax, 1,
            0, $pansionId);
        $hotelServiceNew->setName($name);
        $hotelNew = new \App\Client\Soap\Hotel($hotelId, 0, 'None', 0,
            33, 0);
        $cityNew = new \App\Client\Soap\City(33, 4, 0);
        $hotelNew->setCity($cityNew);
        $roomNew = new \App\Client\Soap\Room($room_type_id, $room_category_id, $room_acc_id, 0);
        $hotelServiceNew->setHotel($hotelNew);
        $hotelServiceNew->setRoom($roomNew);
        $hotelServiceNew->setTourists($arr_t);
        $hservices = new ArrayOfService();
        $arr_hs = array($hotelServiceNew);

        $hservices->setService($arr_hs);
        $reservationNew->setRate($rateNew);
        $reservationNew->setServices($hservices);
        $aditionalPar = new ParameterPair('PCNId');

        $aditionalPar->setValue(new \SoapVar(0, XSD_INT, "int", "http://www.w3.org/2001/XMLSchema"));
        dump($aditionalPar);
        $arr_p = array();
        $arr_p[] = $aditionalPar;
        $arr_ap = new ArrayOfParameterPair();

        $arr_ap->setParameterPair($arr_p);
        dump($arr_ap);
        $reservationNew->setAdditionalParams($arr_ap);
        $reservationNew->setTourists($arr_t2);
        $reservationNew->setTouristServices($arr_ts);
        dump($reservationNew);
//      try {
//          ini_set('default_socket_timeout', 300);
//          $responce = $soap_client->CreateReservation($guid->getConnectResult(), $reservationNew);
//      } catch (\SoapFault $fault) {
//          // <xmp> tag displays xml output in html
//            dump($soap_client->__getLastRequest());
//           dump($fault->getMessage());
//
//      }
//        dump($soap_client->__getLastRequest());
//        dump($soap_client->__getLastResponse());

        // dump($responce);


        dump($ca);

        //  $ext_id = $responce->getCreateReservationResult()->getExternalID();
        // $rezerv = $soap_client->GetReservation($guid->getConnectResult(),$ext_id);


//        dump(ini_get('default_socket_timeout'));
//       $dd = $this->get('serializer');
//       $data = $dd->serialize($responce->getCreateReservationResult(),'json');
//       $data = $dd->deserialize($data ,'App\Client\Soap\Reservation','json');
//       dump($data);
//

//return $this->redirectToReferrer();


    }

//    protected function updateEntity($entity)
//    {
//
//
//        parent::updateEntity($entity); // TODO: Change the autogenerated stub
//    }

    function namespacedXMLToArray($xml)
    {
        // One function to both clean the XML string and return an array
        return json_decode(json_encode(simplexml_load_string($xml)));
    }

    public function syncAction()
    {
        $entity = $this->request->query->get('entity');
        $client = $this->get('interlook_soap_client');
        $em = $this->getDoctrine()->getManager();

        if ($entity == 'Country') {
            $countries = $client->GetCountries();
            foreach ($countries as $country) {
                $check = $em->getRepository('App:Country')->count(['interlook_id' => $country->getID()]);
                if (!$check) {
                    $country_data = new Country();
                    $country_data->setName($country->getName());
                    $country_data->setInterlookId($country->getID());
                    $em->persist($country_data);
                }

            }
        }

        if ($entity == 'Region') {
            $all_c = $em->getRepository('App:Country')->findAll();
            foreach ($all_c as $c) {
                $regions = $client->GetRegions($c->getInterlookId());
                foreach ($regions->getGetRegionsResult()->getRegion() as $region) {
                    $check = $em->getRepository('App:Region')->count(['interlook_id' => $region->getID()]);
                    if (!$check) {
                        $c_obj = $em->getRepository(Country::class)->findBy(['interlook_id' => $region->getCountryID()]);
                        $region_data = new Region();
                        $region_data->setName($region->getName());
                        $region_data->setInterlookId($region->getID());
                        $region_data->setCode($region->getCode());
                        $region_data->setDescription($region->getDescription());
                        $region_data->setCountry($c_obj[0]);
                        $em->persist($region_data);
                    }

                }
            }
        }
        if ($entity == 'City') {
            $all_r = $em->getRepository('App:Region')->findAll();
            foreach ($all_r as $r) {
                $cities = $client->GetCities('', $r->getInterlookId());
                if ($cities->getGetCitiesResult()->getCity()) {
                    foreach ($cities->getGetCitiesResult()->getCity() as $city) {
                        $check = $em->getRepository('App:City')->count(['interlook_id' => $city->getID()]);
                        if (!$check) {
                            $r_obj = $em->getRepository(Region::class)->findBy(['interlook_id' => $city->getRegionID()]);

                            $city_data = new City();
                            $city_data->setName($city->getName());
                            $city_data->setInterlookId($city->getID());
                            $city_data->setCode($city->getCode());
                            $city_data->setCountry($r->getCountry());
                            $city_data->setRegion($r_obj[0]);
                            $em->persist($city_data);
                        }

                    }
                }
            }
        }

        if ($entity == 'Rating') {
            $ratings = $client->GetRatings();
            foreach ($ratings->getGetRatingsResult()->getHotelCategory() as $rating) {
                $check = $em->getRepository('App:Rating')->count(['interlook_id' => $rating->getID()]);
                if (!$check) {
                    $rating_data = new Rating();
                    $rating_data->setName($rating->getName());
                    $rating_data->setInterlookId($rating->getID());
                    $em->persist($rating_data);
                }

            }


        }

        if ($entity == 'Hotel') {

            $hotels = $client->GetHotels(4, -1, -1);


            foreach ($hotels->getGetHotelsResult()->getHotel() as $hotel) {
                $check = $em->getRepository('App:Hotel')->count(['interlook_id' => $hotel->getID()]);
                if (!$check && $this->detectCyr($hotel->getName())) {

                    $c_obj = $em->getRepository(City::class)->findBy(['interlook_id' => $hotel->getCityID()]);
                    $r_obj = $em->getRepository(Region::class)->findBy(['interlook_id' => $hotel->getRegionID()]);
                    $rt_obj = $em->getRepository(Rating::class)->findBy(['interlook_id' => $hotel->getHotelCategoryID()]);

                    $hotel_data = new Hotel();

                    $hotel_data->setName($hotel->getName());
                    $hotel_data->setInterlookId($hotel->getID());
                    $hotel_data->setCode($hotel->getCode());
                    $hotel_data->setDescription($hotel->getDescription());
                    $hotel_data->setHotelCategory($rt_obj[0]);
                    $hotel_data->setCountCosts($hotel->getCountCosts());
                    $hotel_data->setPriceType($hotel->getPriceType());
                    $hotel_data->setCity($c_obj[0]);
                    $hotel_data->setRegion($r_obj[0]);

                    $em->persist($hotel_data);
                }

            }


        }
        if ($entity == 'Flight') {
            $flights = $client->GetFlights();
            foreach ($flights->getGetFlightsResult()->getFlight() as $flight) {
                $check = $em->getRepository('App:Flight')->count(['interlook_id' => $flight->getID()]);
                if (!$check) {
                    $flight_data = new Flight();
                    if ($flight->getAirportTo() != null) {
                        if ($em->getRepository(Airport::class)->count(['interlook_id' => $flight->getAirportFrom()->getID()])) {
                            $af_obj = $em->getRepository(Airport::class)->findBy(['interlook_id' => $flight->getAirportFrom()->getID()]);
                            $flight_data->setAirportFrom($af_obj[0]);
                        }
                    }
                    if ($flight->getAirportTo() != null) {
                        if ($em->getRepository(Airport::class)->count(['interlook_id' => $flight->getAirportTo()->getID()])) {

                            $at_obj = $em->getRepository(Airport::class)->findBy(['interlook_id' => $flight->getAirportTo()->getID()]);
                            $flight_data->setAirportTo($at_obj[0]);
                        }
                    }

                    $flight_data->setName($flight->getName());
                    $flight_data->setAirLine($flight->getAirLine());
                    $flight_data->setCityFrom($flight->getCityFrom());

                    $flight_data->setCityTo($flight->getCityTo());


                    $flight_data->setNumber($flight->getNumber());
                    $flight_data->setAvailable($flight->getAvailable());

                    $flight_data->setTimeFrom($flight->getTimeFrom());
                    $flight_data->setTimeTo($flight->getTimeTo());

                    $flight_data->setDateFrom($flight->getDateFrom());
                    $flight_data->setDateTo($flight->getDateTo());

                    $flight_data->setIsArrival($flight->getIsArrival());


                    $flight_data->setInterlookId($flight->getID());
                    $em->persist($flight_data);
                }


            }


        }

        if ($entity == 'Airport') {

            $airports = $client->GetAirport();

            foreach ($airports->getGetAirportResult()->getAirport() as $airport) {

                $check = $em->getRepository('App:Airport')->count(['interlook_id' => $airport->getID()]);
                if (!$check && $em->getRepository(City::class)->count(['interlook_id' => $airport->getCityID()])) {

                    $c_obj = $em->getRepository(City::class)->findBy(['interlook_id' => $airport->getCityID()]);
                    $r_obj = $em->getRepository(Region::class)->findBy(['interlook_id' => $airport->getRegionID()]);


                    $airport_data = new Airport();

                    $airport_data->setName($airport->getName());
                    $airport_data->setInterlookId($airport->getID());
                    $airport_data->setDescription($airport->getDescription());
                    $airport_data->setCity($c_obj[0]);
                    $airport_data->setRegion($r_obj[0]);
                    $em->persist($airport_data);
                }

            }


        }
        if ($entity == 'RoomType') {

            $room_types = $client->GetRoomType();

            foreach ($room_types->getGetRoomTypeResult()->getRoomType() as $room_type) {

                $check = $em->getRepository('App:RoomType')->count(['interlook_id' => $room_type->getID()]);
                if (!$check) {


                    $room_type_data = new RoomType();

                    $room_type_data->setName($room_type->getName());
                    $room_type_data->setInterlookId($room_type->getID());
                    $room_type_data->setDescription($room_type->getDescription());
                    $room_type_data->setPlaces($room_type->getPlaces());
                    $room_type_data->setExtPlaces($room_type->getExPlaces());
                    $room_type_data->setCode($room_type->getCode());

                    $em->persist($room_type_data);
                }

            }


        }
        if ($entity == 'RoomCategory') {

            $room_categories = $client->GetRoomCategories();

            foreach ($room_categories->getGetRoomCategoriesResult()->getRoomCategory() as $room_category) {

                $check = $em->getRepository('App:RoomCategory')->count(['interlook_id' => $room_category->getID()]);
                if (!$check) {


                    $room_category_data = new RoomCategory();

                    $room_category_data->setName($room_category->getName());
                    $room_category_data->setInterlookId($room_category->getID());
                    $room_category_data->setDescription($room_category->getDescription());
                    $room_category_data->setCode($room_category->getCode());
                    $room_category_data->setIsMain($room_category->getIsMain());

                    $em->persist($room_category_data);
                }

            }


        }
        if ($entity == 'Accommodation') {
            $guid = $client
                ->Connect($this->getParameter('wsdl_user'),
                    $this->getParameter('wsdl_pass'));
            $accommodations = $client->GetAccommodations($guid);

            foreach ($accommodations->getGetAccommodationsResult()->getData()->getAccomodationInfo() as $accommodation) {
//               if($accommodation->getName() == '2Ad'){
//                   dump($accommodation);
//                   exit;
//               }
                $check = $em->getRepository('App:Accommodation')->count(['interlook_id' => $accommodation->getID()]);
                if (!$check && $this->detectCyr($accommodation->getName())) {

                    $accommodation_data = new Accommodation();


                    // dump($accommodation);
//                    if($accommodation->getID() === 2220)
//                    {
//                        dump($accommodation);
//                        //exit;
//                    }

                    $accommodation_data->setName($accommodation->getName());
                    $accommodation_data->setInterlookId($accommodation->getID());
                    $accommodation_data->setCode($accommodation->getCode());
                    $accommodation_data->setIsPerRoom($accommodation->getIsPerRoom());
                    $accommodation_data->setUnicode($accommodation->getNameUnicode());
                    $accommodation_data->setCountAdultMain($accommodation->getCountAdultMain());
                    $accommodation_data->setCountChildMain($accommodation->getCountChildMain());
                    $accommodation_data->setCountAdultExtra($accommodation->getCountAdultExtra());
                    $accommodation_data->setCountChildExtra($accommodation->getCountChildExtra());
                    $accommodation_data->setChildrenAges($accommodation->getChildrenAges());
                    $accommodation_data->setIsWeb($accommodation->getIsWeb());
                    $accommodation_data->setIsPackage($accommodation->getIsPackage());
                    $accommodation_data->setUpdateDate($accommodation->getUpdateDate());
//                    if($accommodation->getID() === 2220)
//                    {
//                        dump($accommodation_data);
//                        exit;
//                    }
                    if ($accommodation->getChildrenAgesList()->getAccomadationAge() != null) {

                        foreach ($accommodation->getChildrenAgesList()->getAccomadationAge() as $aa) {

                            $data = new AccommodationAge();

                            $data->setIsMain($aa->getIsMain());
                            $data->setInterlookId($aa->getId());
                            $data->setCountMen($aa->getCountMen());
                            $data->setAgeFrom($aa->getAgeFrom());
                            $data->setAgeTo($aa->getAgeTo());
                            $data->setInterlookUpdateDate($aa->getUpdateDate());

                            $data->setAge($accommodation_data);

                            $em->persist($data);
                        }

                    }
                    $em->persist($accommodation_data);

                }
            }


        }

        if ($entity == 'Pansion') {

            $pansions = $client->GetPansions();

            foreach ($pansions->getGetPansionsResult()->getPansion() as $pansion) {

                $check = $em->getRepository('App:Pansion')->count(['interlook_id' => $pansion->getID()]);
                if (!$check) {


                    $pansion_data = new Pansion();

                    $pansion_data->setName($pansion->getName());
                    $pansion_data->setInterlookId($pansion->getID());
                    $pansion_data->setDescription($pansion->getDescription());
                    $pansion_data->setCode($pansion->getCode());

                    $em->persist($pansion_data);
                }

            }


        }
        if ($entity == 'RoomDescription') {

            $room_descriptions = $client->GetRoomDescriptions(-1, -1);

            foreach ($room_descriptions->getGetRoomDescriptionsResult()->getAdditionalDescription() as $room_description) {

                $check = $em->getRepository('App:RoomDescription')->count(['interlook_id' => $room_description->getID()]);
                if (!$check) {


                    $description_data = new RoomDescription();

                    $description_data->setName($room_description->getName());

                    $description_data->setInterlookId($room_description->getID());
                    $description_data->setDescription($room_description->getDescription());
                    $description_data->setCode($room_description->getCode());

                    $em->persist($description_data);
                }

            }


        }
        if ($entity == 'LogData') {


            $max = $em->getRepository('App:LogData')->findMaxID();
            $max_value = array_map(function ($i) {
                return $i[1];
            }, $max);
            //dump((integer)$max_value[0]);


            $MSSQL = $this->get('interlook.sql.data');

            if ($max_value[0] != null) {
                $responce = $MSSQL->getLogDataId((integer)$max_value[0]);
            } else {
                $responce = $MSSQL->getLogData();
            }


            if (!$responce) {
                return $this->redirectToReferrer();
            }

            array_map(function ($i) use ($em) {
                $temp = (explode(" ", $i->getLog()));
                $data = new LogData();
                //  dump($i->getComputer().''.$i->getId());
                $data->setInterlookId($i->getId());
                $data->setDate($i->getDate());
                $data->setComputer($i->getComputer());
                $data->setExecuteTime($i->getRemark());
                $data->setLog($temp[8]);
                $data->setHotelCount($temp[6]);
                $data->setExternalUserId($temp[50]);

                $em->persist($data);
            }

                , $responce);


        }
        if($entity == "InterlookWebSearchParners"){
            $max = $em->getRepository('App:InterlookWebSearchParners')->findMaxID();
            $max_value = null;

           if($max) {
               $max_value = array_map(function ($i) {
                   return $i[1];
               }, $max);

           }

            $MSSQL = $this->get('interlook.sql.data');
            if ($max_value[0] != null) {

                $responce = $MSSQL->getWebSearchesById((integer)$max_value[0]);
            } else {

                $responce = $MSSQL->getWebSearches();
            }


            if (!$responce) {
                return $this->redirectToReferrer();
            }

            array_map(function ($i) use ($em) {
                $temp = (explode(" ", $i->getLog()));
                $data = new InterlookWebSearchParners();


                $data->setInterlookId($i->getId());
                $data->setDate($i->getDate());
                $data->setComputer($i->getComputer());
                $data->setInterlookUser(intval($temp[3]));
                $em->persist($data);
            }
                , $responce);



        }
        if ($entity == 'InterlookWebUser') {


            $aval = $em->getRepository('App:LogData')
                ->findDistincUsers();
            $chek = $em->getRepository('App:InterlookWebUser')
                ->countP();
            $aval_real = $em->getRepository('App:InterlookWebUser')
                ->getNotExsist($aval,1);
            $not_found_1 = array_diff(array_column($aval, 'interlook_user'), array_column($aval_real, 'interlook_id'));

            $aval_2 = $em->getRepository('App:InterlookWebSearchParners')
                ->findDistincUsers();
            $aval_real_2 = $em->getRepository('App:InterlookWebUser')
                ->getNotExsist($aval_2,2);
            $not_found_2 = array_diff(array_column($aval_2, 'interlook_user'), array_column($aval_real_2, 'interlook_id'));

           if($not_found_1) {


               if (count($aval) == intval($chek[0]['1'])) {
                   return $this->redirectToReferrer();

               }

               $partners = $this->get('interlook.sql.data')
                   ->getPartners($not_found_1);

               array_map(function ($i) use ($em) {

                   $data = new InterlookWebUser();
                   $data->setName($i['name']);
                   $data->setInterlookId($i['id']);
                   $data->setLogin($i['login']);
                   $data->setPartnerId($i['partner_id']);
                   $data->setType(1);
                   $em->persist($data);
               }, $partners);
           }if($not_found_2){

                $partners_2 = $this->get('interlook.sql.data')
                    ->getPartners($not_found_2);


                array_map(function ($i) use ($em) {

                    $data = new InterlookWebUser();
                    $data->setName($i['name']);
                    $data->setInterlookId($i['id']);
                    $data->setLogin($i['login']);
                    $data->setPartnerId($i['partner_id']);
                    $data->setType(2);
                    $em->persist($data);
                }, $partners_2);


            }
           else{
               return $this->redirectToReferrer();
           }
        }
        $em->flush();


        return $this->redirectToReferrer();
    }


    function detectCyr($data)
    {
        $patern = '/^(?:\p{Cyrillic}+)|^[zZ?].?|[Zz]/u';
        preg_match($patern, $data, $matches, PREG_OFFSET_CAPTURE, 0);
        if ($matches) {

            return false;
        }

        return true;
    }

    protected function newAction()
    {
        if ($this->request->isMethod('POST') && $files = $this->request->files->get('xmlfile') != null) {
            $files = $this->request->files->get('xmlfile');
            $em = $this->getDoctrine()->getManager();

            foreach ($files['FormFile'] as $file) {
//
//            dump($file['xmlfile']->getClientOriginalName());
//            dump($file['xmlfile']->getFilename());
//            dump($file['xmlfile']->getClientMimeType());

                $filename = $file['xmlfile']->getClientOriginalName();
                $chek = $em->getRepository('App\Entity\XmlFile')->findOneBy(['xml_file' => $filename]);
                // dump($chek);
                if ($chek) {
                    return $this->redirectToReferrer();
                }
                $filelocal = $file['xmlfile']->move(
                    $this->get('kernel')->getRootDir() . '/../web/files/',
                    $filename
                );
                $import = new XmlFile();
                $import->setLocation('/files/' . $filelocal->getFilename());
                $import->setXmlFile($filelocal->getFilename());

                $em->persist($import);


                //      $xml = simplexml_load_file('/tmp/');
            }


            $em->flush();
            return $this->redirectToReferrer();
        }
        return parent::newAction(); // TODO: Change the autogenerated stub
    }


    protected function createNewEntity()
    {

        return parent::createNewEntity(); // TODO: Change the autogenerated stub
    }

}