<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title></title>
</head>
<body>
    <h1>Form đăng ký thông tin</h1>
<form action='process_insert.php' method="post" action="" class="form">
            <table class="table">
                <tr>
                    <td>Họ và tên</td>
                    <td><input type="text" name="hoten" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="text" name="sdt" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Giới thiệu bản thân</td>
                    <td><textarea name="gioithieu" id="" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>Công việc đăng ký</td>
                    <td><input type="text" name="tennghe" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Công ty đăng ký</td>
                    <td><input type="text" name="congty" id="" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Chức vụ đăng ký</td>
                    <td><textarea name="vitri" id="" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button>Gửi dữ liệu</button>
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>