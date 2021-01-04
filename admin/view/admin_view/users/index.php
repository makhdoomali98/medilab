<?php

include '../../../include_admin/header.php';
include '../../../models/RegisterModel.php';
//
require_once '../../../Helper/Connect.php';
$connection = new connectionClass;

$user = new RegisterModel($connection->conn);


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
                                    <h3 class="card-title">User Table</h3>
                                    <div class="actions">
                                        <a type="button" class="btn btn-info">Create</a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Age</th>
                                            <th>Cnic</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>city</th>
                                            <th>gender</th>
                                            <th>image</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $result = $user->get_users();

                                        if($result->num_rows > 0)
                                        {

                                        $index = 1;
                                        while($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $index++ ?></td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["age"]; ?></td>
                                            <td><?php echo $row["cnic"]; ?></td>
                                            <td><?php echo $row["contact"]; ?></td>
                                            <td><?php echo $row["address"]; ?></td>
                                            <td><?php echo $row["city"]; ?></td>
                                            <td><?php echo $row["gender"]; ?></td>
                                            <td><?php echo $row["image"]; ?></td>


                                            <?php
                                            }
                                            }
                                            ?>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Age</th>
                                            <th>Cnic</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>city</th>
                                            <th>gender</th>
                                            <th>image</th>

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