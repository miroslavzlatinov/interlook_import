<?php

namespace App\Client\Soap;

class ArrayOfPansion implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Pansion[] $Pansion
     */
    protected $Pansion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Pansion[]
     */
    public function getPansion()
    {
      return $this->Pansion;
    }

    /**
     * @param Pansion[] $Pansion
     * @return \App\Client\Soap\ArrayOfPansion
     */
    public function setPansion(array $Pansion = null)
    {
      $this->Pansion = $Pansion;
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
      return isset($this->Pansion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Pansion
     */
    public function offsetGet($offset)
    {
      return $this->Pansion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Pansion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Pansion[] = $value;
      } else {
        $this->Pansion[$offset] = $value;
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
      unset($this->Pansion[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Pansion Return the current element
     */
    public function current()
    {
      return current($this->Pansion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Pansion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Pansion);
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
      reset($this->Pansion);
    }

    /**
     * Countable implementation
     *
     * @return Pansion Return count of elements
     */
    public function count()
    {
      return count($this->Pansion);
    }

}
