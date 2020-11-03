<?php

include_once  '../../../vendor/autoload.php';

$orderController = new \app\controller\OrderController();
$orders = $orderController->getAllOrder();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
<table id="order-list">
    <tr>
        <td>STT</td>
        <td>Mã đơn hàng</td>
        <td>Ngày đặt</td>
        <td></td>
    </tr>
    <?php foreach ($orders as $key => $order): ?>
    <tr>
        <td><?php echo $key + 1 ?></td>
        <td><a href="order_detail.php?orderId=<?php echo $order['orderNumber'] ?>"><?php echo 'DH-'. $order['orderNumber'] ?></a></td>
        <td><?php echo $order['orderDate'] ?></td>
        <td>
            <a href="">Delete</a>
            <a href="">Edit</a>
        </td>
    </tr>

    <?php endforeach; ?>
</table>
</body>
</html>
