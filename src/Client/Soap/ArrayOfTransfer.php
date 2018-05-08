<?php

namespace App\Client\Soap;

class ArrayOfTransfer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Transfer[] $Transfer
     */
    protected $Transfer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Transfer[]
     */
    public function getTransfer()
    {
      return $this->Transfer;
    }

    /**
     * @param Transfer[] $Transfer
     * @return \App\Client\Soap\ArrayOfTransfer
     */
    public function setTransfer(array $Transfer = null)
    {
      $this->Transfer = $Transfer;
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
      return isset($this->Transfer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Transfer
     */
    public function offsetGet($offset)
    {
      return $this->Transfer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Transfer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Transfer[] = $value;
      } else {
        $this->Transfer[$offset] = $value;
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
      unset($this->Transfer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Transfer Return the current element
     */
    public function current()
    {
      return current($this->Transfer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Transfer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Transfer);
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
      reset($this->Transfer);
    }

    /**
     * Countable implementation
     *
     * @return Transfer Return count of elements
     */
    public function count()
    {
      return count($this->Transfer);
    }

}
