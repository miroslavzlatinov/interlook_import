<?php

namespace App\Client\Soap;

class ArrayOfServiceList implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceList[] $ServiceList
     */
    protected $ServiceList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceList[]
     */
    public function getServiceList()
    {
      return $this->ServiceList;
    }

    /**
     * @param ServiceList[] $ServiceList
     * @return \App\Client\Soap\ArrayOfServiceList
     */
    public function setServiceList(array $ServiceList = null)
    {
      $this->ServiceList = $ServiceList;
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
      return isset($this->ServiceList[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceList
     */
    public function offsetGet($offset)
    {
      return $this->ServiceList[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceList $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ServiceList[] = $value;
      } else {
        $this->ServiceList[$offset] = $value;
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
      unset($this->ServiceList[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceList Return the current element
     */
    public function current()
    {
      return current($this->ServiceList);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceList);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceList);
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
      reset($this->ServiceList);
    }

    /**
     * Countable implementation
     *
     * @return ServiceList Return count of elements
     */
    public function count()
    {
      return count($this->ServiceList);
    }

}
