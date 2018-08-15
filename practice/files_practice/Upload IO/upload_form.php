<?php

// PHP creates temp file upon upload ('tmp_name'). Its up to user to move temp file to permanent folder

$target_dir = 'C:/xampp/uploads2/';//"uploads/"; --> shows that can save file in folder above root (above htdocs)
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
print "<div> File Name: " . basename($_FILES["fileToUpload"]["name"]) . "</div>";

// shows that you can upload multiple files and they will be saved in $_FILE array
print "<div> Second File Name: " . basename($_FILES["fileToUpload2"]["name"]) . "</div>";
print "<div> Target File: " . $target_file . " </div>";



$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
print "<div> Image File Type: " . $imageFileType . " </div>";


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>