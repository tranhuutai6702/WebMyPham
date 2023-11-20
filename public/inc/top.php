<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php"><i class="bi bi-shop-window"></i> Mỹ Phẩm Celina</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Trang chính</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Giới thiệu</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Danh mục sản phẩm</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Sản phẩm</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <?php
                        foreach ($danhmuc as $d): ?>
                            <li><a class="dropdown-item" href="?action=group&id=<?php echo $d["id"]; ?>">
                        <?php echo $d["tendanhmuc"]; ?>
                            </a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                <a href="#" class="btn btn-outline-light"><i class="bi bi-person"></i> Đăng nhập</a>&nbsp;
                <a href="#" class="btn btn-outline-light" ><i class="bi bi-cart3"></i> Giỏ hàng <span class="badge bg-danger text-white ms-1 rounded-pill">0</span></a>
            </div>
        </div>
    </div>
</nav>