<?php

namespace App\Client\Soap;

class ArrayOfArrayOfAnyType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArrayOfAnyType[] $ArrayOfAnyType
     */
    protected $ArrayOfAnyType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfAnyType[]
     */
    public function getArrayOfAnyType()
    {
      return $this->ArrayOfAnyType;
    }

    /**
     * @param ArrayOfAnyType[] $ArrayOfAnyType
     * @return \App\Client\Soap\ArrayOfArrayOfAnyType
     */
    public function setArrayOfAnyType(array $ArrayOfAnyType = null)
    {
      $this->ArrayOfAnyType = $ArrayOfAnyType;
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
      return isset($this->ArrayOfAnyType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArrayOfAnyType
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfAnyType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArrayOfAnyType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfAnyType[] = $value;
      } else {
        $this->ArrayOfAnyType[$offset] = $value;
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
      unset($this->ArrayOfAnyType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArrayOfAnyType Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfAnyType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfAnyType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfAnyType);
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
      reset($this->ArrayOfAnyType);
    }

    /**
     * Countable implementation
     *
     * @return ArrayOfAnyType Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfAnyType);
    }

}
