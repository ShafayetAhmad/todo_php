<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Todo List</h1>
    
    <form action="add.php" method="post">
        <label for="task">New Task:</label>
        <input type="text" id="task" name="task" required>
        <button type="submit">Add Task</button>
    </form>

    <h2>Tasks:</h2>
    <ul>
        <?php
        $tasks = file_exists('tasks.txt') ? file('tasks.txt', FILE_IGNORE_NEW_LINES) : [];

        foreach ($tasks as $task) {
            echo "<li>$task</li>";
        }
        ?>
    </ul>
</body>
</html>
