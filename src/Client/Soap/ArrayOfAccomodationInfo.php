<?php

namespace App\Client\Soap;

class ArrayOfAccomodationInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccomodationInfo[] $AccomodationInfo
     */
    protected $AccomodationInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccomodationInfo[]
     */
    public function getAccomodationInfo()
    {
      return $this->AccomodationInfo;
    }

    /**
     * @param AccomodationInfo[] $AccomodationInfo
     * @return \App\Client\Soap\ArrayOfAccomodationInfo
     */
    public function setAccomodationInfo(array $AccomodationInfo = null)
    {
      $this->AccomodationInfo = $AccomodationInfo;
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
      return isset($this->AccomodationInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccomodationInfo
     */
    public function offsetGet($offset)
    {
      return $this->AccomodationInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccomodationInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AccomodationInfo[] = $value;
      } else {
        $this->AccomodationInfo[$offset] = $value;
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
      unset($this->AccomodationInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccomodationInfo Return the current element
     */
    public function current()
    {
      return current($this->AccomodationInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccomodationInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccomodationInfo);
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
      reset($this->AccomodationInfo);
    }

    /**
     * Countable implementation
     *
     * @return AccomodationInfo Return count of elements
     */
    public function count()
    {
      return count($this->AccomodationInfo);
    }

}
