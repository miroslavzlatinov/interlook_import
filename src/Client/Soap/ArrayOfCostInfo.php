<?php

namespace App\Client\Soap;

class ArrayOfCostInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CostInfo[] $CostInfo
     */
    protected $CostInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostInfo[]
     */
    public function getCostInfo()
    {
      return $this->CostInfo;
    }

    /**
     * @param CostInfo[] $CostInfo
     * @return \App\Client\Soap\ArrayOfCostInfo
     */
    public function setCostInfo(array $CostInfo = null)
    {
      $this->CostInfo = $CostInfo;
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
      return isset($this->CostInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CostInfo
     */
    public function offsetGet($offset)
    {
      return $this->CostInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CostInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CostInfo[] = $value;
      } else {
        $this->CostInfo[$offset] = $value;
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
      unset($this->CostInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CostInfo Return the current element
     */
    public function current()
    {
      return current($this->CostInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CostInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CostInfo);
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
      reset($this->CostInfo);
    }

    /**
     * Countable implementation
     *
     * @return CostInfo Return count of elements
     */
    public function count()
    {
      return count($this->CostInfo);
    }

}
