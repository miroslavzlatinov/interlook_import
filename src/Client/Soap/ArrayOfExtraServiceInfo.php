<?php

namespace App\Client\Soap;

class ArrayOfExtraServiceInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ExtraServiceInfo[] $ExtraServiceInfo
     */
    protected $ExtraServiceInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExtraServiceInfo[]
     */
    public function getExtraServiceInfo()
    {
      return $this->ExtraServiceInfo;
    }

    /**
     * @param ExtraServiceInfo[] $ExtraServiceInfo
     * @return \App\Client\Soap\ArrayOfExtraServiceInfo
     */
    public function setExtraServiceInfo(array $ExtraServiceInfo = null)
    {
      $this->ExtraServiceInfo = $ExtraServiceInfo;
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
      return isset($this->ExtraServiceInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ExtraServiceInfo
     */
    public function offsetGet($offset)
    {
      return $this->ExtraServiceInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ExtraServiceInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ExtraServiceInfo[] = $value;
      } else {
        $this->ExtraServiceInfo[$offset] = $value;
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
      unset($this->ExtraServiceInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ExtraServiceInfo Return the current element
     */
    public function current()
    {
      return current($this->ExtraServiceInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ExtraServiceInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ExtraServiceInfo);
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
      reset($this->ExtraServiceInfo);
    }

    /**
     * Countable implementation
     *
     * @return ExtraServiceInfo Return count of elements
     */
    public function count()
    {
      return count($this->ExtraServiceInfo);
    }

}
