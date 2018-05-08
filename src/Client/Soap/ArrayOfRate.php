<?php

namespace App\Client\Soap;

class ArrayOfRate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Rate[] $Rate
     */
    protected $Rate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Rate[]
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param Rate[] $Rate
     * @return \App\Client\Soap\ArrayOfRate
     */
    public function setRate(array $Rate = null)
    {
      $this->Rate = $Rate;
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
      return isset($this->Rate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Rate
     */
    public function offsetGet($offset)
    {
      return $this->Rate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Rate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Rate[] = $value;
      } else {
        $this->Rate[$offset] = $value;
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
      unset($this->Rate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Rate Return the current element
     */
    public function current()
    {
      return current($this->Rate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Rate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Rate);
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
      reset($this->Rate);
    }

    /**
     * Countable implementation
     *
     * @return Rate Return count of elements
     */
    public function count()
    {
      return count($this->Rate);
    }

}
