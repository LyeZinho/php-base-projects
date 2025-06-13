<?php
// Class representing a chapter in a book
class Chapter extends ActiveRecord\Model {
    static $belongs_to = array(['book']); // Relação com o modelo Book

    static $validates_presence_of = array(
        ['name'] // Validação para garantir que o nome do capítulo seja fornecido
    );
}
