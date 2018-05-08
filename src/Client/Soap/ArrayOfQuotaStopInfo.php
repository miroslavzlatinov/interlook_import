<?php

namespace App\Client\Soap;

class ArrayOfQuotaStopInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuotaStopInfo[] $QuotaStopInfo
     */
    protected $QuotaStopInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuotaStopInfo[]
     */
    public function getQuotaStopInfo()
    {
      return $this->QuotaStopInfo;
    }

    /**
     * @param QuotaStopInfo[] $QuotaStopInfo
     * @return \App\Client\Soap\ArrayOfQuotaStopInfo
     */
    public function setQuotaStopInfo(array $QuotaStopInfo = null)
    {
      $this->QuotaStopInfo = $QuotaStopInfo;
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
      return isset($this->QuotaStopInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuotaStopInfo
     */
    public function offsetGet($offset)
    {
      return $this->QuotaStopInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuotaStopInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuotaStopInfo[] = $value;
      } else {
        $this->QuotaStopInfo[$offset] = $value;
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
      unset($this->QuotaStopInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuotaStopInfo Return the current element
     */
    public function current()
    {
      return current($this->QuotaStopInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuotaStopInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuotaStopInfo);
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
      reset($this->QuotaStopInfo);
    }

    /**
     * Countable implementation
     *
     * @return QuotaStopInfo Return count of elements
     */
    public function count()
    {
      return count($this->QuotaStopInfo);
    }

}
