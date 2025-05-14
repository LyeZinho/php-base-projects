<?php
class Task extends ActiveRecord\Model {
    static $table_name = 'tasks'; // Nome da tabela
    static $validates_presence_of = [
        ['description', 'message' => 'Descrição é obrigatória!']
    ];
}