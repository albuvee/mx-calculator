<?php

/**
 * Stack for the postfix/infix conversion of math expressions.
 *
 * @since 1.0.0
 */
class EvalMathStack
{
    /**
     * The stack.
     *
     * @since 1.0.0
     *
     * @var array
     */
    protected $stack = array();

    /**
     * Number of items on the stack.
     *
     * @since 1.0.0
     *
     * @var int
     */
    public $count = 0;

    /**
     * Push an item onto the stack.
     *
     * @since 1.0.0
     *
     * @param mixed $value the item that is pushed onto the stack
     */
    public function push($value)
    {
        $this->stack[$this->count] = $value;
        ++$this->count;
    }

    /**
     * Pop an item from the top of the stack.
     *
     * @since 1.0.0
     *
     * @return mixed the item that is popped from the stack
     */
    public function pop()
    {
        if ($this->count > 0) {
            --$this->count;

            return $this->stack[$this->count];
        }

        return null;
    }

    /**
     * Pop an item from the end of the stack.
     *
     * @since 1.0.0
     *
     * @param int $n count from the end of the stack
     *
     * @return mixed the item that is popped from the stack
     */
    public function last($n = 1)
    {
        if (($this->count - $n) >= 0) {
            return $this->stack[$this->count - $n];
        }

        return null;
    }
}
