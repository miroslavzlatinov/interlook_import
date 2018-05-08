<?php

namespace App\Client\Soap;

class ArrayOfSPOInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SPOInfo[] $SPOInfo
     */
    protected $SPOInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SPOInfo[]
     */
    public function getSPOInfo()
    {
      return $this->SPOInfo;
    }

    /**
     * @param SPOInfo[] $SPOInfo
     * @return \App\Client\Soap\ArrayOfSPOInfo
     */
    public function setSPOInfo(array $SPOInfo = null)
    {
      $this->SPOInfo = $SPOInfo;
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
      return isset($this->SPOInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SPOInfo
     */
    public function offsetGet($offset)
    {
      return $this->SPOInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SPOInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SPOInfo[] = $value;
      } else {
        $this->SPOInfo[$offset] = $value;
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
      unset($this->SPOInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SPOInfo Return the current element
     */
    public function current()
    {
      return current($this->SPOInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SPOInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SPOInfo);
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
      reset($this->SPOInfo);
    }

    /**
     * Countable implementation
     *
     * @return SPOInfo Return count of elements
     */
    public function count()
    {
      return count($this->SPOInfo);
    }

}
