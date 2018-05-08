<?php

namespace App\External\Dogovor;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartnersRepository")
 */
class Partners
{
    /**
     * @ORM\Id
     *
     * @ORM\Column(name="PR_KEY",type="integer")
     */
    private $id;
    /**
     * @var
     * @ORM\Column(name="PR_NAME", type="string" , length=60)
     */
    private $name;

    /**
     * @var
     * @ORM\Column(name="PRADDRESS", type="string",length=160)
     */

    private $address;
    /**
     * @var
     * @ORM\Column(name="PR_PHONES",type="string",length=50)
     */

    private $phones;
    /**
     * @var
     * @ORM\Column(name="PR_FAX",type="string",length=20)
     */
    private $fax;

    /**
     * @var
     * @ORM\Column(name="PR_CTKEY",type="integer")
     */
    private $city_key;
    /**
     * @var
     * @ORM\Column(name="PR_EMAIL" , type="string" , length=50)
     */

    private $email;
    /**
     * @var
     * @ORM\Column(name="PR_COHKEY",type="integer")
     */

    private $cohkey;

    /**
     * @var
     * @ORM\Column(name="PR_CODE", type="string", length=5)
     */
    private $code;

    /**
     * @var
     * @ORM\Column(name="PR_MANAGERNAME" , type="string",length=40)
     */
    private $manager_name;

    /**
     * @var
     * @ORM\Column(name="PR_RESMANAGERNAME", type="string", length=40)
     */
    private $res_manager_name;

    /**
     * @var
     * @ORM\Column(name="PR_MAXCHILDAGE", type="integer")
     */
    private $max_chd_age;

    /**
     * @var
     * @ORM\Column(name="PR_AUTO",type="integer")
     */
    private $auto;

    /**
     * @var
     * @ORM\Column(name="PR_NOSHOW" ,type="smallint")
     */
    private $no_show;

    /**
     * @var
     * @ORM\Column(name="PR_SORTNUMBER" , type="string", length=8)
     */
    private $sort_number;

    /**
     * @var
     * @ORM\Column(name="PR_FREECANCEL" , type="smallint")
     */
    private $free_cancel;

    /**
     * @var
     * @ORM\Column(name="PR_MRKEY" , type="integer")
     */
    private $market_id;

    /**
     * @var
     * @ORM\Column(name="PR_WEBSTATUS", type="smallint")
     */
    private $web_status;
    /**
     * @var
     * @ORM\Column(name="PR_GRKEY" , type="integer")
     */
    private $group_id;

    /**
     * @var
     * @ORM\Column(name="PR_AUTOINVOICE" , type="smallint")
     */
    private $auto_invoice;
    /**
     * @var
     * @ORM\Column(name="PR_ACCOUNTNUM1",type="string", length=15)
     */
    private $account_num1;

    /**
     * @var
     * @ORM\Column(name="PR_ACCOUNTNUM12",type="string", length=15)
     */
    private $account_num2;

    /**
     * @var
     * @ORM\Column(name="PR_ACCOUNTNUM3",type="string", length=15)
     */
    private $account_num3;
    /**
     * @var
     * @ORM\Column(name="PR_ALTKEY" , type="integer")
     */
    private $alt_key;

    /**
     * @var
     * @ORM\Column(name="PR_NIGHTSPENALTY" , type="smallint")
     */
    private $nights_penalty;

    /**
     * @var
     * @ORM\Column(name="PR_VATPCT" , type="smallint")
     */
    private $vat_pct;

    /**
     * @var
     * @ORM\Column(name="PR_ShowVAT" , type="smallint")
     */
    private $show_vat;

    /**
     * @var
     * @ORM\Column(name="PR_MajorOwner" , type="smallint")
     */
    private $major_owner;

    /**
     * @var
     * @ORM\Column(name="PR_NOTES" , type="text")
     */
    private $notes;

    /**
     * @var
     * @ORM\Column(name="PR_AutoStop" , type="smallint")
     */
    private $auto_stop;

    /**
     * @var
     * @ORM\Column(name="PR_WebSite" ,type="string" , length=200)
     */
    private $web_site;
    /**
     * @var
     * @ORM\Column(name="PR_AvailableAllYear")
     */

    private $available_all_year;

    /**
     * @var
     * @ORM\Column(name="PR_UpdateDate" , type="datetime")
     */
    private $update_date;

    /**
     * @var
     * @ORM\Column(name="PR_Latitude" , type="float")
     */
    private $latitude;

    /**
     * @var
     * @ORM\Column(name="PR_Longitude" , type="float")
     */
    private $longitude;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param mixed $phones
     */
    public function setPhones($phones): void
    {
        $this->phones = $phones;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getCityKey()
    {
        return $this->city_key;
    }

    /**
     * @param mixed $city_key
     */
    public function setCityKey($city_key): void
    {
        $this->city_key = $city_key;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCohkey()
    {
        return $this->cohkey;
    }

    /**
     * @param mixed $cohkey
     */
    public function setCohkey($cohkey): void
    {
        $this->cohkey = $cohkey;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getManagerName()
    {
        return $this->manager_name;
    }

    /**
     * @param mixed $manager_name
     */
    public function setManagerName($manager_name): void
    {
        $this->manager_name = $manager_name;
    }

    /**
     * @return mixed
     */
    public function getResManagerName()
    {
        return $this->res_manager_name;
    }

    /**
     * @param mixed $res_manager_name
     */
    public function setResManagerName($res_manager_name): void
    {
        $this->res_manager_name = $res_manager_name;
    }

    /**
     * @return mixed
     */
    public function getMaxChdAge()
    {
        return $this->max_chd_age;
    }

    /**
     * @param mixed $max_chd_age
     */
    public function setMaxChdAge($max_chd_age): void
    {
        $this->max_chd_age = $max_chd_age;
    }

    /**
     * @return mixed
     */
    public function getAuto()
    {
        return $this->auto;
    }

    /**
     * @param mixed $auto
     */
    public function setAuto($auto): void
    {
        $this->auto = $auto;
    }

    /**
     * @return mixed
     */
    public function getNoShow()
    {
        return $this->no_show;
    }

    /**
     * @param mixed $no_show
     */
    public function setNoShow($no_show): void
    {
        $this->no_show = $no_show;
    }

    /**
     * @return mixed
     */
    public function getSortNumber()
    {
        return $this->sort_number;
    }

    /**
     * @param mixed $sort_number
     */
    public function setSortNumber($sort_number): void
    {
        $this->sort_number = $sort_number;
    }

    /**
     * @return mixed
     */
    public function getFreeCancel()
    {
        return $this->free_cancel;
    }

    /**
     * @param mixed $free_cancel
     */
    public function setFreeCancel($free_cancel): void
    {
        $this->free_cancel = $free_cancel;
    }

    /**
     * @return mixed
     */
    public function getMarketId()
    {
        return $this->market_id;
    }

    /**
     * @param mixed $market_id
     */
    public function setMarketId($market_id): void
    {
        $this->market_id = $market_id;
    }

    /**
     * @return mixed
     */
    public function getWebStatus()
    {
        return $this->web_status;
    }

    /**
     * @param mixed $web_status
     */
    public function setWebStatus($web_status): void
    {
        $this->web_status = $web_status;
    }

    /**
     * @return mixed
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @param mixed $group_id
     */
    public function setGroupId($group_id): void
    {
        $this->group_id = $group_id;
    }

    /**
     * @return mixed
     */
    public function getAutoInvoice()
    {
        return $this->auto_invoice;
    }

    /**
     * @param mixed $auto_invoice
     */
    public function setAutoInvoice($auto_invoice): void
    {
        $this->auto_invoice = $auto_invoice;
    }

    /**
     * @return mixed
     */
    public function getAccountNum1()
    {
        return $this->account_num1;
    }

    /**
     * @param mixed $account_num1
     */
    public function setAccountNum1($account_num1): void
    {
        $this->account_num1 = $account_num1;
    }

    /**
     * @return mixed
     */
    public function getAccountNum2()
    {
        return $this->account_num2;
    }

    /**
     * @param mixed $account_num2
     */
    public function setAccountNum2($account_num2): void
    {
        $this->account_num2 = $account_num2;
    }

    /**
     * @return mixed
     */
    public function getAccountNum3()
    {
        return $this->account_num3;
    }

    /**
     * @param mixed $account_num3
     */
    public function setAccountNum3($account_num3): void
    {
        $this->account_num3 = $account_num3;
    }

    /**
     * @return mixed
     */
    public function getAltKey()
    {
        return $this->alt_key;
    }

    /**
     * @param mixed $alt_key
     */
    public function setAltKey($alt_key): void
    {
        $this->alt_key = $alt_key;
    }

    /**
     * @return mixed
     */
    public function getNightsPenalty()
    {
        return $this->nights_penalty;
    }

    /**
     * @param mixed $nights_penalty
     */
    public function setNightsPenalty($nights_penalty): void
    {
        $this->nights_penalty = $nights_penalty;
    }

    /**
     * @return mixed
     */
    public function getVatPct()
    {
        return $this->vat_pct;
    }

    /**
     * @param mixed $vat_pct
     */
    public function setVatPct($vat_pct): void
    {
        $this->vat_pct = $vat_pct;
    }

    /**
     * @return mixed
     */
    public function getShowVat()
    {
        return $this->show_vat;
    }

    /**
     * @param mixed $show_vat
     */
    public function setShowVat($show_vat): void
    {
        $this->show_vat = $show_vat;
    }

    /**
     * @return mixed
     */
    public function getMajorOwner()
    {
        return $this->major_owner;
    }

    /**
     * @param mixed $major_owner
     */
    public function setMajorOwner($major_owner): void
    {
        $this->major_owner = $major_owner;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes): void
    {
        $this->notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getAutoStop()
    {
        return $this->auto_stop;
    }

    /**
     * @param mixed $auto_stop
     */
    public function setAutoStop($auto_stop): void
    {
        $this->auto_stop = $auto_stop;
    }

    /**
     * @return mixed
     */
    public function getWebSite()
    {
        return $this->web_site;
    }

    /**
     * @param mixed $web_site
     */
    public function setWebSite($web_site): void
    {
        $this->web_site = $web_site;
    }

    /**
     * @return mixed
     */
    public function getAvailableAllYear()
    {
        return $this->available_all_year;
    }

    /**
     * @param mixed $available_all_year
     */
    public function setAvailableAllYear($available_all_year): void
    {
        $this->available_all_year = $available_all_year;
    }

    /**
     * @return mixed
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * @param mixed $update_date
     */
    public function setUpdateDate($update_date): void
    {
        $this->update_date = $update_date;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
    }




}
