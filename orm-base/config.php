<?php
require_once 'vendor/autoload.php';

// Configuração do ActiveRecord
ActiveRecord\Config::initialize(function($cfg) {
    $cfg->set_model_directory(__DIR__ . '/app/models');
    $cfg->set_connections([
        'development' => 'mysql://root@localhost/task_db' // Banco: task_db
    ]);
});