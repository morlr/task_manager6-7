<?php
$errors = [];
$title = '';
$description = '';
$priority = 'Medium';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = htmlspecialchars(trim($_POST['title'] ?? ''));
    $description = htmlspecialchars(trim($_POST['description'] ?? ''));
    $priority = $_POST['priority'] ?? 'Medium';
    
    if (empty($title)) {
        $errors[] = "Поле Назва є обов'язковим для заповнення!";
    }
    if (empty($description)) {
        $errors[] = "Поле Опис є обов'язковим для заповнення!";
    }
    if (empty($errors)) {
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Створити завдання</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; color: #333; }
        .container { max-width: 600px; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .alert-danger { background: #f8d7da; color: #721c24; padding: 12px; border: 1px solid #f5c6cb; border-radius: 4px; margin-bottom: 20px; }
        .alert-danger ul { margin: 0; padding-left: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], textarea, select { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        textarea { height: 100px; resize: vertical; }
        button { background: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .back-link { display: inline-block; margin-bottom: 20px; color: #007bff; text-decoration: none; }
        .back-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
<div class="container">
    <a href="index.php" class="back-link">&larr; Повернутись до списку</a>
    <h2>Створити нове завдання</h2>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="create.php" method="POST">
        <div class="form-group">
            <label for="title">Назва завдання:</label>
            <input type="text" id="title" name="title" value="<?= $title ?? '' ?>">
        </div>

        <div class="form-group">
            <label for="description">Опис завдання:</label>
            <textarea id="description" name="description"><?= $description ?? '' ?></textarea>
        </div>

        <div class="form-group">
            <label for="priority">Пріоритет:</label>
            <select id="priority" name="priority">
                <option value="Low" <?= ($priority === 'Low') ? 'selected' : '' ?>>Low</option>
                <option value="Medium" <?= ($priority === 'Medium') ? 'selected' : '' ?>>Medium</option>
                <option value="High" <?= ($priority === 'High') ? 'selected' : '' ?>>High</option>
            </select>
        </div>

        <button type="submit">Зберегти</button>
    </form>
</div>
</body>
</html>