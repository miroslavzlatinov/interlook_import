<?php

namespace App\Client\Soap;

class ArrayOfAdditionalDescription implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdditionalDescription[] $AdditionalDescription
     */
    protected $AdditionalDescription = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdditionalDescription[]
     */
    public function getAdditionalDescription()
    {
      return $this->AdditionalDescription;
    }

    /**
     * @param AdditionalDescription[] $AdditionalDescription
     * @return \App\Client\Soap\ArrayOfAdditionalDescription
     */
    public function setAdditionalDescription(array $AdditionalDescription = null)
    {
      $this->AdditionalDescription = $AdditionalDescription;
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
      return isset($this->AdditionalDescription[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdditionalDescription
     */
    public function offsetGet($offset)
    {
      return $this->AdditionalDescription[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdditionalDescription $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdditionalDescription[] = $value;
      } else {
        $this->AdditionalDescription[$offset] = $value;
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
      unset($this->AdditionalDescription[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdditionalDescription Return the current element
     */
    public function current()
    {
      return current($this->AdditionalDescription);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdditionalDescription);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdditionalDescription);
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
      reset($this->AdditionalDescription);
    }

    /**
     * Countable implementation
     *
     * @return AdditionalDescription Return count of elements
     */
    public function count()
    {
      return count($this->AdditionalDescription);
    }

}
