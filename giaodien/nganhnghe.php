<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>
		Danh Sách
	</title>
</head>
<body>
<div class="wrapper">
        <div class="header">
            <div class="logo">
                <h1>Gud Jobs</h1>
            </div>
			
        </div>
    </div>
<h1>Danh sách việc làm đang tuyển dụng </h1>
<a href="http://localhost/web%20job/" action="index.html">Trang chủ</a>
<div>
   <input type = “text” giữ chỗ name = “Nhập từ khóa tìm kiếm” = “khóa_tìm_kiếm”>
   <button type = “submit” name = “TÌM”> Tìm kiếm </button>
</div>
<br>
<?php
require '../dpconnect.php';
$sql = "select * from nghenghiep";
$result = mysqli_query($connect,$sql);
?>

<table border="1" width="100%">
	<tr>
		<th>Công việc tuyển dụng</th>
		<th>Công ty tuyển dụng</th>
		<th>Vị trí tuyển dụng</th>
		<th>Mức lương</th>
		<th>Kinh nghiệm</th>
		<th>Thời gian làm việc</th>
		<th>Địa điểm</th>
        <th></th>
	</tr>
	<?php foreach ($result  as $each): ?>
		 <tr>
   	<td><?php echo $each['tennghe'] ?></td>
   	<td><?php echo $each['congty'] ?></td>
   	<td><?php echo $each['vitri'] ?></td>
   	<td><?php echo $each['mucluong'] ?></td>
	<td><?php echo $each['kinhnghiem'] ?></td>
	<td><?php echo $each['thoigian'] ?></td>
	<td><?php echo $each['diadiem'] ?></td>
    <td>
    <a href="http://localhost/web%20job/cv/form_insert.php">
   			Ứng tuyển
   		</a>
    </td>
   </tr>
	<?php endforeach ?>
</table>
<br>
<div class="footer">
        <div class="footer-content">
                <ul class="about">
                    <a href="">Về GudJobs</a>
                    <ul>
                        <li>Quy chế hoạt động</li>
                        <li>Quy định bảo mật</li>
                        <li>Thoả thuận sử dung</li>
                        <li>8.000.000 - 10.000.000</li>
                        <li>Sơ đồ trang web</li>
                    </ul>
                </ul>

                <ul class="about">
                    <a href="">Dành cho ứng viên</a>
                    <ul>
                        <li>Việc làm</li>
                        <li>Tìm việc làm nhanh</li>
                        <li>Công ty</li>
                        <li>Cẩm nang việc làm</li>
                        <li>Mẫu CV xin việc</li>
                    </ul>
                </ul>

                <ul class="about">
                    <a href="">Việc làm theo khu vực</a>
                    <ul>
                        <li>Hà Nội</li>
                        <li>Hồ Chí Minh</li>
                        <li>Đà Nẵng</li>
                        <li>Hải Phòng</li>
                        <li></li>
                    </ul>
                </ul>


                <ul class="about">
                    <a href="">Dành cho nhà tuyển dụng</a>
                    <ul>
                        <li>Dịch vụ nhân sự cao cấp</li>
                        <li>Cẩm nang tuyển dụng</li>
                        <li><li>
                        <li></li>
                        </li></li>
                    </ul>
                </ul>
        </div>
    </div>
    
    <div class="copyright">
        <div class="copyright-logo">Gud Jobs</div>
        <p>Tuyển dụng, tìm kiếm việc làm trực tuyến tại Gud Jobs | Customer Care:(028) 3813 0000 / contact@Gud Jobs</p>
        <p>Không CopyRight dưới mọi hình thức | Design by QngNam</p>
    </div>
</body>
</html>