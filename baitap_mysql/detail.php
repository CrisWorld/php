<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body,html{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php 
        error_reporting(0);
        require('connect.php');
        $query = "SELECT name,image,price,saleprice,quantity,id,description,created from products where id = ".$_GET['id'].";";
        $table = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($table);
    ?>
    <?php 
        echo '
            <div class="card mb-3" style="width: 80%; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="'.$row['image'].'" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">'.$row['name'].'</h5>
                        <p class="card-text">Mô tả: '.$row['description'].'</p>
                        <p class="card-text"><small class="text-muted">'.$row['created'].'</small></p>
                        <p class="card-text"><small class="text-muted">Còn '.$row['quantity'].' sản phẩm</small></p>
                        <a href="#" style="position: absolute; bottom: 30px; right: 30px;" class="btn btn-primary">Mua ngay</a>
                    </div>
                    </div>
                </div>
            </div>
        ';
    ?>
</body>
</html>