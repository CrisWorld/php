<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body {
            height: 100%;
            background-color: whitesmoke;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 600px;
            width: 60%;
            background-color: white;
        }
        table{
            width: 50%;
            flex-grow: 1;
        }
        tr{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        tr td{
            margin: 20px;
            width: 200px;
        }
    </style>
</head>
<body>
<?php 
    session_start();
    error_reporting(0);
    if (isset($_POST["ID"]) && isset($_POST["name"]) && isset($_POST["gender"]) && isset($_POST["department"]) && isset($_POST["address"]) && isset($_POST["birthday"])
    && $_POST["name"] != "" && $_POST["ID"] != "" && $_POST["gender"] != "" && $_POST["department"] != "" && $_POST["address"] != ""){
        $ID = $_POST["ID"];
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $department = $_POST["department"];
        $address = $_POST["address"];
        $birthday = $_POST["birthday"];
        if (!isset($_SESSION["students"])){
            $_SESSION["students"] = [];
        }
        $student = array(
            "name" => $name,
            "ID" => $ID,
            "gender" => $gender,
            "department" => $department,
            "address" => $address,
            "birthday" => $birthday
        );
        array_push($_SESSION["students"],$student);
    } else {
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin!");</script>';
    }
?>
<form action="quanlyhocsinh.php" method="POST" enctype="multipart/form-data">
        <table>
            <img src="" alt="">
            <h1>Quản lý học sinh</h1>
            <tr>
                <td>Mã sinh viên</td>
                <td><input type="text" name="ID" id="ID"></td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" name="gender" id="gender" value="Nam"> Nam
                    <input type="radio" name="gender" id="gender" value="Nữ">  Nữ
                </td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><input type="text" name="address" id="address"></td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td><input type="date" name="birthday" id="birthday"></td>
            </tr>
            <tr>
                <td>Ngành học</td>
                <td><input type="text" name="department" id="department"></td>
            </tr>
            <tr>
                <td style="display: flex; justify-content: center;"><input type="submit" value="Save" style="width: 100px; height: 50px;"></td>
                <td style="display: flex; justify-content: center;"><input onclick="home()" type="button" value="Home" style="width: 100px; height: 50px;"></td>
            </tr>
        </table>
    </form>
    <script>
        function home(){
            location.href = "http://localhost/baitap/baitap_mang/show_student.php";
        }
    </script>
</body>
</html>