<?php

namespace App\Client\Soap;

class ArrayOfHotelCategory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var HotelCategory[] $HotelCategory
     */
    protected $HotelCategory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return HotelCategory[]
     */
    public function getHotelCategory()
    {
      return $this->HotelCategory;
    }

    /**
     * @param HotelCategory[] $HotelCategory
     * @return \App\Client\Soap\ArrayOfHotelCategory
     */
    public function setHotelCategory(array $HotelCategory = null)
    {
      $this->HotelCategory = $HotelCategory;
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
      return isset($this->HotelCategory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return HotelCategory
     */
    public function offsetGet($offset)
    {
      return $this->HotelCategory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param HotelCategory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->HotelCategory[] = $value;
      } else {
        $this->HotelCategory[$offset] = $value;
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
      unset($this->HotelCategory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return HotelCategory Return the current element
     */
    public function current()
    {
      return current($this->HotelCategory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->HotelCategory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->HotelCategory);
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
      reset($this->HotelCategory);
    }

    /**
     * Countable implementation
     *
     * @return HotelCategory Return count of elements
     */
    public function count()
    {
      return count($this->HotelCategory);
    }

}
