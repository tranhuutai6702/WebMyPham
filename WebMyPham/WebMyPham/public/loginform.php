<?php
include("inc/top.php");
?>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="p-3  shadow">
            <h3 class="text-center text-info">ĐĂNG NHẬP</h3>
            <form method="post" action="index.php">

                <input class="form-control" type="text" name="txtemail" placeholder="Tên" required><br>
                <input class="form-control" type="password" name="txtmatkhau" placeholder="Mật khẩu" required><br>

                <input type="hidden" name="action" value="xldangnhap">
                <div class="d-grid">
                    <input class="btn btn-info btn-block" type="submit" value="Đăng nhập">
                </div>
                <div class="text-center mb-3">
                    Chưa có tài khoản? <a href="index.php?action=dangky">Đăng ký</a>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>