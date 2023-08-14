<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background: red; color: white; text-align: center;">
        <?php
            error_reporting(0);
            if (!file_exists("file1.txt")) echo "<script>alert('File không tồn tại!')</script>";
            $fh = fopen("file1.txt","r") or die("<h1>Failed to create a file</h1>");
            $content = "";
            while(!feof($fh)){
                $content .= fgets($fh)."<br>";
            }
            echo $content;
            fclose($fh);
        ?>
    </div>
</body>
</html>