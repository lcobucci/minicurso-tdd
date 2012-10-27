<?php
namespace PHPSC\Conf2012\Tdd\Exemplos\Dependencia;

use PHPSC\Conf2012\Tdd\Exemplos\Calculadora;
use PHPUnit_Framework_TestCase;

/**
 * Calculadora test case.
 */
class DependenciaEntreCasosTest extends PHPUnit_Framework_TestCase
{
    /**
     * Tests Calculadora->soma()
     *
     * @test
     */
    public function somaDeveSerSubmatoriaDosNumeros()
    {
        $calculadora = new Calculadora();

        $this->assertEquals(4, $calculadora->soma(2, 2));
    }

    /**
     * Tests Calculadora->subtrai()
     *
     * @depends somaDeveSerSubmatoriaDosNumeros
     * @test
     */
    public function subtraiDeveSerSubtracaoDosNumeros()
    {
        $calculadora = new Calculadora();

        $this->assertEquals(4, $calculadora->subtrai(6, 2));
    }

    /**
     * Tests Calculadora->multiplica()
     *
     * @depends subtraiDeveSerSubtracaoDosNumeros
     * @test
     */
    public function multiplicaDeveSerMultiplicacaoEntreOsNumeros()
    {
        $calculadora = new Calculadora();

        $this->assertEquals(4, $calculadora->multiplica(2, 2));
    }

    /**
     * Tests Calculadora->divide()
     *
     * @depends multiplicaDeveSerMultiplicacaoEntreOsNumeros
     * @test
     */
    public function divideDeveSerDivisaoEntreOsNumeros()
    {
        $calculadora = new Calculadora();

        $this->assertEquals(2, $calculadora->divide(4, 2));
    }

    /**
     * Tests Calculadora->divide()
     *
     * @test
     * @depends divideDeveSerDivisaoEntreOsNumeros
     * @expectedException \InvalidArgumentException
     */
    public function erroDeveSerLancadoAoDividirPorZero()
    {
        $calculadora = new Calculadora();
        $calculadora->divide(2, 0);
    }
}