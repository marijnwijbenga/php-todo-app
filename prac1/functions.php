<?php
function connectToDb()
{
    try {
        return new PDO('mysql:host=192.168.10.10;dbname=mytodos', 'homestead', 'secret');
    } catch (PDOException $exception) {
        die(var_dump($exception));
    }
}

function fetchAllTasks($pdo) {
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}