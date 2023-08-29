<?php
namespace App\Repository;

use PDO;

class TaskRepository
{
    private $connection;

    public function __construct()
    {
        $dbHost = getenv('DB_HOST');
        $dbName = getenv('DB_NAME');
        $dbUser = getenv('DB_USER');
        $dbPass = getenv('DB_PASS');

        $this->connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    }

    public function getAllTasks()
    {
        $query = $this->connection->query("SELECT * FROM tasks");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
