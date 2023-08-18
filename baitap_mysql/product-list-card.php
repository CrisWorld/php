<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .__btn{
            justify-content: space-around;
            display: flex;
            width: calc(100% - 36px);
            position: absolute;
            bottom: 10px;
        }
        .card-img-top{
            height: 250px;
        }
        #page-wrapper{
            display: flex;
            width: 100%;
            justify-content: space-around;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }
        .card-img-top{
            transition: 0.4s ease-in;
        }
        .card-img-top:hover{
            scale: 0.95;
        }
    </style>
</head>
<body style="text-align: center;">
    <h1>Sản Phẩm</h1>
    <a href="#bottom">Lướt xuống</a>
	<!-- page content -->
<div id="page-wrapper">
    <?php
        $conn = mysqli_connect("localhost:3306","root","","production");
        $query = "SELECT name,image,price,saleprice,quantity FROM products";
        $table = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($table)){
            echo '<div class="card" style="width:300px; height: 430px;">
            <img class="card-img-top" src="'.$row['image'].'" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">'.$row['name'].'</h4>
                <p class="card-text">Còn: '.$row['quantity'].' sản phẩm</p>
                <div class="__btn">
                    <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    <a href="#" class="btn btn-primary">Mua ngay</a>
                </div>
            </div>
        </div>';
        }
        mysqli_close($conn);
    ?>
</div><!-- /#page-wrapper -->
<div id="bottom"></div>
</body>
</html>

