<!DOCTYPE html>
<head>
    <title>Lista de tareas</title>
</head>
<body>
    <h1>Mis tareas</h1>
    <ul>
        <?php foreach ($homeworks as $t): ?>
            <?=  $t['description']?>
            <?= $t['finish'] ? "(✔)" : "<a hrefs= 'index.php?action=completed&id=".$t['id']."'>Completar</a>"?>
            <?php endforeach;?>
        ?>
    </ul>
    <form method="post" action="index.php?action=addNewHomework">
        <input type="text" name="Descripcion" placeholder="Nueva Tarea" required>
        <button type="submit">Agregar</button>
    </form>
</body>
</html>