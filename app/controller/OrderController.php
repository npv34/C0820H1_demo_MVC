<?php

namespace app\controller;

use app\model\OrderModel;

class OrderController
{
    protected $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function getAllOrder() {
        return $this->orderModel->getAll();
    }

    public function findById($id) {
        return $this->orderModel->getById($id);
    }
}