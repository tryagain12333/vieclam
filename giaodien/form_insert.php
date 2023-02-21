<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>
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
<br><br><br>
<div class="h2">
     <h2>Công việc muốn tuyển dụng</h2>
</div>
	<?php
     include '../menu.php';
?>

<form action='process_insert.php' method="post" action="" class="form">
            <table class="table">
                <tr>
                    <td>Tên công việc tuyển dụng</td>
                    <td><input type="text" name="tennghe" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Công ty tuyển dụng</td>
                    <td><input type="text" name="congty" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Chức vụ tuyển dụng</td>
                    <td><textarea name="vitri" id="" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>Mức lương</td>
                    <td><input type="text" name="mucluong" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Kinh Nghiệm yêu cầu</td>
                    <td><input type="text" name="kinhnghiem" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Thời gian làm việc</td>
                    <td><input type="text" name="thoigian" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Địa điểm</td>
                    <td><input type="text" name="diadiem" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button>Gửi dữ liệu</button>
                    </td>
                </tr>
            </table>
        </form>
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