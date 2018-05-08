<?php

namespace App\Client\Soap;

class ArrayOfTransport implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Transport[] $Transport
     */
    protected $Transport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Transport[]
     */
    public function getTransport()
    {
      return $this->Transport;
    }

    /**
     * @param Transport[] $Transport
     * @return \App\Client\Soap\ArrayOfTransport
     */
    public function setTransport(array $Transport = null)
    {
      $this->Transport = $Transport;
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
      return isset($this->Transport[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Transport
     */
    public function offsetGet($offset)
    {
      return $this->Transport[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Transport $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Transport[] = $value;
      } else {
        $this->Transport[$offset] = $value;
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
      unset($this->Transport[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Transport Return the current element
     */
    public function current()
    {
      return current($this->Transport);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Transport);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Transport);
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
      reset($this->Transport);
    }

    /**
     * Countable implementation
     *
     * @return Transport Return count of elements
     */
    public function count()
    {
      return count($this->Transport);
    }

}
