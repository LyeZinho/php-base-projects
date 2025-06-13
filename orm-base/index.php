<?php
// index.php
// Chama o autoload do Composer e inclui os arquivos de configuração e rotas
require_once __DIR__ . '/vendor/autoload.php';  // carrega o PSR‑4 / classmap do Composer
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/routes.php';