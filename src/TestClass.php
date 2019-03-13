<?php

declare(strict_types=1);

/**
 * Class TestClass
 * @template T
 */
class TestClass
{
    /** @psalm-var T */
    private $string;

    /**
     * TestClass constructor.
     *
     * @psalm-param T $string
     * @param $string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * @psalm-return T
     * @return mixed
     */
    public function getVal()
    {
        return $this->string;
    }

    /**
     * @psalm-param T $val
     * @param mixed $val
     */
    public function setVal($val): void
    {
        $this->string = $val;
    }
}
