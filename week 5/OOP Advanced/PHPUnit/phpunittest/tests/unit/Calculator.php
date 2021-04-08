
<?php
class Calculator
{
    /**
     * Test to add two numbers
     *
     * @param int $number1 First number
     * @param int $number2 Second number
     */
    public function add($number1, $number2)
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            return false;
        }

        return $number1 + $number2;
    }

    /**
     * Test to subtract two numbers
     *
     * @param int $number1 First number
     * @param int $number2 Second number
     */
    public function subtract($number1, $number2)
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            return false;
        }

        return $number1 - $number2;
    }

    /**
     * Test to multiple two numbers
     *
     * @param int $number1 First number
     * @param int $number2 Second number
     */
    public function multiple($number1, $number2)
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            return false;
        }

        return $number1 * $number2;
    }

    /**
     * Test to divide two numbers
     *
     * @param int $number1 First number
     * @param int $number2 Second number
     */
    public function divide($number1, $number2)
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            return false;
        }

        return $number1 / $number2;
    }
}
?>