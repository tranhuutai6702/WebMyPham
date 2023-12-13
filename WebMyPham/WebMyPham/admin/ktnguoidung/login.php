<!DOCTYPE html>
<html lang="en">
<link href="../inc/css/app.css" rel="stylesheet">
	<script src="../inc/js/app.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form action="index.php" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="txtemail"
                                                placeholder="Nhập email" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Mật khẩu</label>
                                            <input class="form-control form-control-lg" type="password"
                                                name="txtmatkhau" placeholder="Nhập mật khẩu" />
                                        </div>
                                        <div class="d-grid gap-2 my-3">
                                            <input type="hidden" name="action" value="xldangnhap">
                                            <input type="submit" class="btn btn-lg btn-primary" value="Đăng nhập">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            Chưa có tài khoản? <a href="index.php?action=dangky">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>