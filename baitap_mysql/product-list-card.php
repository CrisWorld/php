<?php
    error_reporting(0);
    $count = 0;
    $conn = mysqli_connect("localhost:3306","root","","test");
    function showProduct($conn, $type){
        $query = "SELECT name,image,price,saleprice,quantity,id FROM products where category_id=$type";
        $table = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($table)){
            echo '<div class="card" style="width:300px; height: 430px;">
                    <img class="card-img-top" src="'.$row['image'].'" alt="Card image" />
                    <div class="card-body">
                        <h4 class="card-title">'.$row['name'].'</h4>
                        <p class="card-text">Còn: '.$row['quantity'].' sản phẩm</p>
                        <div class="__btn">
                            <a href="detail.php?id='.$row['id'].'" class="btn btn-primary">Xem chi tiết</a>
                            <a href="#" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>';
        }
    }
    function showContainer($title,$type){
        global $conn;
        echo"
        <div class='__container'>
            <h1 class='title'>$title</h1>
            <div class='list'>";
            showProduct($conn,$type);
        echo "</div>
        </div>";
    }
    function slide($image){
        global $count;
        if ($count == 0){
            echo '
            <div class="carousel-item active">
                <img src="'.$image.'" class="d-block w-100" alt="...">
            </div>
            ';
            $count++;
        } else {
            echo '
            <div class="carousel-item">
                <img src="'.$image.'" class="d-block w-100" alt="...">
            </div>
            ';
        }
    }
    function showSlide(){
        echo '
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          ';
        global $conn;
        $query = "SELECT image FROM slides";
        $table = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($table)){
            slide($row['image']);
        }
        echo '
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        ';
    }
?>
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
        .title{
            width: 100%;
        }
        .list{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        .__containter{
            width: 100%;
            height: 500px;
        }
    </style>
</head>
<body style="text-align: center;">
    <!-- <?php showSlide(); ?> -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $sql = "SELECT image FROM slides WHERE status = 1";
            $result = mysqli_query($conn, $sql);
            $first = true;

            while ($row = mysqli_fetch_array($result)) {
                $imageSrc = $row['image'];
                $itemClass = $first ? 'carousel-item active' : 'carousel-item';
            ?>
            <div class="<?php echo $itemClass; ?>" data-bs-interval="10000">
                <img src="<?php echo $imageSrc; ?>" class="d-block w-100" alt="...">
            </div>
            <?php
                $first = false;
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
	<!-- page content -->
<div id="page-wrapper">
    <?php
        showContainer("Sản phẩm Mới",3);
        showContainer("Sản phẩm Nam",1);
        showContainer("Sản phẩm Nữ",2);
        mysqli_close($conn);
    ?>
</div><!-- /#page-wrapper -->
<div id="bottom"></div>
</body>
</html>

