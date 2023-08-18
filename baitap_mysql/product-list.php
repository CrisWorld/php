<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- page content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1 class="page-header"> Danh sách sản phẩm </h1>
			</div><!-- /.col -->

			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th> STT </th>
						<th> Tên sản phẩm </th>
						<th> Mã danh mục </th>
						<th> Hình ảnh </th>
						<th> Giá </th>
						<th> Giảm giá </th>
						<th> Chỉnh sửa </th>
						<th> Xóa </th>
					</tr>
				</thead>
				<tbody>
				<?php
					$conn = mysqli_connect("localhost:3306","root","","production");
					$query = "SELECT name,category_id,image,price,saleprice FROM products";
					$table = mysqli_query($conn,$query);
					$stt = 0;
					while ($row = mysqli_fetch_array($table)){
						echo "
					<tr>
						<td>".$stt."</td>
						<td>".$row['name']."</td>
						<td>".$row['category_id']."</td>
						<td><img src='".$row['image']."'></td>
						<td>".$row['price']."</td>
						<td>".$row['saleprice']."</td>
						<td><button>sửa</button></td>
						<td><button>X</button></td>
					</tr>";
						$stt++;
					}
					mysqli_close($conn);
				?>
				</tbody>
			</table>
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
</body>
</html>

