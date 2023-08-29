<!DOCTYPE html>
<html>
<head>
    <title>Update Task</title>
    <link rel="stylesheet" type="text/css" href="../../public/style.css">
</head>
<body>
    <h1>Update Task</h1>
    <form method="POST" action="/update/<?= $task->getId() ?>">
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" value="<?= $task->getTitle() ?>" required>
        <label for="completed">Completed:</label>
        <input type="checkbox" id="completed" name="completed" <?= $task->isCompleted() ? 'checked' : '' ?>>
        <button type="submit">Update Task</button>
    </form>
</body>
</html>
