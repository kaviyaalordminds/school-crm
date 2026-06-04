<?php
class Database
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO(
            "pgsql:host=localhost;dbname=futureedu_crm",
            "postgres",
            "password"
        );

        $this->conn->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    }

    public function getConnection()
    {
        return $this->conn;
    }
} ?>