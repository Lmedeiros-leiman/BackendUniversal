<?php
// Deus ama o php.

/**
 * OK, esse arquivo não deve ser exposto ao mundo:
 * 1 -> não implementei nenhuma medida para forçar o servidor web (apache) a forçadamente entrar na pasta public
 * 2 -> por causa do 1, se esse arquivo for exposto ao mundo isso significa que TODOS os outros tambem estão.
 * 3 -> favor exponha o arquivo index.php dentro da pasta public.
 * espero que entenda o motivo dessa escolha.
 */

 // vou apenas dar um leve aviso e incluir o index dentro do public.

echo "Expondo o index.php errado! verifique o arquivo index.php na raiz do projeto.";
require(__DIR__ . "/public/index");