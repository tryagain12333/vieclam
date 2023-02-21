<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>
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
                        <button>Lưu dữ liệu</button>
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>