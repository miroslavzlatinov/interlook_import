<?php

namespace App\Client\Soap;

class ArrayOfExcursion implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Excursion[] $Excursion
     */
    protected $Excursion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Excursion[]
     */
    public function getExcursion()
    {
      return $this->Excursion;
    }

    /**
     * @param Excursion[] $Excursion
     * @return \App\Client\Soap\ArrayOfExcursion
     */
    public function setExcursion(array $Excursion = null)
    {
      $this->Excursion = $Excursion;
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
      return isset($this->Excursion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Excursion
     */
    public function offsetGet($offset)
    {
      return $this->Excursion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Excursion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Excursion[] = $value;
      } else {
        $this->Excursion[$offset] = $value;
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
      unset($this->Excursion[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Excursion Return the current element
     */
    public function current()
    {
      return current($this->Excursion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Excursion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Excursion);
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
      reset($this->Excursion);
    }

    /**
     * Countable implementation
     *
     * @return Excursion Return count of elements
     */
    public function count()
    {
      return count($this->Excursion);
    }

}
