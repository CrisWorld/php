<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        form{
            background-color: red;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
            color: white;
        }
        input[type="submit"]{
            width: 100px;
            height: 50px;
        }
        tr{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }
        td{
            width: 30%;
        }
    </style>
</head>
<body>
    <?php
        error_reporting(0);
    ?>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <table>
            <tbody>
                <tr style="width: 100%; text-align:center;">
                    <td style="width: 100%; font-size: 24px;">
                        TẠO VÀ GHI VÀ ĐỌC FILE
                    </td>
                </tr>
                <tr>
                    <td>
                        Tên file:
                    </td>
                    <td>
                        <input type="text" name="path" id="path" value="<?php echo $_POST["path"]; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nội dung: 
                    </td>
                    <td>
                        <textarea name="content" id="content" cols="30" rows="10"><?php echo $_POST["content"]; ?></textarea>
                    </td>
                </tr>
                <tr><td><input type="submit" value="Ghi và đọc"></td></tr>
            </tbody>
        </table>
    </form>
    <?php
        function writeFile(){
            if(isset($_POST["path"]) && isset($_POST["content"])){
                $filename = $_POST["path"];
                $content = $_POST["content"];
                if (file_exists($filename)){
                    echo "<script>alert('File đã tồi tại!')</script>";
                } else {
                    $file = fopen($filename,"w");
                    fwrite($file,$content);
                    fclose($file);
                }
            }
        }
        function readdFile(){
            if( isset($_POST["path"]) && null !== isset($_POST["content"])){
                $filename = $_POST["path"];
                $fp = fopen($filename,"r");
                if (file_exists($filename)){
                    echo "File trong đường dẫn $filename có nội dung là: <br>";
                    while(!feof($fp)){
                        echo fgets($fp)."<br>";
                    }
                }
                fclose($fp);
            }
        }
        writeFile();
        readdFile();
    ?>
</body>
</html>
