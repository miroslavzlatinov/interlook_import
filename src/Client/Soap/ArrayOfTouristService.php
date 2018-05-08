<?php

namespace App\Client\Soap;

class ArrayOfTouristService implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TouristService[] $TouristService
     */
    protected $TouristService = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TouristService[]
     */
    public function getTouristService()
    {
      return $this->TouristService;
    }

    /**
     * @param TouristService[] $TouristService
     * @return \App\Client\Soap\ArrayOfTouristService
     */
    public function setTouristService(array $TouristService = null)
    {
      $this->TouristService = $TouristService;
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
      return isset($this->TouristService[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TouristService
     */
    public function offsetGet($offset)
    {
      return $this->TouristService[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TouristService $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TouristService[] = $value;
      } else {
        $this->TouristService[$offset] = $value;
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
      unset($this->TouristService[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TouristService Return the current element
     */
    public function current()
    {
      return current($this->TouristService);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TouristService);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TouristService);
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
      reset($this->TouristService);
    }

    /**
     * Countable implementation
     *
     * @return TouristService Return count of elements
     */
    public function count()
    {
      return count($this->TouristService);
    }

}
