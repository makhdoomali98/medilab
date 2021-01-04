<?php

include '../../../include_admin/header.php';
include '../../../models/RegisterModel.php';
require_once '../../../Helper/Connect.php';
$connection = new connectionClass;
$order = new RegisterModel($connection->conn);


if (isset($_GET['search_status'])) {
    $result = $order->get_order($_GET['status']);
}
else {
    $result = $order->get_order();
}
//if($result->num_rows >0)
//{
//    print_r($result);
//    die();
//}
//else {
//    echo "no data in result";
//    die();
//}



?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
        <div class="nav navbar navbar-expand-lg navbar-white navbar-light border-bottom p-0">
            <a class="nav-link bg-danger" href="#" data-widget="iframe-close">Close</a>
            <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
            <ul class="navbar-nav" role="tablist"></ul>
            <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
            <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
        </div>
        <div class="tab-content">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header" style="display: flex">
                                    <h3 class="card-title">Orders</h3>
                                    <form class="form-inline ml-3" action="" method="get" enctype="multipart/form-data">
                                        <div class="input-group input-group-sm">
                                            <div class="form-group">
                                                <label for="status"></label>
                                                <input type="hidden" class="form-control" value="name" id="status" name="search_status" >


                                            <select name="status">
                                                <option value="">all</option>
                                                <option value="pending">pending</option>
                                                <option value="processing">processing</option>
                                                <option value="completed">completed</option>
                                                <option value="cancelled">cancelled</option>
                                            </select>
                                            </div>


                                            <button type="submit">Search</button>
                                        </div>
                                    </form>
                                    <div class="actions">
                                        <!-- Button trigger modal -->
<!--                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--                                            Create Product-->
<!--                                        </button>-->
<!---->
<!--                                         Modal -->
<!--                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->
<!--                                            <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--                                                <div class="modal-content">-->
<!--                                                    <div class="modal-header">-->
<!--                                                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Category </h5>-->
<!--                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                                            <span aria-hidden="true">&times;</span>-->
<!--                                                        </button>-->
<!--                                                    </div>-->
<!--                                                    <div class="modal-body">-->
<!--                                                        <form action="../../../index.php" method="POST" enctype="multipart/form-data" >-->
<!--                                                            <div class="row">-->
<!--                                                                <div class="form-group">-->
<!--                                                                    <label for="addArea"></label>-->
<!--                                                                    <input type="hidden" class="form-control" value="addProduct" id="addProduct" name="action" >-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="row">-->
<!--                                                                <div class="col-6">-->
<!--                                                                    <div class="form-group">-->
<!--                                                                        <label for="sel1">Select City:</label>-->
<!--                                                                        <select class="form-control" id="sel1" name="city_id">-->
<!--                                                                            <option selected disabled>Select Category</option>-->
<!--                                                                            --><?php //if($cities->num_rows > 0)
//                                                                            {
//                                                                                while($row = $cities->fetch_assoc()) {
//                                                                                    ?>
<!--                                                                                    <option value="--><?php //print_r($row['id']);?><!--">--><?php //print_r($row['name']); ?><!--</option>-->
<!--                                                                                    --><?php
//                                                                                }
//                                                                            }
//                                                                            ?>
<!--                                                                        </select>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                                <div class="col-6">-->
<!--                                                                    <div class="form-group">-->
<!--                                                                        <label for="sel1">Select Category:</label>-->
<!--                                                                        <select class="form-control" id="sel1" name="category_id">-->
<!--                                                                            <option selected disabled>Select Category</option>-->
<!--                                                                            --><?php //if($category->num_rows > 0)
//                                                                            {
//                                                                                while($row = $category->fetch_assoc()) {
//                                                                                    ?>
<!--                                                                                    <option value="--><?php //print_r($row['id']);?><!--">--><?php //print_r($row['name']); ?><!--</option>-->
<!--                                                                                    --><?php
//                                                                                }
//                                                                            }
//                                                                            ?>
<!--                                                                        </select>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="row">-->
<!--                                                                <div class="col-6 mb-3">-->
<!--                                                                    <div class="form-group">-->
<!--                                                                        <label for="name">Name</label>-->
<!--                                                                        <input type="text" class="form-control" name="name" placeholder="Enter Product Name">-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                                <div class="col-6 mb-3">-->
<!--                                                                    <div class="form-group">-->
<!--                                                                        <label for="type">description</label>-->
<!--                                                                        <input type="text" class="form-control" name="description" placeholder="Enter Description">-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                            <div class="row">-->
<!--                                                                <div class="col-6 mb-3">-->
<!--                                                                    <div class="form-group">-->
<!--                                                                        <label for="name">price</label>-->
<!--                                                                        <input type="text" class="form-control" name="price" placeholder="Enter Price">-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                                <div class="col-6 mb-3">-->
<!--                                                                    <div class="form-group">-->
<!--                                                                        <label for="image">Image</label>-->
<!--                                                                        <input type="File" class="form-control" name="image" >-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->

<!--                                                            <div class="modal-footer">-->
<!--                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                                                                <button type="submit" class="btn btn-primary">Add</button>-->
<!--                                                        </form>-->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="example2" class="table table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User-Name</th>
                                        <th>Product-Name</th>
                                        <th>Order-Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Result</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //                                    $cityName = $cityName->get_city_name();
                                    //                                    $categoryName = $categoryName->get_category_name();



                                    if($result->num_rows > 0  )
                                    {
                                    $index = 1;
                                    while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $index++ ?></td>
                                        <td><?php echo $row["user_name"]; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["order_time"]; ?></td>
                                        <td><?php echo $row["status"]; ?></td>

                                        <td>
                                             <?php if($row["status"] == 'pending'){?>
                                                <a href="../../../index.php?id=<?php echo $row['id']; ?>&action=approveOrder"class="btn btn-warning">Approve</a>
                                                <a href="../../../index.php?id=<?php echo $row['id']; ?>&action=rejectOrder"class="btn btn-danger">Reject</a>
                                            <?php }elseif($row["status"] == 'processing'){?>
                                                 <div class="actions">
                                                     <!-- Button trigger modal -->
                                                     <button type="button" value="<?php echo $row['id']; ?>"  class="generate_report btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                         Upload Report
                                                     </button>
                                                 </div>

                                        <?php }?>
<!--                                                   <a href="../../../index.php?id=--><?php //echo $row['id']; ?><!--<!--&action=deleteCity" class="btn btn-danger">Delete</a>-->

<!--                                            <a href="../../../index.php?id=--><?php //echo $row['car_id']; ?><!--&action=approve" class="btn btn-info">approve</a>-->
<!--                                            <a href="../../../index.php?id=--><?php //echo $row['car_id']; ?><!--&action=reject" class="btn btn-danger">reject</a>-->
                                        </td>



                                        <!--                                        <td>--><?php //if($row["state"] == 1){ echo 'Active';}else{ echo 'not Active';}?><!--</td>-->
                                        <!--                                        <td>-->
                                        <!--                                            --><?php //if($row["state"] == '1'){?>
                                        <!--                                                <a href="../../../index.php?id=--><?php //echo $row['id']; ?><!--&action=deActivate"class="btn btn-warning">DE-ACTIVATE</a>-->
                                        <!--                                            --><?php //}else{?>
                                        <!--                                                <a href="../../../index.php?id=--><?php //echo $row['id']; ?><!--&action=Activate"class="btn btn-warning">ACTIVATE</a>-->
                                        <!--                                            --><?php //}?>
                                        <!---->
                                        <!--                                            <a href="../../../index.php?id=--><?php //echo $row['id']; ?><!--&action=deleteCity" class="btn btn-danger">Delete</a>-->
                                        <!--                                        </td>-->



                                        <?php
                                        }
                                        }
                                        ?>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>User-Name</th>
                                        <th>Product-Name</th>
                                        <th>Order-Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Result</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
    </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2020 <a href="#">Testing System</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-rc
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Category by  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../../../index.php" method="POST" enctype="multipart/form-data" style="padding-left: 50px;" >
                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="name">Report</label>
                                <input type="file" class="form-control" value="report" name="report" placeholder="Upload Report">
                            </div>
                        </div>

                            <label for=""></label>
                            <input type="hidden" class="form-control" value="generate_report" name="action" >
                            <input type="hidden" class="form-control" value="" id="order_id" name="order_id" >

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
<script>
    $( document ).ready(function() {
        $('.generate_report').on('click', function () {
            var id = $(this).attr('value');
            $('#order_id').val(id);

        });
    });
</script>
<?php

include '../../../include_admin/footer.php';
?>