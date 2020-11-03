<?php
include_once  '../../../vendor/autoload.php';

$orderController = new \app\controller\OrderController();

$orderId = $_REQUEST['orderId'];

$order = $orderController->findById($orderId);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #customer-detail {
            width: 500px;
            border-collapse: collapse;
        }
        #customer-detail tr td{
            border: 1px solid black;
            padding: 5px;
        }

    </style>
</head>
<body>
<table id="customer-detail" style="border: 1px solid black">
    <tr>
        <td colspan="2"><h2>Thong tin khach hang</h2></td>
    </tr>
    <tr>
        <th>Ten Khach Hang</th>
        <td><?php echo $order['customerName'] ?></td>
    </tr>
</table>
<a href="list.php">Quay lai</a>
</body>
</html>
