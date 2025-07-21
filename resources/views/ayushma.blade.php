<?php
session_start();

// Initialize tasks
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Add a task
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {
    $_SESSION['tasks'][] = htmlspecialchars($_POST['task']);
}

// Clear all tasks
if (isset($_POST['clear'])) {
    $_SESSION['tasks'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP To-Do List its ayushmaaaaaaa</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        ul { padding-left: 20px; }
        .task { margin-bottom: 8px; }
    </style>
</head>
<body>
    <h2>📝 To-Do List</h2>

    <form method="POST" onsubmit="return validateForm()">
        <input type="text" name="task" id="taskInput" placeholder="Enter a task">
        <button type="submit">Add Task</button>
        <button type="submit" name="clear" value="1">Clear All</button>
    </form>

    <ul>
        <?php foreach ($_SESSION['tasks'] as $task): ?>
            <li class="task"><?= $task ?></li>
        <?php endforeach; ?>
    </ul>

    <script>
        function validateForm() {
            const input = document.getElementById('taskInput').value.trim();
            if (input === '') {
                alert('Please enter a task!');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
