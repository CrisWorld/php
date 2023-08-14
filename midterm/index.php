<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <span class="title">THÔNG TIN VỀ ĐẠI DỊCH COVID-19</span>
    </header>
    <div class="show-btn">
        <span>SHOW</span>
    </div>
    <div id="information" class="active">
        <?php 
            error_reporting(0);
            if (file_exists("info.csv")) {
                $file = fopen("info.csv","r");
                $data = fgetcsv($file);
                while(!feof($file)) {
                    $data = fgetcsv($file);
                    echo '
                    <div class="card">
                        <span class="date">'.$data[0].'</span>
                        <span class="title">'.$data[1].'</span>
                        <span class="content">'.$data[2].'</span>
                    </div>
                    ';
                }
                fclose($file);
            }
        ?>
    </div>
    <div class="box-info">
        <div class="box infected">
            <span class="title">Số ca nhiễm</span>
            <span class="quanity">11.608.697</span>
            <span class="message"></span>
        </div>
        <div class="box cured">
            <span class="title">Khỏi</span>
            <span class="quanity">10.637.138</span>
            <span class="message"></span>
        </div>
        <div class="box death">
            <span class="title">Tử vong</span>
            <span class="quanity">43.206</span>
            <span class="message"></span>
        </div>
    </div>
    <div class="article">
        <span>Bản tin Covid-19</span>
    </div>
    <div class="container">
        <?php 
            if (file_exists("data.csv")) {
                $file = fopen("data.csv","r");
                $data = fgetcsv($file);
                while(!feof($file)) {
                    $data = fgetcsv($file);
                    echo '
                    <div class="card">
                        <div class="time">
                            <span><strong>'.$data[0].'</strong></span> <br>
                            <span class="date">'.$data[1].'</span>
                        </div>
                        <img class="image" src="'.$data[8].'" alt="Ảnh">
                        <div class="content">
                            <a class="title" href="'.$data[2].'" target="_blank">'.$data[3].'</a>
                            <span class="description">'.$data[4].'</span>
                        </div>
                    </div>
                    ';
                }
                fclose($file);
            }
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>