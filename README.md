# Minicurso TDD PHPSC Conference 2012

Este projeto tem como objetivo servir de base para o minicurso sobre Test Driven Development, ministrado por Domingos Teruel e Luís Otávio Cobucci Oblonczyk.

Aqui verão exemplos de testes de unidade, bem como o esqueleto de um "projeto" onde veremos o TDD em ação. Os participantes implementarão as classes e testes de unidade para atender às regras descritas abaixo.

## Projeto "Biblioteca"

Este projeto tem objetivo único e exclusivo de ser objeto de estudo para os participantes do minicurso, portanto as regras aqui utilizadas não representam necessidades necessariamente reais.

### Necessidades

O projeto é basicamente o registro de aluguéis e devoluções de livros. Abaixo seguem as regras e necessidades:

1. Os dados de entrada devem ser devidamente filtrados;
1. Não poderão ser adicionados livros duplicados em um registro de aluguel;
1. Não poderão existir livros com custo de aluguel inferior à ZERO;
1. Não poderão existir registros de aluguel sem livros vinculados;
1. A data de previsão da devolução não pode ser inferior à data da retirada;
1. A data da devolução não pode ser inferior à data da retirada;
1. Para cada dia de atraso deverá ser aplicada uma multa de 9,36% sobre o valor total do aluguel;