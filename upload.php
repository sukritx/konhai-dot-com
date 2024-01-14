<?php
require_once 'conn.php';

if (isset($_POST['upload'])) {
    $image_name = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $ext = explode(".", $image_name);
    $end = end($ext);
    $allowed_ext = array("jpg", "jpeg", "gif", "png");
    $name = time() . "." . $end;
    $path = "assets/img/found-img/" . $name;

    // Get location and date inputs
    $location = $_POST['location'];
    $found_date = $_POST['found_date'];

    if (in_array($end, $allowed_ext)) {
        if ($image_size > 10485760) {
            echo "<script>alert('File too large!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        } else {
            // Load the image using GD library
            $source_image = imagecreatefromjpeg($image_temp);

            // Compress the image (adjust quality as needed)
            $compressed_path = "assets/img/found-img/compressed_" . $name;
            imagejpeg($source_image, $compressed_path, 60); // Adjust quality (0-100) as needed

            // Move the compressed image to the final path
            if (rename($compressed_path, $path)) {
                // Insert the image data into the database
                mysqli_query($conn, "INSERT INTO `image` VALUES('', '$name', '$path', '$location', '$found_date')") or die(mysqli_error());

                echo "<script>alert('Image uploaded!')</script>";
                echo "<script>window.location = 'index.php'</script>";
            }
        }
    } else {
        echo "<script>alert('Invalid image format!')</script>";
        echo "<script>window.location = 'index.php'</script>";
    }
}
?>
