<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VoucherServicesRepository")
 */
class VoucherServices
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(name="check_in_date", type="date")
     *
     */

    private $checkInDate;

    /**
     * @var
     * @ORM\Column(name="check_out_date" , type="date")
     *
     */

    private $checkOutDate;

    /**
     * @var
     * @ORM\Column(name="service_type", type="text", length=10)
     *
     */

    private  $serviceType;   //Flight ; hotel

    /**
     * @var
     * @ORM\Column(name="service_id",type="text",length=10)
     *
     */

    private $serviceId;    // hotel_id

    /**
     * @var
     * @ORM\Column(name="service_count",type="integer", length=3)
     *
     */

    private $serviceCount;

    /**
     * @var
     * @ORM\Column(name="service_name",type="text", length=50)
     *
     *
     */

    private $serviceName;  //  hotel_name , Flight_Number

    /**
     * @var
     * @ORM\Column(name="service_max_pax", type="integer", length=3)
     *
     */
    private $serviceMaxPax; //

    /**
     * @var
     * @ORM\Column(name="service_code" ,type="text")
     *
     */

    private $serviceCode;  //  Arrival ;  Departure

    /**
     * @var
     * @ORM\Column(name="service_code1",type="text", length=20)
     */

    private $serviceCode1; //  room_type ; From

    /**
     * @var
     * @ORM\Column(name="service_code2",type="text", length=20)
     *
     */

    private $serviceCode2; //  board ; To

    /**
     *@ORM\ManyToOne(targetEntity="App\Entity\Voucher", inversedBy="voucherServices" , cascade={"persist"})
     * @ORM\JoinColumn(name="voucher_id", referencedColumnName="id")
     *
     */

    private $voucher;


    /**
     * @var Tourist
     * Many voucherServices have Many Tourists.
     * @ORM\ManyToMany(targetEntity="App\Entity\Tourist", inversedBy="voucherServices" ,cascade={"persist", "remove"})
     * @ORM\JoinTable(name="voucher_tourist_services")
     */

    private $tourists;

    public function __construct()
    {
        $this->tourists = new ArrayCollection();
    }

    public function __toString() {
        if($this->serviceType == 'HTL') {
            return  $this->getCheckInDate()->format('d/m/Y').' ---  '.$this->getCheckOutDate()->format('d/m/Y').''.$this->serviceType . '  ' . $this->serviceName . ' '.$this->serviceId.' '. $this->serviceCode . ' ' . $this->serviceCode1 . ' ' . $this->serviceCode2;
        }

        $type = $this->serviceId == '1' ? 'Arrival:':'Departure;';
        return $this->getCheckInDate()->format('d/m/Y').' '.$this->serviceType .' '.$type.' '.$this->serviceName . ' ' . $this->serviceCode.' '. $this->serviceCode1 . ' ' . $this->serviceCode2;
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
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * @param mixed $checkInDate
     */
    public function setCheckInDate($checkInDate): void
    {
        $this->checkInDate = $checkInDate;
    }

    /**
     * @return mixed
     */
    public function getCheckOutDate()
    {
        return $this->checkOutDate;
    }

    /**
     * @param mixed $checkOutDate
     */
    public function setCheckOutDate($checkOutDate): void
    {
        $this->checkOutDate = $checkOutDate;
    }

    /**
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param mixed $serviceType
     */
    public function setServiceType($serviceType): void
    {
        $this->serviceType = $serviceType;
    }

    /**
     * @return mixed
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param mixed $serviceId
     */
    public function setServiceId($serviceId): void
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @return mixed
     */
    public function getServiceCount()
    {
        return $this->serviceCount;
    }

    /**
     * @param mixed $serviceCount
     */
    public function setServiceCount($serviceCount): void
    {
        $this->serviceCount = $serviceCount;
    }

    /**
     * @return mixed
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * @param mixed $serviceName
     */
    public function setServiceName($serviceName): void
    {
        $this->serviceName = $serviceName;
    }

    /**
     * @return mixed
     */
    public function getServiceMaxPax()
    {
        return $this->serviceMaxPax;
    }

    /**
     * @param mixed $serviceMaxPax
     */
    public function setServiceMaxPax($serviceMaxPax): void
    {
        $this->serviceMaxPax = $serviceMaxPax;
    }

    /**
     * @return mixed
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * @param mixed $serviceCode
     */
    public function setServiceCode($serviceCode): void
    {
        $this->serviceCode = $serviceCode;
    }

    /**
     * @return mixed
     */
    public function getServiceCode1()
    {
        return $this->serviceCode1;
    }

    /**
     * @param mixed $serviceCode1
     */
    public function setServiceCode1($serviceCode1): void
    {
        $this->serviceCode1 = $serviceCode1;
    }

    /**
     * @return mixed
     */
    public function getServiceCode2()
    {
        return $this->serviceCode2;
    }

    /**
     * @param mixed $serviceCode2
     */
    public function setServiceCode2($serviceCode2): void
    {
        $this->serviceCode2 = $serviceCode2;
    }

    /**
     * @return mixed
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * @param mixed $voucher
     */
    public function setVoucher($voucher): void
    {
        $this->voucher = $voucher;
    }

    /**
     * @return Tourist
     */
    public function getTourists()
    {
        return $this->tourists;
    }

    /**
     * @param Tourist $tourists
     */
    public function setTourists($tourists): void
    {
        $this->tourists[] = $tourists;
    }


}
