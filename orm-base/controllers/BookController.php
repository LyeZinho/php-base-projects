<?php
// Controller para gerenciar livros
class BookController {
    public function index() { 
        $books = Book::all(); // Obtém todos os livros (:: <- método estático da ActiveRecord)
        include './views/book/index.php';
    }

    public function create() {
        $genres = Genre::all(); // Obtém todos os gêneros disponíveis
        include './views/book/create.php';
    }

    public function store() { // Método para armazenar um novo livro
        $book = new Book($_POST);
        if ($book->is_valid()) { // Verifica se o livro é válido
            $book->save(); // Salva o livro no banco de dados
            header("Location: index.php?c=book&a=index"); // Redireciona para a lista de livros
        } else {
            $genres = Genre::all(); // Obtém todos os gêneros disponíveis
            include './views/book/create.php'; 
        }
    }

    // show, edit, update, delete semelhantes ao que está nas fichas
}
