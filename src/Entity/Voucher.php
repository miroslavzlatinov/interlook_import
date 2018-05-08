<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VoucherRepository")
 */
class Voucher
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="voucher_no", type="integer")
     *
     *      *
     */

    private $voucherNo;

    /**
     * @var
     * @ORM\Column(name="record_type", type="text", length=10 )
     *
     */

    private $recordType;
    /**
     * @var
     * @ORM\Column(name="partner" , type="text", length=10)
     *
     */


    private $partner;

    /**
     * @var
     * @ORM\Column(name="comment_booking", type="text" , length=10)
     *
     */

    /**
     * @var
     *@ORM\Column(name="comment_booking", type="text", length=50)
     *
     */
    private $commentBooking;

    /**
     * @var VoucherServices
     * @ORM\OneToMany(targetEntity="App\Entity\VoucherServices", mappedBy="voucher" , cascade={"persist" ,"remove"})
     */

    private $voucherServices;

    /**
     * @var
     *
     */

    private $xml_file;


    public function __construct()
    {
        $this->voucherServices = new ArrayCollection();
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
    public function getVoucherNo()
    {
        return $this->voucherNo;
    }

    /**
     * @param mixed $voucherNo
     */
    public function setVoucherNo($voucherNo): void
    {
        $this->voucherNo = $voucherNo;
    }

    /**
     * @return mixed
     */
    public function getRecordType()
    {
        return $this->recordType;
    }

    /**
     * @param mixed $recordType
     */
    public function setRecordType($recordType): void
    {
        $this->recordType = $recordType;
    }

    /**
     * @return mixed
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * @param mixed $partner
     */
    public function setPartner($partner): void
    {
        $this->partner = $partner;
    }

    /**
     * @return mixed
     */
    public function getCommentBooking()
    {
        return $this->commentBooking;
    }

    /**
     * @param mixed $commentBooking
     */
    public function setCommentBooking($commentBooking): void
    {
        $this->commentBooking = $commentBooking;
    }

    /**
     * @return VoucherServices
     */
    public function getVoucherServices()
    {
        return $this->voucherServices;
    }

    /**
     * @param VoucherServices $voucherServices
     */
    public function setVoucherServices($voucherServices)
    {
        $this->voucherServices[] = $voucherServices;
    }


    public function getXmlFile()
    {

        return $this->xml_file;


    }

    public function setXmlFile($file)
    {
        $this->xml_file = $file;
    }


}
