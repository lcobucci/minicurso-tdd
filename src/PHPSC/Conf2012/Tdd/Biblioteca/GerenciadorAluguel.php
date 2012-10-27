<?php
namespace PHPSC\Conf2012\Tdd\Biblioteca;

use \DateTime;
use \PDO;

/**
 * Classe responsável por criar os registros de aluguéis, bem como
 *
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 */
class GerenciadorAluguel
{
    /**
     * Conexão com a camada de persistência
     *
     * @var PDO
     */
    private $conexao;

    /**
     * Registra uma nova solicitação de retirada
     *
     * @param array $livros
     * @param DateTime $devolverEm
     * @return Aluguel
     */
    public function registraRetirada(array $livros, DateTime $devolverEm)
    {
    }

    /**
     * @param Aluguel $aluguel
     */
    public function registraDevolucao(Aluguel $aluguel)
    {
    }
}