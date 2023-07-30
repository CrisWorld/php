<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .style1{
            font-size: 36px;
            font-weight: bold;
        }
        .style5{
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST['dai']) && isset($_POST['rong']) && $_POST['dai'] != "" && $_POST['rong'] != ""){
        $dai = $_POST['dai'];
        $rong = $_POST['rong'];
        $dt = $dai*$rong;
    }
    ?>
    <form action="ex3.php" method="POST">
        <table>
            <tr>
                <td colspan="2"><span class="style1">DIỆN TÍCH HÌNH CHỮ NHẬT</span></td>
            </tr>
            <tr>
                <td width="125"><span class="style5">Chiều dài: </span></td>
                <td>
                    <label for="dai">
                        <input type="text" id="dai" name="dai" value="<?php 
                                if (isset($_POST['dai'])){ echo $_POST["dai"]; }
                                else echo "";
                            ?>" size="20"
                        >
                    </label>
                </td>
            </tr>
            <tr>
                <td width="125"><span class="style5">Chiều rộng: </span></td>
                <td>
                    <label for="rong">
                    <input type="text" id="rong" name="rong" value="<?php
                            if (isset($_POST['rong'])){ echo $_POST["rong"]; }
                            else echo "";
                        ?>" size="20"
                    >
                    </label>
                </td>
            </tr>
            <tr>
                <td width="125"><span class="style5">Diện tích: </span></td>
                <td>
                    <label for="dt">
                    <input type="text" id="dt" name="dt" readonly="true" value="<?php 
                            if (isset($dt)){ echo $dt; }
                            else echo "";
                        ?>" size="20"
                    >
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="Submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>