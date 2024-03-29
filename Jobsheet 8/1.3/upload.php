<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $uploadSuccess = true;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }
    if (file_exists($targetFile)) {
        echo "Maaf, file sudah ada.";
        $uploadSuccess = false;
    }
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($fileType, $allowedExtensions)) {
        echo "Maaf, hanya file JPG, JPEG, PNG, dan GIF yang diizinkan.";
        $uploadSuccess = false;
    }
    $maxFileSize = 5 * 1024 * 1024;
    if ($_FILES["fileToUpload"]["size"] > $maxFileSize) {
        echo "Maaf, ukuran file terlalu besar. Maksimal 5MB.";
        $uploadSuccess = false;
    }
    if ($uploadSuccess) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            $thumbnailWidth = 200; 
            $thumbnailPath = $targetDirectory . "thumbnail_" . basename($_FILES["fileToUpload"]["name"]);
            list($width, $height) = getimagesize($targetFile);
            $aspectRatio = $width / $height;
            $thumbnailHeight = round($thumbnailWidth / $aspectRatio);

            if ($fileType == "jpg" || $fileType == "jpeg") {
                $sourceImage = imagecreatefromjpeg($targetFile);
            } 
            elseif ($fileType == "png") {
                $sourceImage = imagecreatefrompng($targetFile);
            } 
            elseif ($fileType == "gif") {
                $sourceImage = imagecreatefromgif($targetFile);
            }
            $thumbnailImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
            imagecopyresampled($thumbnailImage, $sourceImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $width, $height);
            if ($fileType == "jpg" || $fileType == "jpeg") {
                imagejpeg($thumbnailImage, $thumbnailPath);
            } 
            elseif ($fileType == "png") {
                imagepng($thumbnailImage, $thumbnailPath);
            } 
            elseif ($fileType == "gif") {
                imagegif($thumbnailImage, $thumbnailPath);
            }
            imagedestroy($sourceImage);
            imagedestroy($thumbnailImage);
            echo "File berhasil diunggah dan thumbnail berhasil dibuat.";
        } 
        else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>