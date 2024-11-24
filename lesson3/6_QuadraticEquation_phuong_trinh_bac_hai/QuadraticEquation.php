<?php
class QuadraticEquation
{
    // Các thuộc tính private
    private $a;
    private $b;
    private $c;

    // Phương thức khởi tạo
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    // Các phương thức getter cho a, b, c
    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    // Phương thức tính discriminant (delta)
    public function getDiscriminant()
    {
        return pow($this->b, 2) - 4 * $this->a * $this->c;
    }

    // Phương thức tính nghiệm thứ nhất
    public function getRoot1()
    {
        $delta = $this->getDiscriminant();
        if ($delta >= 0) {
            return (-$this->b + sqrt($delta)) / (2 * $this->a);
        } else {
            return 0; // Không có nghiệm thực
        }
    }

    // Phương thức tính nghiệm thứ hai
    public function getRoot2()
    {
        $delta = $this->getDiscriminant();
        if ($delta >= 0) {
            return (-$this->b - sqrt($delta)) / (2 * $this->a);
        } else {
            return 0; // Không có nghiệm thực
        }
    }
}

?>