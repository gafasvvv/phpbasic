<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fileupload</title>
</head>
<body>
    <!-- $_FILE -->
    <form method="POST" action="file2.php" enctype="multipart/form-data">
        <label for="upfile"> ファイルアップロード</label>
        <input type="hidden" name="max_file_size" value="1000000" />
        <input id="upfile" type="file" name="upfile" size="40"/>
        <input type="submit" value="アップロード" />
    </form>
</body>
</html>