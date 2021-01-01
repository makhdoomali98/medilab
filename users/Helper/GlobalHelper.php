<?php
Class GlobalHelper{


function upload_file($file){
        $target_dir = '../users/images/';
        $target_file = $target_dir.  round(microtime(true)). rand(9, 9999) . $file['name'];
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
       
            $check = getimagesize($file["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
                // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file['tmp_name'], $target_file)) {
                
                echo "The file ". htmlspecialchars( basename( $file['name'])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        return $target_file;
    }
}//main class close 