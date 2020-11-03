<?php


namespace app\model;


class BaseModel
{
    protected $conn;
    protected $table;
    protected $columns;
    public function __construct($table, $columns = ['*'])
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
        $this->table = $table;
        $this->columns = $columns;
    }

    public function getAll()
    {
        $nameColumn = implode(",", $this->columns);
        $sql = "SELECT $nameColumn FROM $this->table LIMIT 10";
        $result = $this->conn->query($sql);
        return $result->fetchAll();
    }
}