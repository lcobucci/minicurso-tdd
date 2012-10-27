<?php

namespace PHPSC\Conf2012\Tdd\Exemplos;


/**
 * Calculadora test case.
 */
class CalculadoraTest extends \PHPUnit_Framework_TestCase 
{
	
	/**
	 *
	 * @var Calculadora
	 */
	private $Calculadora;
	
	/**
	 * Prepara o Ambiente para os testes
	 */
	protected function setUp() 
	{
		parent::setUp ();
		
		$this->Calculadora = new Calculadora(/* parameters */);
	}
	
	/**
	 * Depois de rodar os testes é necessário limpar o ambiente.
	 */
	protected function tearDown() 
	{
	
		$this->Calculadora = null;
		
		parent::tearDown ();
	}
	
	/**
	 * @test
	 */
	public function soma() 
	{
		
		$this->assertSame(3,$this->Calculadora->soma(1,2));
		$this->assertEquals(3, $this->Calculadora->soma(2, 1));
		$this->assertNotEquals(4, $this->Calculadora->soma(2, 1));
	}
	
	/**
	 * @test
	 * @dataProvider termos
	 */
	public function somaElaborada($a,$b,$c)
	{
		$this->assertEquals($c, $this->Calculadora->soma($c, $b));
	}
	public function termos()
    {
        return array(
          array(0, 0, 0),
          array(0, 1, 1),
          array(1, 0, 1),
          array(1, 1, 3)
        );
    }
}

