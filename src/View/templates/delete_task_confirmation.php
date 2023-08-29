<!DOCTYPE html>
<html>
<head>
    <title>Delete Task</title>
    <link rel="stylesheet" type="text/css" href="../../public/style.css">
</head>
<body>
    <h1>Delete Task</h1>
    <p>Are you sure you want to delete the task: "<?= $task->getTitle() ?>"?</p>
    <form method="POST" action="/delete/<?= $task->getId() ?>">
        <button type="submit">Delete Task</button>
    </form>
</body>
</html>
