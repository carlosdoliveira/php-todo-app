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

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $this->taskRepository->createTask($title);
            header("Location: /");
            exit;
        }

        include '../src/View/templates/create_task_form.php';
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $completed = isset($_POST['completed']) ? 1 : 0;
            $this->taskRepository->updateTask($id, $title, $completed);
            header("Location: /");
            exit;
        }

        $task = $this->taskRepository->getTaskById($id);
        include '../src/View/templates/update_task_form.php';
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->taskRepository->deleteTask($id);
            header("Location: /");
            exit;
        }

        $task = $this->taskRepository->getTaskById($id);
        include '../src/View/templates/delete_task_confirmation.php';
    }
}
?>
