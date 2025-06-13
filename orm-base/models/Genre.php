<?php
// sem namespace
class Genre extends ActiveRecord\Model { // Classe que representa o modelo de gênero
    // Extende a classe Model do ActiveRecord/Modelo
    static $has_many = [['books']];
}
