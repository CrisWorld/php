<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li{
            text-decoration: none;
            list-style: none;
        }
    </style>
</head>
<body>
    <?php
        $school = array(
            "students"=>array(
                "SV001"=>array(
                    "name"=>"Nguyễn Minh Hoàng",
                    "birthday"=>"04/01/2004",
                    "gender"=>"Nam"
                ),
                "SV002"=>array(
                    "name"=>"Phạm Văn An",
                    "birthday"=>"04/12/2004",
                    "gender"=>"Nam"
                ),
                "SV003"=>array(
                    "name"=>"Lê Phương Uyên",
                    "birthday"=>"09/02/2004",
                    "gender"=>"Nữ"
                ),
                "SV004"=>array(
                    "name"=>"Lê Nhật Trường",
                    "birthday"=>"27/05/2004",
                    "gender"=>"Nam"
                ),
                "SV005"=>array(
                    "name"=>"Nguyễn Kim Oanh",
                    "birthday"=>"04/11/2004",
                    "gender"=>"Nữ"
                ),
            ),
            "teachers"=>array(
                "GV001"=>array(
                    "name"=>"Bùi Cao Vũ",
                    "birthday"=>"02/01/1989",
                    "gender"=>"Nam"
                ),
                "SV002"=>array(
                    "name"=>"Nguyễn Quốc Long",
                    "birthday"=>"02/06/1978",
                    "gender"=>"Nam"
                ),
                "SV003"=>array(
                    "name"=>"Kim Hạnh",
                    "birthday"=>"09/30/1999",
                    "gender"=>"Nữ"
                ),
                "SV004"=>array(
                    "name"=>"Lê Phú Linh",
                    "birthday"=>"17/08/1994",
                    "gender"=>"Nam"
                ),
                "SV005"=>array(
                    "name"=>"Nguyễn Kim Phượng",
                    "birthday"=>"04/11/1998",
                    "gender"=>"Nữ"
                )
            )
        );
        foreach($school as $type=>$list){
            echo '<div class='.$type.'>';
            foreach($list as $code => $person){
                echo '<li><p><strong>Mã:</strong> '.$code.'</p>';
                echo '<li><p><strong>Tên:</strong> '.$person['name'].'</p>';
                echo '<li><p><strong>Ngày sinh:</strong> '.$person['birthday'].'</p>';
                echo '<li><p><strong>Giới tính:</strong> '.$person['gender'].'</p>';
                echo '<br/>';
            }
            echo '</div>';
        }
    ?>
</body>
</html>