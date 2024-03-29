<?php
$targetDirectory = "uploads/";
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}
if (!empty($_FILES['files'])) {
    foreach ($_FILES['files']['name'] as $i => $name) {
        if ($_FILES['files']['error'][$i] === 0) {
            $fileName = basename($_FILES['files']['name'][$i]);
            $fileType = $_FILES['files']['type'][$i];
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (in_array($fileType, $allowedTypes)) {
                $targetFile = $targetDirectory . $fileName;
                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                    echo "Gambar $fileName berhasil diunggah.<br>";
                } else {
                    echo "Gagal mengunggah gambar $fileName.<br>";
                }
            } else {
                echo "File $fileName bukan gambar yang valid.<br>";
            }
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>