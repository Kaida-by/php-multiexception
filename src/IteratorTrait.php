<?php

namespace KaidaBy;

trait IteratorTrait
{
    protected $collection = [];

    /**
     * @return false|mixed
     */
    public function current()
    {
        return current($this->collection);
    }

    /**
     * @return int|string|null
     */
    public function key()
    {
        return key($this->collection);
    }

    /**
     * @return void
     */
    public function next()
    {
        next($this->collection);
    }

    /**
     * @return void
     */
    public function rewind()
    {
        reset($this->collection);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return null !== key($this->collection);
    }
}
