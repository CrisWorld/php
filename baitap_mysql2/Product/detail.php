<meta charset="utf-8">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fashion MyLiShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Fashion MyLiShop - fashion mylishop"/>
    <meta name="description" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="keywords" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="author" content="Hôih My" />
    <meta name="author" content="Y Blir" />
    <link rel="icon" type="image/png" href="images/logohong.png">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="admin/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'> -->

    <!-- customer js -->
    <script src='../Product/js/wow.js'></script>
    <script type="text/javascript" src="../Product/js/mylishop.js"></script>
    <!-- customer css -->
    <link rel="stylesheet" type="text/css" href="../Product/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../Product/css/style.css">

</head>
<body>
    <?php include("../Product/header.php"); require('./model/connect.php'); ?>
    <?php 
        $query = "";
        $product;
        if ($_GET['id']){
            $query = "SELECT * FROM products where id = ".$_GET['id'];
            $table = mysqli_query($conn, $query);
            $product = mysqli_fetch_array($table);
        }
    ?>
    <div class='container' style="display: flex;">
        <img src="<?php echo $product['image'] ?>">
        <div class="content" style="margin: 0px 0 0 40px">
            <h1>
                <?php echo $product['name'] ?>
            </h1>
            <?php 
                if ($product['saleprice'] > 0){
                    $price = $product['price'] - $product['price']*($product['salepprice']/100);
            ?>
            <span class="price">Giá cũ: <?php echo $product['price'] ?></span>
            <span class="price">Giá đã giảm: <?php echo $price ?> </span>
            <?php
                } else {
            ?>
            <span class="price">Giá sản phẩm: <?php echo $product['price'] ?></span>
            <?php 
                }
            ?>
            <br>
            <button class="btn">Đặt mua</button>
        </div>
    </div>
</body>