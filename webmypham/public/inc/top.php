<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>TPT Shop | Mỹ Phẩm</title>

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

</head>

<body id="top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php"><i class="bi bi-shop-window"></i> TPT Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><input type="text" placeholder="Tìm kiếm: son, kem dưỡng ẩm, toner,..."
                            style="width:300px; padding: 5px;">
                    </li>
                </ul>
                <div class="d-flex">
                    <?php if (isset($_SESSION["khachhang"])) { ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link text-warning" href="index.php?action=thongtin">Chào
                                    <?php echo $_SESSION["khachhang"]["hoten"]; ?>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?action=dangxuat">Đăng xuất</a></li>
                        </ul>
                    <?php } else { ?>
                        <a href="index.php?action=dangnhap" class="btn btn-outline-light"><i class="bi bi-person"></i> Đăng
                            nhập</a>
                    <?php } ?>
                    &nbsp;
                        <a href="index.php?action=giohang" class="btn btn-outline-light" ><i class="bi bi-cart3"></i> Giỏ hàng <span class="badge bg-danger text-white ms-1 rounded-pill"><?php echo demsoluongtronggio(); ?></span></a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary p-3">
        <div class="container">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Danh mục sản phẩm</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php foreach ($danhmuc as $d): ?>
                        <li><a class="dropdown-item" href="?action=group&id=<?php echo $d["id"]; ?>">
                                <?php echo $d["tendanhmuc"]; ?>
                            </a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
    </nav>
    <!-- Section-->
    <section class="py-5">
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>TPT Shop | Mỹ Phẩm</title>

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

</head>

<body id="top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php"><i class="bi bi-shop-window"></i> TPT Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item" style="position: relative;">
                        <input type="text" placeholder="Tìm kiếm: son, kem dưỡng ẩm, toner,..."
                            style="width:320px; padding: 5px;">
                        <i class="bi bi-search"
                            style="z-index: 10; color: dark; position: absolute; right: 0; top: 15%; padding: 0 8px;"></i>
                    </li>
                </ul>
                <div class="d-flex">
                    <?php if (isset($_SESSION["khachhang"])) { ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"><a class="nav-link text-warning" href="index.php?action=thongtin">Chào
                                    <?php echo $_SESSION["khachhang"]["hoten"]; ?>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?action=dangxuat">Đăng xuất</a></li>
                        </ul>
                    <?php } else { ?>
                        <a href="index.php?action=dangnhap" class="btn btn-outline-light"><i class="bi bi-person"></i> Đăng
                            nhập</a>
                    <?php } ?>
                    &nbsp;
                    <a href="index.php?action=giohang" class="btn btn-outline-light"><i class="bi bi-cart3"></i> Giỏ
                        hàng <span class="badge bg-danger text-white ms-1 rounded-pill">
                            <?php echo demsoluongtronggio(); ?>
                        </span></a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="bg-secondary p-3" style="height: 10px; padding: 8px;">
        <button class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false" style="margin-top: -10px;"><i class="bi bi-list"></i> Danh mục sản phẩm
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach ($danhmuc as $d): ?>
                    <li><a class="dropdown-item" href="?action=group&id=<?php echo $d["id"]; ?>">
                            <?php echo $d["tendanhmuc"]; ?>
                        </a></li>
                <?php endforeach; ?>
            </ul>
        </button>
    </nav>
    <!-- Section-->
    <section class="py-5">
>>>>>>> 93ff21dfd9f3570d1f2ea189b72fa9f3eebdb350
        <div class="container px-4 px-lg-5 mt-1">