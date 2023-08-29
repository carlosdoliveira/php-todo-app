<?php
namespace App\Controller;

use App\Repository\TaskRepository;

class TaskController
{
    private $taskRepository;

    public function __construct()
    {
        $this->taskRepository = new TaskRepository();
    }

    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();
        include '../src/View/templates/task_list.php';
    }
}
?>
