<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        $svname = "localhost";
        $username = "root";
        $password = "";
        $con = mysqli_connect($svname, $username, $password,"testphpconnect");
        if (!$con) {
            echo "Error connecting".'<br>';
        } else echo "Connection established".'<br>';
        $str = 'SELECT * FROM userinfo';
        $query = mysqli_query($con,$str);
        while ($row = mysqli_fetch_array($query)){
            echo 'Name: '.$row['name'].'<br>';
            echo 'gender: '.$row['gender'].'<br>';
            echo 'age: '.$row['age'].'<br>';
            echo 'ID: '.$row['ID'].'<br>';
        }
    ?>
</body>
</html>