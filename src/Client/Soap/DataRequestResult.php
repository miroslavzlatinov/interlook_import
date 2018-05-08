<?php

namespace App\Client\Soap;

class DataRequestResult
{

    /**
     * @var ResultTable $ResultTable
     */
    protected $ResultTable = null;

    /**
     * @var ArrayOfString $ColunmNames
     */
    protected $ColunmNames = null;

    /**
     * @var ArrayOfString $ColumnNamesForDisplay
     */
    protected $ColumnNamesForDisplay = null;

    /**
     * @var ArrayOfString $ColumnHeaderForDisplay
     */
    protected $ColumnHeaderForDisplay = null;

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var int $PageSize
     */
    protected $PageSize = null;

    /**
     * @var int $PageIndex
     */
    protected $PageIndex = null;

    /**
     * @var boolean $IsLastPage
     */
    protected $IsLastPage = null;

    /**
     * @var ArrayOfArrayOfAnyType $AdditionalData
     */
    protected $AdditionalData = null;

    /**
     * @var string $ResponseGuid
     */
    protected $ResponseGuid = null;

    /**
     * @param int $TotalCount
     * @param int $PageSize
     * @param int $PageIndex
     * @param boolean $IsLastPage
     */
    public function __construct($TotalCount, $PageSize, $PageIndex, $IsLastPage)
    {
      $this->TotalCount = $TotalCount;
      $this->PageSize = $PageSize;
      $this->PageIndex = $PageIndex;
      $this->IsLastPage = $IsLastPage;
    }

    /**
     * @return ResultTable
     */
    public function getResultTable()
    {
      return $this->ResultTable;
    }

    /**
     * @param ResultTable $ResultTable
     * @return \App\Client\Soap\DataRequestResult
     */
    public function setResultTable($ResultTable)
    {
      $this->ResultTable = $ResultTable;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getColunmNames()
    {
      return $this->ColunmNames;
    }

    /**
     * @param ArrayOfString $ColunmNames
     * @return \App\Client\Soap\DataRequestResult
     */
    public function setColunmNames($ColunmNames)
    {
      $this->ColunmNames = $ColunmNames;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getColumnNamesForDisplay()
    {
      return $this->ColumnNamesForDisplay;
    }

    /**
     * @param ArrayOfString $ColumnNamesForDisplay
     * @return \App\Client\Soap\DataRequestResult
     */
    public function setColumnNamesForDisplay($ColumnNamesForDisplay)
    {
      $this->ColumnNamesForDisplay = $ColumnNamesForDisplay;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getColumnHeaderForDisplay()
    {
      return $this->ColumnHeaderForDisplay;
    }

    /**
     * @param ArrayOfString $ColumnHeaderForDisplay
     * @return \App\Client\Soap\DataRequestResult
     */
    public function setColumnHeaderForDisplay($ColumnHeaderForDisplay)
    {
      $this->ColumnHeaderForDisplay = $ColumnHeaderForDisplay;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->TotalCount;
    }

    /**
     * @param int $TotalCount
     * @return \App\Client\Soap\DataRequestResult
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->PageSize;
    }

    /**
     * @param int $PageSize
     * @return \App\Client\Soap\DataRequestResult
     */
    public function setPageSize($PageSize)
    {
      $this->PageSize = $PageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageIndex()
    {
      return $this->PageIndex;
    }

    /**
     * @param int $PageIndex
     * @return \App\Client\Soap\DataRequestResult
     */
    public function setPageIndex($PageIndex)
    {
      $this->PageIndex = $PageIndex;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLastPage()
    {
      return $this->IsLastPage;
    }

    /**
     * @param boolean $IsLastPage
     * @return \App\Client\Soap\DataRequestResult
     */
    public function setIsLastPage($IsLastPage)
    {
      $this->IsLastPage = $IsLastPage;
      return $this;
    }

    /**
     * @return ArrayOfArrayOfAnyType
     */
    public function getAdditionalData()
    {
      return $this->AdditionalData;
    }

    /**
     * @param ArrayOfArrayOfAnyType $AdditionalData
     * @return \App\Client\Soap\DataRequestResult
     */
    public function setAdditionalData($AdditionalData)
    {
      $this->AdditionalData = $AdditionalData;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseGuid()
    {
      return $this->ResponseGuid;
    }

    /**
     * @param string $ResponseGuid
     * @return \App\Client\Soap\DataRequestResult
     */
    public function setResponseGuid($ResponseGuid)
    {
      $this->ResponseGuid = $ResponseGuid;
      return $this;
    }

}
