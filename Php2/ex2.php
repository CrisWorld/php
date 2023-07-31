<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="ex2.css">
</head>
<body style="display: block;">
    <?php 
        $products = array(
            "impression" => array(
                "PD001" => array(
                    "name" => "Nokia black future",
                    "price" => "280.000",
                    "star" => 5,
                    "Evaluation" => 9999,
                    "img" => "https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg"
                ),
                "PD002" => array(
                    "name" => "Huawei nova i2",
                    "price" => "3.990.000",
                    "star" => 4,
                    "Evaluation" => 904,
                    "img" => "https://cdn.tgdd.vn/Products/Images/42/118143/huawei-nova-2i-hh-600x600-600x600.jpg"
                ),
                "PD003" => array(
                    "name" => "Xiaomi Redmi Note 5",
                    "price" => "5.690.000",
                    "star" => 5,
                    "Evaluation" => 372,
                    "img" => "https://cdn.tgdd.vn/Products/Images/42/153953/xiaomi-redmi-note-5-blue-600x600.jpg"
                ),
                "PD004" => array(
                    "name" => "Xiaomi Redmi 5 Plus 4GB",
                    "price" => "4.790.000",
                    "star" => 4,
                    "Evaluation" => 347,
                    "img" => "https://didongmango.com/images/products/2023/02/11/original/oppo-a83-600x600-300x300_1676092993.jpg.jpg"
                ),
                "PD005" => array(
                    "name" => "Itel it2123",
                    "price" => "160.000",
                    "star" => 5,
                    "Evaluation" => 302,
                    "img" => "https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-d-300-300x300.jpg"
                )
            ),
            "new" => array(
                "PD001" => array(
                    "name" => "Xiaomi Redmi Note 5",
                    "price" => "5.690.000",
                    "star" => 5,
                    "Evaluation" => 372,
                    "img" => "https://cdn.tgdd.vn/Products/Images/42/153953/xiaomi-redmi-note-5-blue-600x600.jpg"
                ),
                "PD002" => array(
                    "name" => "Mobiistar Zumbo S2 Dual",
                    "price" => "2.850.000",
                    "star" => 4,
                    "Evaluation" => 104,
                    "img" => "https://cdn.tgdd.vn/Products/Images/42/113175/mobiistar-zumbo-s2-dual-300x300.jpg"
                ),
                "PD003" => array(
                    "name" => "Mobiistar B310",
                    "price" => "260.000",
                    "star" => 5,
                    "Evaluation" => 87,
                    "img" => "https://cdn.tgdd.vn/Products/Images/42/151637/mobiistar-b310-mau-cam-thumb-org.png"
                ),
                "PD004" => array(
                    "name" => "Itel it2161",
                    "price" => "170.000",
                    "star" => 5,
                    "Evaluation" => 33,
                    "img" => "https://cdn.tgdd.vn/Products/Images/42/193989/itel-it2161-1.jpg"
                ),
                "PD005" => array(
                    "name" => "Realme 2 Pro 8GB/128GB",
                    "price" => "6.990.000",
                    "star" => 5,
                    "Evaluation" => 16,
                    "img" => "https://cdn.tgdd.vn/Products/Images/42/192002/oppo-realme-2-pro-black-600x600.jpg"
                ),
            )
        );
    ?>
    <div class="banner">* Nổi bật nhất *</div>
    <?php 
        echo '<div class="container1">';
        foreach ($products['impression'] as $key => $product) {
            echo '
            <div class="card" style="width:20%">
                <img class="card-img-top" src="'.$product['img'].'" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">'.$product['name'].'</h4>
                    <p class="card-text price">'.$product['price'].'đ</p>
                    <div class="evaluation">
                        <div class="stars">';
                        for ($x=0;$x<5;$x++){
                            if ($x<$product['star']) echo '<i class="fa-solid fa-star"></i>';
                            else echo '<i class="fa-regular fa-star"></i>';
                        }
                        echo '
                        </div>
                        <div class="quanity">'.$product['Evaluation'].' đánh giá</div>
                    </div>
                    <button><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
            ';
        }
        echo '</div>';
        echo '<div class="banner2">* Sản phẩm mới nhất *</div>';
        echo '<div class="container1">';
        foreach ($products['new'] as $key => $product) {
            echo '
            <div class="card" style="width:20%">
                <img class="card-img-top" src="'.$product['img'].'" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">'.$product['name'].'</h4>
                    <p class="card-text price">'.$product['price'].'đ</p>
                    <div class="evaluation">
                        <div class="stars">';
                        for ($x=0;$x<5;$x++){
                            if ($x<$product['star']) echo '<i class="fa-solid fa-star"></i>';
                            else echo '<i class="fa-regular fa-star"></i>';
                        }
                        echo '
                        </div>
                        <div class="quanity">'.$product['Evaluation'].' đánh giá</div>
                    </div>
                    <button><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
            ';
        }
        echo '</div>';
    ?>
</body>
</html>