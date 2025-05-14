<?php
/*
Controlador base para o aplicativo MVC.
Este controlador fornece métodos comuns para renderizar views e redirecionar para outras rotas.
*/ 

class Controller {
    // Método para renderizar a view
    protected function renderView($controllerPrefix, $viewName, $data = []) {
        // Verifica se o controlador existe
        extract($data);
        // Verifica se a view existe
        $viewPath = "views/$controllerPrefix/$viewName.php";
        // Verifica se o layout existe
        require_once "views/layout/default.php";
    }

    // Método para redirecionar para outra rota (controllerprefix -> prefixo do controlador, action -> ação, params -> parâmetros adicionais)
    protected function redirectToRoute($controllerPrefix, $action, $params = []) {
        // Verifica se o controlador existe
        $url = "index.php?c=$controllerPrefix&a=$action";
        // Adiciona os parâmetros adicionais à URL
        foreach ($params as $key => $value) {
            // Verifica se o parâmetro existe
            $url .= "&$key=" . urlencode($value);
        }
        // Redireciona para a URL
        header("Location: $url");
        exit;
    }

    protected function getHTTPPostParam($key) {
        // Verifica se o parâmetro existe
        return $_POST[$key] ?? '';
    }
}