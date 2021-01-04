<?php
$title='orders';
$active = 'orders';
include '../../includes/header.php';
include '../../Helper/ViewHelper.php';
$orders =$user->get_orders();

 ?>
<div class="align-content-lg-between">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                   <th>Product Name</th>
                    <th>Order Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($orders)) {
                  while ($order = mysqli_fetch_assoc($orders)) {
                 ?>
                <tr>
                    <td><?php echo $order['name']?></td>
                    <td><?php echo $order['order_time']?></td>
                    <td><?php echo $order['status']?></td>
                    <td>
                         <?php if($order['status'] == 'completed'){?>
                                                <a href="reports.php?id=<?php echo $order['id']; ?>" class="btn btn-info">view reports</a>
                                                
                    </td>
                       
                </tr>
                <?php }?>
                <?php
                           } } ?>
            </tbody>
            <tfoot>
                <tr>
                   <th>Product Id</th>
                    <th>Order Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
        <script type="text/javascript">$(document).ready(function() {
        $('#example').DataTable();
        } );
        </script>

    </div>
<?php include '../../includes/footer.php' ?>