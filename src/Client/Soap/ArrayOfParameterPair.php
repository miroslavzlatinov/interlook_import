<?php

namespace App\Client\Soap;

class ArrayOfParameterPair implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ParameterPair[] $ParameterPair
     */
    protected $ParameterPair = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ParameterPair[]
     */
    public function getParameterPair()
    {
      return $this->ParameterPair;
    }

    /**
     * @param ParameterPair[] $ParameterPair
     * @return \App\Client\Soap\ArrayOfParameterPair
     */
    public function setParameterPair(array $ParameterPair = null)
    {
      $this->ParameterPair = $ParameterPair;
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
      return isset($this->ParameterPair[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ParameterPair
     */
    public function offsetGet($offset)
    {
      return $this->ParameterPair[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ParameterPair $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ParameterPair[] = $value;
      } else {
        $this->ParameterPair[$offset] = $value;
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
      unset($this->ParameterPair[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ParameterPair Return the current element
     */
    public function current()
    {
      return current($this->ParameterPair);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ParameterPair);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ParameterPair);
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
      reset($this->ParameterPair);
    }

    /**
     * Countable implementation
     *
     * @return ParameterPair Return count of elements
     */
    public function count()
    {
      return count($this->ParameterPair);
    }

}
