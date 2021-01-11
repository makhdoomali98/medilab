<?php
session_start();
if (!isset($_SESSION["users"])){
    header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/register/login.php");
    die();
}
include '../../../include_admin/header.php';
include '../../../models/RegisterModel.php';
//
require_once '../../../Helper/Connect.php';
$connection = new connectionClass;

$cities = new RegisterModel($connection->conn);


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
                                    <h3 class="card-title">Cities</h3>
                                    <div class="actions">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            Create Cities
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Add New City </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="../../../index.php" method="POST" enctype="multipart/form-data" style="padding-left: 250px;" >
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <label for="addArea"></label>
                                                                <input type="hidden" class="form-control" value="addArea" id="addArea" name="action" >
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 mb-3">
                                                                <label for="name">Name</label>
                                                                <input type="text" name="name" placeholder="Enter City Name">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 mb-3">
                                                                <label for="type">Type</label>
                                                                <input type="text" name="state" placeholder="Status">
                                                            </div>
                                                        </div>




                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                    </form>
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
                                            <th>City</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $result = $cities->get_cities();

                                        if($result->num_rows > 0){
                                        $index = 1;
                                        while($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $index++ ?></td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php if($row["state"] == 1){ echo 'Active';}else{ echo 'not Active';}?></td>
                                            <td>
                                                <?php if($row["state"] == '1'){?>
                                                <a href="../../../index.php?id=<?php echo $row['id']; ?>&action=deActivate"class="btn btn-warning">DE-ACTIVATE</a>
                                                <?php }else {?>
                                                <a href="../../../index.php?id=<?php echo $row['id']; ?>&action=Activate"class="btn btn-warning">ACTIVATE</a>
                                                <?php }?>

<!--                                                <a href="../../../index.php?id=--><?php //echo $row['id']; ?><!--&action=deleteCity" class="btn btn-danger">Delete</a>-->
                                            </td>
                                            <?php
                                            }
                                            }
                                            ?>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Action</th>
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
<?php
include '../../../include_admin/footer.php';
?>