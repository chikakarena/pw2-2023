<?php

class Calculator {

    private $number1;
    private $number2;

    public function __construct($number1, $number2) {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function add() {
        return $this->number1 + $this->number2;
    }

    public function subtract() {
        return $this->number1 - $this->number2;
    }

    public function multiply() {
        return $this->number1 * $this->number2;
    }

    public function divide() {
        if ($this->number2 == 0) {
            throw new Exception('Division by zero');
        }
        return $this->number1 / $this->number2;
    }
}

// Buat object dan tampilkan masing-masing method
$calculator = new Calculator(10, 5);

echo "10 + 5 = " . $calculator->add() . "<br>";
echo "10 - 5 = " . $calculator->subtract() . "<br>";
echo "10 * 5 = " . $calculator->multiply() . "<br>";
echo "10 / 5 = " . $calculator->divide() . "<br>";
?>