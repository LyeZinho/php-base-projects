<!DOCTYPE html>
<html>
<head>
    <title>Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <a href="index.php?action=create">Nova Tarefa</a>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?= $task->description ?>
                <a href="index.php?action=edit&id=<?= $task->id ?>">Editar</a>
                <a href="index.php?action=delete&id=<?= $task->id ?>">Excluir</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

<?php
require_once 'config.php';

$action = $_GET['action'] ?? 'index';
$controller = new TaskController();

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit($_GET['id']);
        break;
    case 'update':
        $controller->update($_GET['id']);
        break;
    case 'delete':
        $controller->delete($_GET['id']);
        break;
}