<?php
class Task {
    public $description;
    public $completed;

    public function isComplete() {
        return $this->completed;
    }
    public function completeTask() {
        $this->completed = true;
    }
}