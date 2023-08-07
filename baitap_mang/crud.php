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
            width: 10%;
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
        }
    </style>
</head>
<body>
    <?php 
        session_start();
        error_reporting(0);
        if (isset($_POST["ID"]) && isset($_POST["name"]) && isset($_POST["price"]) && isset($_FILES["fileupload"]) && isset($_POST["status"]) && isset($_POST["star"])
        && $_POST["price"] != "" && $_POST["status"] != "" && $_POST["star"] != "" && $_POST["name"] != "" && $_POST["ID"] != ""){
            $ID = $_POST["ID"];
            $name = $_POST["name"];
            $price = $_POST["price"];
            $fileupload = $_FILES["fileupload"];
            $status = $_POST["status"];
            $star = $_POST["star"];
            if (isset($_FILES["fileupload"])){
                move_uploaded_file($_FILES["fileupload"]['tmp_name'], "upload/".$_FILES["fileupload"]['name']);
            }
            $products = $_SESSION["product"];
            if (strcmp($status,"1") == 0){
                $product = array(
                    "name" => $name,
                    "price" => $price,
                    "star" => $star,
                    "Evaluation" => 0,
                    "img" => "upload/".$_FILES["fileupload"]['name']
                );
                $products["impression"][$ID] = $product;
            } else if (strcmp($status,"2") == 0){
                $product = array(
                    "name" => $name,
                    "price" => $price,
                    "star" => $star,
                    "Evaluation" => 0,
                    "img" => "upload/".$_FILES["fileupload"]['name']
                );
                $products["new"][$ID] = $product;
            }
            $_SESSION["product"] = $products;
        } else {
            echo '<script>alert("Vui lòng nhập đầy đủ thông tin!");</script>';
        }
    ?>
    <form action="crud.php" method="POST" enctype="multipart/form-data">
        <table>
            <img src="" alt="">
            <h1>Thêm sản phẩm</h1>
            <tr>
                <td>ID</td>
                <td><input type="text" name="ID" id="ID"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" id="price"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name="fileupload" id="fileupload"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" id="status"></td>
            </tr>
            <tr>
                <td>Star</td>
                <td><input type="range" min="0" max="5" step="1" value="3" name="star" id="star"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Save" style="width: 100px; height: 50px;"></td>
                <td><input onclick="home()" type="button" value="Home" style="width: 100px; height: 50px;"></td>
            </tr>
        </table>
    </form>
    <script>
        function home(){
            location.href = "http://localhost/baitap/baitap_mang/ex2.php";
        }
    </script>
</body>
</html>