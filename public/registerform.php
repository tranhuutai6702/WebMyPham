<?php
include("inc/top.php");
?>
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<div class="p-3  shadow">
		<h3 class="text-center text-info">ĐĂNG KÝ</h3>
		<form method="post" action="index.php">
		
		<input class="form-control" type="text" name="txtten" placeholder="Họ tên" required><br>
        <input class="form-control" type="text" name="txtsdt" placeholder="Số điện thoại" required><br>
        <input class="form-control" type="text" name="txtemail" placeholder="Tên đăng nhập" required><br>
		<input class="form-control" type="password" name="txtmatkhau" placeholder="Mật khẩu" required><br>
        <input class="form-control" type="password" name="txtmatkhauxacnhan" placeholder="Mật khẩu xác nhận" required><br>

		<input type="hidden" name="action" value="xldangky">
		<div class="d-grid">
		<input class="btn btn-info btn-block" type="submit" value="Đăng ký">    
		</div>
		</form>
		</div>
	</div>
	<div class="col-sm-4"></div>
</div>
<?php
?>