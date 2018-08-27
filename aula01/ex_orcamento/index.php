<?php 

require_once 'Produto.php';
require_once 'Servico.php';
require_once 'Orcamento.php';


// Class Orcamento

// Itens []
// Total do Orcamento

// Pode ser adicionado no orcamento, Produtos ou Servicos;

// Produto
// Nome
// Preco

// Servicos
// Nome
// Descricao
// Preco

// Calcula total do orcamento dos itens adicionados;
echo '<pre>';

$prod1 = new Produto('Itaipava',1.99);
$servico1 = new Servico('Churrasqueiro', 100);
var_dump($prod1);
echo '<br>';
var_dump($servico1);

echo '<hr>';

$orcamento = new Orcamento();
$orcamento->addItem($prod1, 3); // Item, Qtd
$orcamento->addItem($servico1, 3); // Item, Qtd
echo $orcamento->valorTotal();
echo '<br>';
var_dump($orcamento);