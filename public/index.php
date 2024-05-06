<?php
// PHP linguagem divina.

// inclui o autoloader.

use app\core\Router;

#
// ignore as linhas acima do #, essas são pedidos para incluir uma classe.
// segue pra pasta abaixo para entender melhor o que esta acontecendo aqui:
require __DIR__. "/../vendor/autoload/autoloader.php";

// carregamos as configurações.
require __DIR__. "/../../config/index.php";

//carregamos as variaveis globais.
require __DIR__. "../app/core/Constants.php";

// OK, agora temos um outro problema:
// quando o usuário conectar estamos forçando toda conexão a esse arquivo.
// porem cá vai um problema: não estamos carregando nada neste arquivo :)
// precisamos criar um roteador.
// por questões pessoais, acredito que o roteador seja um arquivo do nucleo do sistema.
// então vamos puxalo de lá.

// carregamos as rotas possiveis
Router::LoadRoutes();

// validamos para onde enviar o pedido do nosso cliente
Router::Reroute();


