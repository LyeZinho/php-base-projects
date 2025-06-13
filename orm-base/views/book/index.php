<h2>Lista de Livros</h2>
<table class="table">
    <tr>
        <th>ID</th><th>Nome</th><th>ISBN</th><th>Género</th><th>Ações</th>
    </tr>
    <?php foreach ($books as $book): ?>
    <tr>
        <td><?= $book->id ?></td>
        <td><?= $book->name ?></td>
        <td><?= $book->isbn ?></td>
        <td><?= $book->genre->name ?></td>
        <td>
            <a href="index.php?c=book&a=edit&id=<?= $book->id ?>">Editar</a>
            <a href="index.php?c=book&a=delete&id=<?= $book->id ?>">Eliminar</a>
            <a href="index.php?c=chapter&a=index&id=<?= $book->id ?>">Capítulos</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="index.php?c=book&a=create">Novo Livro</a>
