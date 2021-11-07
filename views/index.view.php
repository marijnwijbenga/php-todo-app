<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/index.css">
    <title>Home</title>
</head>
<body>
<?php require 'partials/nav.php'; ?>
<div>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <?php if($task->completed) :?>
                <strike>
            <?php endif; ?>
            <li>
                <?=$task->description?>
            </li>
            <?php if($task->completed) : ?>
                </strike>
            <?php endif; ?>
        <?php endforeach;?>
    </ul>
</div>
</body>
</html>