<!DOCTYPE html>
<html>
<head>
    <title>To-do List</title>
</head>
<body>
    <h1>To-do List</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?= $task->getTitle(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
