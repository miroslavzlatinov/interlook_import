<?php

namespace App\Client\Soap;

class ArrayOfCOService implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var COService[] $COService
     */
    protected $COService = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return COService[]
     */
    public function getCOService()
    {
      return $this->COService;
    }

    /**
     * @param COService[] $COService
     * @return \App\Client\Soap\ArrayOfCOService
     */
    public function setCOService(array $COService = null)
    {
      $this->COService = $COService;
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
      return isset($this->COService[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return COService
     */
    public function offsetGet($offset)
    {
      return $this->COService[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param COService $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->COService[] = $value;
      } else {
        $this->COService[$offset] = $value;
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
      unset($this->COService[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return COService Return the current element
     */
    public function current()
    {
      return current($this->COService);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->COService);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->COService);
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
      reset($this->COService);
    }

    /**
     * Countable implementation
     *
     * @return COService Return count of elements
     */
    public function count()
    {
      return count($this->COService);
    }

}
