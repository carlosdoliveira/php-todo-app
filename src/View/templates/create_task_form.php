<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    <link rel="stylesheet" type="text/css" href="../../public/style.css">
</head>
<body>
    <h1>Create New Task</h1>
    <form method="POST" action="/create">
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" required>
        <button type="submit">Create Task</button>
    </form>
</body>
</html>
