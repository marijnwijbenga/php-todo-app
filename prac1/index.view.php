<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <ul>
        <?php if(isset($tasks)) :
             foreach ($tasks as $task) : ?>
                <?php if ($task->completed) : ?>
                    <strike>
                <?php endif; ?>
                <li>
                    <?= $task->id . ': ' . $task->description; ?>
                </li>
                <?php if ($task->completed) : ?>
                    </strike>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif ?>
    </ul>
</div>
</body>
</html>