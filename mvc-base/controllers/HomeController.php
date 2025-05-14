<?php
// Path: mvc/controllers/HomeController.php
require_once 'Controller.php';

/*
Controlador para a página inicial do aplicativo.
Este controlador é responsável por renderizar a view inicial do aplicativo,
*/ 

// HomeController.php
class HomeController extends Controller {
    // Método para exibir a página inicial
    public function index() {
        // Renderiza a view 'home/index.php' com a mensagem de boas-vindas
        $this->renderView('home', 'index', ['mensagem' => 'Bem-vindo ao Credit App!']);
    }
}