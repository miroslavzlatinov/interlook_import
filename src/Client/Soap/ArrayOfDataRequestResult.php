<?php

namespace App\Client\Soap;

class ArrayOfDataRequestResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DataRequestResult[] $DataRequestResult
     */
    protected $DataRequestResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DataRequestResult[]
     */
    public function getDataRequestResult()
    {
      return $this->DataRequestResult;
    }

    /**
     * @param DataRequestResult[] $DataRequestResult
     * @return \App\Client\Soap\ArrayOfDataRequestResult
     */
    public function setDataRequestResult(array $DataRequestResult = null)
    {
      $this->DataRequestResult = $DataRequestResult;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->DataRequestResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DataRequestResult
     */
    public function offsetGet($offset)
    {
      return $this->DataRequestResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DataRequestResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DataRequestResult[] = $value;
      } else {
        $this->DataRequestResult[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DataRequestResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DataRequestResult Return the current element
     */
    public function current()
    {
      return current($this->DataRequestResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DataRequestResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DataRequestResult);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->DataRequestResult);
    }

    /**
     * Countable implementation
     *
     * @return DataRequestResult Return count of elements
     */
    public function count()
    {
      return count($this->DataRequestResult);
    }

}
