<!--  
    O código abaixo é um exemplo de um roteador simples em PHP. Ele verifica se a rota solicitada existe e, 
    se existir, instancia o controlador correspondente e chama o método apropriado. Caso contrário, exibe uma mensagem de erro.
    Este código é parte de um framework MVC (Model-View-Controller) e deve ser usado em conjunto com outros componentes do framework.  
-->

<?php
class Router {
    public function route() {
        $routes = require __DIR__ . '/../routes.php'; // Subir APENAS 1 nível
        
        // Verifica se a rota padrão está definida
        $controllerPrefix = $_GET['c'] ?? 'home';
        
        // Verifica se o controlador existe
        $action = $_GET['a'] ?? 'index';

        // Verifica se o controlador e a ação estão definidos
        $routeKey = "$controllerPrefix/$action";

        // Verifica se a rota existe no array de rotas
        if (isset($routes[$controllerPrefix][$action])) {
            // Verifica se o controlador existe
            list($method, $controllerClass, $actionMethod) = $routes[$controllerPrefix][$action];
            // Verifica se o controlador existe
            $controller = new $controllerClass();
            // Verifica se o método existe
            $controller->$actionMethod();
        } else {
            // Se a rota não existir, redireciona para a rota padrão
            die("Rota não encontrada: $routeKey");
        }
    }
}