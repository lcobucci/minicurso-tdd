<?php
namespace PHPSC\Conf2012\Tdd\Exemplos;

use \InvalidArgumentException;

class Calculadora
{
    /**
     * @param number $x
     * @param number $y
     * @return number
     */
    public function soma($x, $y)
    {
        return $x + $y;
    }

    /**
     * @param number $x
     * @param number $y
     * @return number
     */
    public function subtrai($x, $y)
    {
        return $x - $y;
    }

    /**
     * @param number $x
     * @param number $y
     * @return number
     */
    public function multiplica($x, $y)
    {
        return $x * $y;
    }

    /**
     * @param number $x
     * @param number $y
     * @return number
     * @throws InvalidArgumentException
     */
    public function divide($x, $y)
    {
        if ($y == 0) {
            throw new InvalidArgumentException('Não é possível divir por ZERO');
        }

        return $x / $y;
    }
}