<?php

namespace App\Client\Soap;

class ArrayOfStatusService implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StatusService[] $StatusService
     */
    protected $StatusService = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StatusService[]
     */
    public function getStatusService()
    {
      return $this->StatusService;
    }

    /**
     * @param StatusService[] $StatusService
     * @return \App\Client\Soap\ArrayOfStatusService
     */
    public function setStatusService(array $StatusService = null)
    {
      $this->StatusService = $StatusService;
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
      return isset($this->StatusService[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StatusService
     */
    public function offsetGet($offset)
    {
      return $this->StatusService[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StatusService $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->StatusService[] = $value;
      } else {
        $this->StatusService[$offset] = $value;
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
      unset($this->StatusService[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StatusService Return the current element
     */
    public function current()
    {
      return current($this->StatusService);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->StatusService);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->StatusService);
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
      reset($this->StatusService);
    }

    /**
     * Countable implementation
     *
     * @return StatusService Return count of elements
     */
    public function count()
    {
      return count($this->StatusService);
    }

}
