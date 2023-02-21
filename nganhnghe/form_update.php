<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 

if(empty($_GET['tennghe'])){
header('location:index.php?erros=Phải truyền mã để sửa');

}
$id = $_GET['tennghe'];
     include '../menu.php';
     require '../dpconnect.php';
$sql = "select * from nghenghiep
where tennghe = '$tennghe'";
 $result = mysqli_query($connect,$sql);
 $each = mysqli_fetch_array($result);
?>
<form action='process_update.php'method="post">
	Công việc tuyển dụng
	<input type="text" name="tennghe" value="<?php echo $each['tennghe'] ?>">
	<br>
	Công ty tuyển dụng
    <input type="text" name="congty" value="<?php echo $each['congty'] ?>">
	<br>
	Chức vụ tuyển dụng
	<input type="text" name="vitri" value="<?php echo $each['vitri'] ?>">
	<br>
	Mức lương
	<input type="text" name="mucluong" value="<?php echo $each['mucluong'] ?>">
	<br>
	<button>Sửa</button>
</form>
</body>
</html>