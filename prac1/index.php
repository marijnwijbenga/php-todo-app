<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDB();
$tasks = fetchAllTasks($pdo);

$tasks[1]->completeTask();

$tasks[0]->changeTaskDescription("i'm the description now");

var_dump($tasks);

require 'index.view.php';
