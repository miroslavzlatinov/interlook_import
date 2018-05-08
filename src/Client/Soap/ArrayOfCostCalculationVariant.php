<?php

namespace App\Client\Soap;

class ArrayOfCostCalculationVariant implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CostCalculationVariant[] $CostCalculationVariant
     */
    protected $CostCalculationVariant = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostCalculationVariant[]
     */
    public function getCostCalculationVariant()
    {
      return $this->CostCalculationVariant;
    }

    /**
     * @param CostCalculationVariant[] $CostCalculationVariant
     * @return \App\Client\Soap\ArrayOfCostCalculationVariant
     */
    public function setCostCalculationVariant(array $CostCalculationVariant = null)
    {
      $this->CostCalculationVariant = $CostCalculationVariant;
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
      return isset($this->CostCalculationVariant[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CostCalculationVariant
     */
    public function offsetGet($offset)
    {
      return $this->CostCalculationVariant[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CostCalculationVariant $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CostCalculationVariant[] = $value;
      } else {
        $this->CostCalculationVariant[$offset] = $value;
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
      unset($this->CostCalculationVariant[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CostCalculationVariant Return the current element
     */
    public function current()
    {
      return current($this->CostCalculationVariant);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CostCalculationVariant);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CostCalculationVariant);
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
      reset($this->CostCalculationVariant);
    }

    /**
     * Countable implementation
     *
     * @return CostCalculationVariant Return count of elements
     */
    public function count()
    {
      return count($this->CostCalculationVariant);
    }

}
