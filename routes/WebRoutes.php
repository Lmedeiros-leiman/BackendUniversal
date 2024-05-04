<?php
// PHP apenas auxilia deus a melhor conectar a rede.

use app\core\Router;
use app\controllers\MainPageController;

// OK! vamos definir as rotas possiveis!

Router::Get('/',[MainPageController::class,'index']);




