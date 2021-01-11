<?php
session_start();
$id = $_SESSION['users']['id']; 
$title='edit_profile';
$active = 'profile';
include '../../includes/header.php';

include '../../Helper/ViewHelper.php';
$result =$user->get_single_user_data($id);


 ?>
    <section class="inner-page">
        <div class="container">


                <section id="appointment" class="appointment section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Edit Profile!</h2>
            <p>You can easily update your profile here!! </p>
        </div>
         <?php 
        if($result->num_rows > 0)
        {
        $index = 1;
       
        ?>
        <form action="../../index.php" method="post" enctype="multipart/form-data" class="php-email-form">
            <div class="row">
            	<?php
                         while($row = $result->fetch_assoc()) {?>
                <input type="hidden" name="role_type" value="user">
                <!--action-->
                <input type="hidden" class="form-control" value="edit_profile" id="edit_profile" name="action">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="col-md-4 form-group">
                <!--name-->
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>" placeholder="Your Name" required>
                </div>
                   <!--contact-->
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="number" class="form-control" id="contact" name="contact" value="<?php echo $row['contact'] ?>"  placeholder="Contact #" required>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="address" class="form-control" value="<?php echo $row['address'] ?>" placeholder="Your Address" required>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" name="city" class="form-control" value="<?php echo $row['city'] ?>" placeholder="Your City" required>
                </div>
                 
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
			  		<label for="image">preview last image:</label>
			  		 <img src = "http://localhost/medilab<?php echo $row['image'];?> "width="200px" height="200px">
				</div>
                <div class="col-md-4 form-group">
                    <label>
                    Select image to Upload: </label>
                    <input type="file" name="image"  placeholder="Thumbnail here">
                </div>
            </div>
            <div class="text-center"><button class="btn btn-success" name="submit" value="submit" id="submit" type="submit">submit</button></div>
            <?php }?>
        </form>
        <?php 
          }else{
            echo "no data found";
          }
          ?>
        </div>
    </section>

    </div>
    </section>
    <?php include '../../includes/footer.php' ?>