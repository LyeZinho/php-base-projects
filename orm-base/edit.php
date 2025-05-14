<form action="index.php?action=update&id=<?= $task->id ?>" method="POST">
    <input type="text" name="description" value="<?= $task->description ?>">
    <button type="submit">Atualizar</button>
</form>