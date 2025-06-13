<?php
class Book extends ActiveRecord\Model { // Classe que representa o modelo de livro
    static $belongs_to = array(['genre']); // Relação com o modelo Genre
    static $has_many = array(['chapters']); // Relação com o modelo Chapter (um livro pode ter vários capítulos)

    static $validates_presence_of = array(
        ['name'], // Valida para garantir que o nome do livro seja fornecido
        ['genre_id', 'message' => 'Genre must be provided'] // Valida para garantir que o gênero do livro seja fornecido
    );
}