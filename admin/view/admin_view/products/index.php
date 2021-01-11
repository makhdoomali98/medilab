<?php
session_start();
if (!isset($_SESSION["users"])){
    header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/register/login.php");
    die();
}
include '../../../include_admin/header.php';
include '../../../models/RegisterModel.php';
require_once '../../../Helper/Connect.php';
$connection = new connectionClass;
$product = new RegisterModel($connection->conn);
$cities= new RegisterModel($connection->conn);
$category= new RegisterModel($connection->conn);
$cities = $cities->get_cities();
$category = $category->get_categories();
//$cityName = new RegisterModel($connection->conn);
//$categoryName = new RegisterModel($connection->conn);




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
                                    <h3 class="card-title">Product</h3>
                                    <!-- SEARCH FORM -->
<!--                                    <form class="form-inline ml-3">-->
<!--                                        <div class="input-group input-group-sm">-->
<!--                                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">-->
<!--                                            <div class="input-group-append">-->
<!--                                                <button class="btn btn-navbar" type="submit">-->
<!--                                                    <i class="fas fa-search"></i>-->
<!--                                                </button>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </form>-->

                                    <div class="actions">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            Create Product
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Category </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="../../../index.php" method="POST" enctype="multipart/form-data" >
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <label for="addArea"></label>
                                                                    <input type="hidden" class="form-control" value="addProduct" id="addProduct" name="action" >
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="sel1">Select City:</label>
                                                                        <select class="form-control" id="sel1" name="city_id">
                                                                            <option selected disabled>Select City</option>
                                                                            <?php if($cities->num_rows > 0)
                                                                            {
                                                                                while($row = $cities->fetch_assoc()) {
                                                                                    ?>
                                                                                    <option value="<?php print_r($row['id']);?>"><?php print_r($row['name']); ?></option>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label for="sel1">Select Category:</label>
                                                                        <select class="form-control" id="sel1" name="category_id">
                                                                            <option selected disabled>Select Category</option>
                                                                            <?php if($category->num_rows > 0)
                                                                            {
                                                                                while($row = $category->fetch_assoc()) {
                                                                                    ?>
                                                                                    <option value="<?php print_r($row['id']);?>"><?php print_r($row['name']); ?></option>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="name">Name</label>
                                                                        <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mb-3">
                                                                    <div class="form-group">
                                                                    <label for="type">description</label>
                                                                    <input type="text" class="form-control" name="description" placeholder="Enter Description">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="name">price</label>
                                                                        <input type="text" class="form-control" name="price" placeholder="Enter Price">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="image">Image</label>
                                                                        <input type="File" class="form-control" name="image" >
                                                                    </div>
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
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>City</th>
                                        <th>Image</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
//                                    $cityName = $cityName->get_city_name();
//                                    $categoryName = $categoryName->get_category_name();
                                    $result = $product->get_products();

                                    if($result->num_rows > 0)
                                    {
                                    $index = 1;
                                    while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $index++ ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["description"]; ?></td>
                                        <td><?php echo $row["category_name"]; ?></td>
                                        <td><?php echo $row["price"]; ?></td>
                                        <td><?php echo $row["city_name"]; ?></td>
                                        <td> <img src="../../admin/media/products/images<?php echo $row["image"];?>" width="200" height="200"> </td>
                                        <td><a href="edit.php?id=<?php echo $row['id']; ?>&action=editProduct" class="btn btn-info">Edit</a>
                                            <a href="../../../index.php?id=<?php echo $row['id']; ?>&action=deleteProduct" class="btn btn-danger">Delete</a>
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
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>City</th>
                                        <th>Image</th>
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