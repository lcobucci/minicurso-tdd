<?php
namespace PHPSC\Conf2012\Tdd\Biblioteca;

use \DateTime;

/**
 * Classe que representa o registro de aluguel, possui as regras de negócio
 *
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 */
class Aluguel
{
    /**
     * Valor da multa por atraso de entrega
     *
     * @var float
     */
    const MULTA_ATRASO = 9.36;

    /**
     * Livros alugados
     *
     * @var array
     */
    private $livros;

    /**
     * Data da retirada dos livros
     *
     * @var DateTime
     */
    private $alugadoEm;

    /**
     * Data de previsão da devolução dos livros
     *
     * @var DateTime
     */
    private $devolverEm;

    /**
     * Data da devolução dos livros
     *
     * @var DateTime
     */
    private $devolvidoEm;

    /**
     * Retorna o valor total do custo do aluguel dos livros
     *
     * @return float
     */
    public function obtemValorAluguel()
    {
    }

    /**
     * Retorna o valor da multa, caso exista
     *
     * @param DateTime $devolucao
     * @return float
     */
    public function calculaMulta(DateTime $devolucao)
    {
    }
}