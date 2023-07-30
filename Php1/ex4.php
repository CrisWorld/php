<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body {
            margin: 0;
            height: 100%;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(to bottom, rgba(18,42, 66, .85), rgba(18,42, 66, .85)), url(https://hoctuvungmoingay.com/wp-content/uploads/2016/02/1125.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .style1{
            font-size: 36px;
            font-weight: bold;
        }
        .style5{
            font-size: 16px;
            font-weight: bold;
        }
        form{
            display: grid;
            width: 50%;
            height: 400px;
            position: relative;
        }
        table{
            display: flex;
            justify-self: center;
            align-items: center;
            width: 80%;
            height: 100%;
            place-self: center;
            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;
            background: rgba(255, 255, 255, 0.74);
        }
        tbody{
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php
    $average = "";
    $result = "";
    $type = "";
    $hk1 = "";
    $hk2 = "";
    if (isset($_POST['hk1']) && isset($_POST['hk2']) && $_POST['hk1'] != "" && $_POST['hk2'] != ""){
        $hk1 = $_POST['hk1'];
        $hk2 = $_POST['hk2'];
        $average = round(($hk1+$hk2*2)/3,2);
        if ($average>=5) $result = "Được lên lớp"; else $result = "Không đủ điều kiện lên lớp";
        if ($average>=8) $type = "Giỏi"; 
        else if ($average>=6.5) $type = "Khá"; 
        else if ($average>=5) $type = "Trung bình";
        else $type = "Yếu";
    }
    ?>
    <form action="ex4.php" method="POST">
        <table>
            <tr style="margin-bottom: 30px">
                <td colspan="2"><span class="style1">KẾT QUẢ HỌC TẬP</span></td>
            </tr>
            <tr>
                <td width="160"><span class="style5">Điểm HK1: </span></td>
                <td>
                    <label for="hk1">
                        <input type="text" id="hk1" name="hk1" value="<?php 
                                if (isset($_POST['hk1'])){ echo $hk1; }
                                else echo "";
                            ?>" size="20"
                        >
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span class="style5">Điểm HK2: </span></td>
                <td>
                    <label for="hk2">
                        <input type="text" id="hk2" name="hk2" value="<?php
                                if (isset($_POST['hk2'])){ echo $hk2; }
                                else echo "";
                            ?>" size="20"
                        >
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span class="style5">Điểm trung bình: </span></td>
                <td>
                    <label for="average">
                        <input readonly="true" type="text" id="average" name="average" value="<?php echo $average; ?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span class="style5">Kết quả: </span></td>
                <td>
                    <label for="result">
                        <input readonly="true" type="text" id="result" name="result" value="<?php echo $result;?>" size="20">
                    </label>
                </td>
            </tr>
            <tr>
                <td width="160"><span class="style5">Xếp loại học lực: </span></td>
                <td>
                    <label for="type">
                        <input type="text" id="type" name="type" readonly="true" value="<?php echo $type;?>" size="20">
                    </label>
                </td>
            </tr>
            <tr style="margin-top: 30px">
                <td colspan="2">
                    <input type="submit" name="Submit" value="Xem kết quả">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
</body>
</html>