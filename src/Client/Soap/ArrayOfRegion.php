<?php

namespace App\Client\Soap;

class ArrayOfRegion implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Region[] $Region
     */
    protected $Region = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Region[]
     */
    public function getRegion()
    {
      return $this->Region;
    }

    /**
     * @param Region[] $Region
     * @return \App\Client\Soap\ArrayOfRegion
     */
    public function setRegion(array $Region = null)
    {
      $this->Region = $Region;
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
      return isset($this->Region[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Region
     */
    public function offsetGet($offset)
    {
      return $this->Region[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Region $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Region[] = $value;
      } else {
        $this->Region[$offset] = $value;
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
      unset($this->Region[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Region Return the current element
     */
    public function current()
    {
      return current($this->Region);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Region);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Region);
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
      reset($this->Region);
    }

    /**
     * Countable implementation
     *
     * @return Region Return count of elements
     */
    public function count()
    {
      return count($this->Region);
    }

}
