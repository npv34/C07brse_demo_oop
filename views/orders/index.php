<table>
    <tr id="order-table-header">
        <td>STT</td>
        <td>OrderNumber</td>
        <td>OderDate</td>
        <td>Status</td>
        <td></td>
    </tr>
    <?php foreach ($orders as $key => $order) : ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $order['orderNumber'] ?></td>
            <td><?php echo $order['orderDate'] ?></td>
            <td><?php echo $order['status'] ?></td>
            <td><a href="index.php?page=orders&action=detail&oID=<?php echo $order['orderNumber'] ?>">View</a></td>
        </tr>
    <?php endforeach ?>
</table>