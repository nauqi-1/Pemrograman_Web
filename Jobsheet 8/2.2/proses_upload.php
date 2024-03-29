<?php
$targetDirectory = "images/";
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}
if ($_FILES['images']['name'][0]) {
    $totalFiles = count($_FILES['images']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['images']['name'][$i];
        $fileType = $_FILES['images']['type'][$i];
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($fileType, $allowedTypes)) {
            $targetFile = $targetDirectory . $fileName;
            if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFile)) {
                echo "Gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar $fileName.<br>";
            }
        } else {
            echo "File $fileName bukan gambar yang valid.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>