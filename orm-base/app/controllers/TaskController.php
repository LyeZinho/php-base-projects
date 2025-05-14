<?php
class TaskController {
    public function index() {
        $tasks = Task::all();
        require_once 'app/views/tasks/index.php';
    }

    public function create() {
        require_once 'app/views/tasks/create.php';
    }

    public function store() {
        $task = new Task($_POST);
        if ($task->save()) {
            header("Location: index.php?action=index");
        } else {
            var_dump($task->errors);
        }
    }

    public function edit($id) {
        $task = Task::find($id);
        require_once 'app/views/tasks/edit.php';
    }

    public function update($id) {
        $task = Task::find($id);
        if ($task->update_attributes($_POST)) {
            header("Location: index.php?action=index");
        }
    }

    public function delete($id) {
        $task = Task::find($id);
        $task->delete();
        header("Location: index.php?action=index");
    }
}