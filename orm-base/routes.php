<?php
if (!isset($_GET['c'])) $_GET['c'] = 'book'; // Controller padrão
if (!isset($_GET['a'])) $_GET['a'] = 'index'; // Ação padrão

// Verifica se a controller existe
$controller = ucfirst($_GET['c']) . 'Controller';

// Verifica se a ação existe
$action = $_GET['a'];

// Verifica se a controller e a ação são válidas
require_once './controllers/' . $controller . '.php';
// Instancia a controller e chama a ação
$obj = new $controller();
// Verifica se a ação é um método da classe
call_user_func([$obj, $action], $_GET['id'] ?? null);
