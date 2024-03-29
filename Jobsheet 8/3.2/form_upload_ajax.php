<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Gambar</title>
</head>
<body>
    <h2>Multiupload Gambar</h2>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="file" multiple="multiple" accept="image/*">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload3.2.js"></script>
</body>
</html>