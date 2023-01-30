<?php

namespace KaidaBy;

use Exception;

class MultiException extends Exception implements \Iterator
{
    use IteratorTrait;

    /**
     * @param Exception $exception
     * @return void
     */
    public function add(Exception $exception)
    {
        $this->collection[] = $exception;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->collection);
    }
}
