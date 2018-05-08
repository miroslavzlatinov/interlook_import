<?php

namespace App\Client\Soap;

class ArrayOfCOLinkService implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var COLinkService[] $COLinkService
     */
    protected $COLinkService = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return COLinkService[]
     */
    public function getCOLinkService()
    {
      return $this->COLinkService;
    }

    /**
     * @param COLinkService[] $COLinkService
     * @return \App\Client\Soap\ArrayOfCOLinkService
     */
    public function setCOLinkService(array $COLinkService = null)
    {
      $this->COLinkService = $COLinkService;
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
      return isset($this->COLinkService[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return COLinkService
     */
    public function offsetGet($offset)
    {
      return $this->COLinkService[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param COLinkService $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->COLinkService[] = $value;
      } else {
        $this->COLinkService[$offset] = $value;
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
      unset($this->COLinkService[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return COLinkService Return the current element
     */
    public function current()
    {
      return current($this->COLinkService);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->COLinkService);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->COLinkService);
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
      reset($this->COLinkService);
    }

    /**
     * Countable implementation
     *
     * @return COLinkService Return count of elements
     */
    public function count()
    {
      return count($this->COLinkService);
    }

}
