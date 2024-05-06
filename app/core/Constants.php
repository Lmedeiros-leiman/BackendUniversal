<?php 


// já que estamos carregando classes, por que não aproveitar esse arquivo e carregar o arquivo .ENV e algumas variaveis globais tambem?
/**
* Existem multiplas maneiras de se fazer isso, todas dependem de como o desenvolvedor quer buscar suas variaveis de ambiente.
* No meu caso vou utilizar funções que o php já possui de fábrica.
* E para acessar foi apenas puxar a variavel env.
*
**/
$env = parse_ini_file(__DIR__ . "/../../.env");

// vamos carregar algumas variaveis globais Uteis:

define('ROOT_FOLDER', __DIR__."/../../");
define('PUBLIC_FOLDER', __DIR__."/../../public");

