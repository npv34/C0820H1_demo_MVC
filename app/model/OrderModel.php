<?php


namespace app\model;


class OrderModel extends BaseModel
{
    protected $table = 'orders';
    protected $columns = [
        'orderNumber',
        'orderDate'
    ];

    public function __construct()
    {
        parent::__construct($this->table, $this->columns);
    }

    public function getById($id)
    {
        $sql = 'SELECT  o.`orderNumber`, o.orderDate, c.customerName  FROM orders o
                JOIN customers c ON o.customerNumber = c.customerNumber
                WHERE orderNumber=' . $id;
        $result = $this->conn->query($sql);
        return $result->fetch();
    }
}
