<?php
// Chamando o autoload do Composer e configurando o ActiveRecord
require_once __DIR__ . '/vendor/autoload.php';

// Configuração do ActiveRecord
\ActiveRecord\Config::initialize(function($cfg) {
    $cfg->set_model_directory(__DIR__ . '/models'); // Diretório onde estão os modelos
    $cfg->set_connections([
        'development' => 'mysql://root:123456789@localhost/appdb' // Conexão com o banco de dados
    ]);
});

//'development' => 'mysql://root:123456789@localhost/appdb'