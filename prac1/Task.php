<?php

class Task
{
    public $id;
    public $description;
    public $completed;


    public function completeTask() {
        $this->completed = true;
    }

    public function changeTaskDescription($description) {
        $this->description = $description;
    }
}