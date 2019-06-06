<?php
class QuadraticEquation
{
    public $a;
    public $b;
    public $c;
    public $delta;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * @return mixed
     */
    public function getDelta()
    {
        return $this->delta = $this->b * $this->b -($this->a * $this->c * 4);
    }

    public function getRoot1()
    {
        return (-$this->b + sqrt($this->delta)) / ($this->a * 2);
    }

    public function getRoot2()
    {
        return (-$this->b - sqrt($this->delta)) / ($this->a * 2);
    }

    public function getExprience()
    {
        return (-$this->b / 2 * $this->a);
    }
}
?>