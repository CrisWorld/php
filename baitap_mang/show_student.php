<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 2px solid black;
        }
        th{
            border: 2px solid black;
        }
        td{
            border-right: 2px solid black;
        }
    </style>
</head>
<body>
    <?php 
        session_start();
        $students = [];
        if (isset($_SESSION["students"])){
            $students = $_SESSION["students"];
        } else echo '<script>alert("không có thông tin học sinh!"); </script>';
    ?>
    <table>
        <tr>
            <th>STT</th>
            <th>Mã SV</th>
            <th>Họ và tên</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
            <th>Năm sinh</th>
            <th>Chuyên ngành</th>
        </tr>
        <?php
            foreach($students as $key => $student){
                echo '
                <tr>
                    <td>'.$key.'</td>
                    <td>'.$student["ID"].'</td>
                    <td>'.$student["name"].'</td>
                    <td>'.$student["gender"].'</td>
                    <td>'.$student["address"].'</td>
                    <td>'.$student["birthday"].'</td>
                    <td>'.$student["department"].'</td>
                </tr>
                ';
            }
        ?>
    </table>
</body>
</html>