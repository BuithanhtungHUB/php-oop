<?php

class QuadraticEquation
{
    public double $a;
    public double $b;
    public double $c;

    private function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function display(): string
    {
        return "Quadratic Equation: " . "a = " . $this->a . ", b = " . $this->b . ", c = " . $this->c;
    }

    public function getDiscriminant(): double
    {
        $delta = ($this->b * $this->b) - 4 * $this->a * $this->c;
        return $delta;
    }

    public function getRoot1(): double
    {
        $r1 = (-($this->b) + Math . pow(($this->b * $this->b) - 4 * $this->a * $this->c, 0.5)) / (2 * $this->a);
        return $r1;
    }

    public function getRoot2(): double
    {
        $r2 = (-($this->b) - Math . pow(($this->b * $this->b) - 4 * $this->a * $this->c, 0.5)) / (2 * $this->a);
        return $r2;
    }
}

?>
