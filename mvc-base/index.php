<!-- 
**Resumo e Funcionamento:**

// os locais de código PHP são delimitados por <php ?> ou <= ?> vão ter o primeiro ? apagado para não dar erro nos comentarios asseguir

As fichas 06 e 07 abordam a implementação de uma aplicação web usando o padrão **MVC** (Model-View-Controller) em PHP, com foco em organização, segurança e reutilização de código. 

### Principais Conceitos:
1. **MVC**:
   - **Model**: Lógica de negócio (ex: `Auth`, `CalculadoraPlano`).
   - **View**: Interface do usuário (ex: formulários em `views/auth/login.php`).
   - **Controller**: Intermedia Model e View (ex: `AuthController`, `PlanoController`).

2. **Router**:
   - Direciona requisições usando parâmetros GET (`c=controlador&a=ação`).
   - Exemplo de URL: `index.php?c=home&a=index` chama o método `index()` do `HomeController`.

3. **Herança e Classe Base `Controller`**:
   - Métodos comuns como `redirectToRoute()` (redirecionamento) e `renderView()` (renderização de views).
   - Exemplo: Todos os controladores herdam de `Controller` para reutilizar funcionalidades.

4. **Templating**:
   - Layouts reutilizáveis (ex: `views/layout/default.php`).
   - As views removem código repetitivo (HTML base) e usam `<php require_once($viewPath); ?>`.

5. **Recursos Estáticos**:
   - Pastas `public/css`, `public/js`, `public/img` para arquivos estáticos.
   - Integração com Bootstrap via inclusão de CSS/JS no layout.

6. **Configuração**:
   - Arquivo `config.php` com constantes globais (ex: `APP_NAME`).
   - Centralização de configurações e autoload.

7. **Segurança**:
   - Restrição de acesso via `.htaccess` (bloqueia acesso direto a pastas não públicas).
   - Verificação de autenticação no `PlanoController` usando `Auth::isLoggedIn()`.

---

### Exemplo Prático: **Página Home**

1. **Controlador** (`HomeController.php`):
```php
class HomeController extends Controller {
    public function index() {
        $this->renderView('home', 'index', ['mensagem' => 'Bem-vindo!']);
    }
}
```

2. **View** (`views/home/index.php`):
```php
<div class="container">
    <h1><= $mensagem ?></h1>
    <img src="public/img/logo.png" class="img-fluid">
</div>
```

3. **Rota** (`routes.php`):
```php
return [
    'defaultRoute' => ['GET', 'HomeController', 'index'],
    'home' => [
        'index' => ['GET', 'HomeController', 'index'],
    ],
];
```

4. **Layout** (`views/layout/default.php`):
```html
<!DOCTYPE html>
<html>
<head>
    <title><= APP_NAME ?></title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
<php require_once($viewPath); ?>
    <script src="public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

5. **Configuração** (`config.php`):
```php
define('APP_NAME', 'Credit App');
require_once 'vendor/autoload.php';
```

---

**Funcionamento:**
- Ao acessar `index.php`, o Router usa a `defaultRoute` para chamar `HomeController::index()`.
- O método `renderView()` carrega o layout `default.php` e insere a view `home/index.php`.
- O Bootstrap é aplicado via arquivos estáticos na pasta `public`.

**Erros Comuns:**
- Rotas não definidas: Verificar se `routes.php` está atualizado.
- Arquivos estáticos não carregados: Garantir que o caminho em `public` está correto.
- Autenticação falhando: Verificar sessões e o método `Auth::isLoggedIn()`.

O código abaixo é a entrada principal da aplicação, onde o roteador é instanciado e a rota é processada.
-->


<?php
require_once 'startup/config.php';
require_once 'framework/Router.php';

$router = new Router();
$router->route();