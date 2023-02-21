<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>
		Danh Sách
	</title>
</head>
<body>
<h1>Danh sách CV </h1>
<a href="http://localhost/web%20job/login/admin.php" action="index.html">Trang chủ admin</a>
<br>
<?php
require '../dpconnect.php';
$sql = "select * from cv";
$result = mysqli_query($connect,$sql);
?>

<table border="1" width="100%">
	<tr>
        <th>Họ và tên</th>
		<th>Số điện thoại</th>
		<th>Email</th>
		<th>Giới thiệu</th>
		<th>Công việc đăng ký</th>
		<th>Công ty đăng ký</th>
		<th>Vị trí đăng ký</th> 
	</tr>
	<?php foreach ($result  as $each): ?>
		 <tr>
    <td><?php echo $each['hoten'] ?></td>
    <td><?php echo $each['sdt'] ?></td>
    <td><?php echo $each['email'] ?></td>
    <td><?php echo $each['gioithieu'] ?></td>
   	<td><?php echo $each['tennghe'] ?></td>
   	<td><?php echo $each['congty'] ?></td>
   	<td><?php echo $each['vitri'] ?></td>
   	<td>
   		<a href="delete.php?id=<?php echo $each['tennghe'] ?>">
   			Duyệt
   		</a>
   	</td>
   </tr>
	<?php endforeach ?>
</table>
<br>
</body>
</html>