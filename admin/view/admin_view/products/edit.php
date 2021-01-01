<?php

include '../../../include_admin/header.php';
include '../../../models/RegisterModel.php';
//
require_once '../../../Helper/Connect.php';
$connection = new connectionClass;
$product = new RegisterModel($connection->conn);
$cities= new RegisterModel($connection->conn);
$category= new RegisterModel($connection->conn);
$cities = $cities->get_cities();
$category = $category->get_categories();

$result =$_GET['id'];


if ($product->get($result) == TRUE) {
    $row = $product->get($result);
    $row = $row->fetch_assoc();
}
else {
    $msg = "id doesn't match existing record";
    die();
}
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
                                <h3 class="card-title">Edit Product</h3>
                                <div class="actions">

                                                <div class="modal-body">
                                                    <h2> Data</h2>
                                                    <?php if(isset($row)){

                                                        ?>


                                                    <form action="../../../index.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data" >
                                                        <div class="row">
                                                            <div class="form-group">
                                                                <label for="addArea"></label>
                                                                <input type="hidden" class="form-control" value="editProduct" id="editProduct" name="action" >
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="sel1">Select City:</label>
                                                                    <select class="form-control" id="sel1" name="city_id" >
                                                                        <option disabled selected>Select Cities</option>
                                                                        <?php if($cities->num_rows > 0)
                                                                        {
                                                                            while($row1 = $cities->fetch_assoc()) {
                                                                                if ($row1['id'] == $row['city_id']){
                                                                                    $selected = 'selected';
                                                                                }else{
                                                                                    $selected = '';
                                                                                }
                                                                                ?>
                                                                                <option value="<?php print_r($row1['id']);?>"  <?php echo $selected?> ><?php print_r($row1['name']); ?></option>
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
                                                                       <option disabled selected>Select Category</option>
                                                                        <?php if($category->num_rows > 0)
                                                                        {
                                                                            while($row1 = $category->fetch_assoc()) {
                                                                                if($row1['id']=$row['category_id'])
                                                                                    {
                                                                                        $selected = 'selected';
                                                                                    }else{
                                                                                    $selected = '';
                                                                                }
                                                                                ?>
                                                                                <option value="<?php print_r($row1['id']);?>"  <?php echo $selected?> ><?php print_r($row1['name']); ?></option>
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

                                                                    <input type="text" class="form-control" name="name" placeholder="Enter Product Name" value="<?php echo $row["name"] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <div class="form-group">
                                                                    <label for="type">description</label>
                                                                    <input type="text" class="form-control" name="description" placeholder="Enter Description"value="<?php echo $row["description"] ?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6 mb-3">
                                                                <div class="form-group">
                                                                    <label for="name">price</label>
                                                                    <input type="text" class="form-control" name="price" placeholder="Enter Price"value="<?php echo $row["price"] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <div class="form-group">
                                                                    <label for="image">Image</label>
                                                                    <input type="File" class="form-control" name="image" value="<?php echo $row["image"] ?>">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">edit</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">

                            </table>
                        </div>
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
}
include '../../../include_admin/footer.php';
?>