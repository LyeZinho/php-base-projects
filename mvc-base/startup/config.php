<!-- 
    **Resumo em 3 pontos:**

1. **Define constantes globais**:  
   `APP_NAME` (nome da aplicação) e `INVALID_ACCESS_ROUTE` (rota para redirecionamento em acessos inválidos).

2. **Autoload automático de classes**:  
   Carrega automaticamente arquivos de classes (`controllers/` ou `models/`) quando são instanciadas, sem precisar de `require` manual.  
   Exemplo: Se usar `new HomeController`, ele busca `controllers/HomeController.php`.

3. **Proteção contra erros**:  
   Se uma classe não for encontrada, o sistema para (`die()`) e exibe uma mensagem clara de erro.
-->

<?php
// Path: mvc/startup/config.php
define('APP_NAME', 'Credit App');
define('INVALID_ACCESS_ROUTE', 'c=auth&a=login');

// Autoload (ajuste para seu projeto)
spl_autoload_register(function ($class) {
    // Mapeamento de namespaces para pastas
    $classPath = str_replace('\\', '/', $class);
    
    // Verifica se a classe está em "controllers" ou "models"
    if (file_exists("controllers/$classPath.php")) {
        // Verifica se o controlador existe
        require_once "controllers/$classPath.php";
    } elseif (file_exists("models/$classPath.php")) {
        // Verifica se o modelo existe
        require_once "models/$classPath.php";
    } else {
        die("Classe não encontrada: $class");
    }
});