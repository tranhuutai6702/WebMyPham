<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Văn phòng phẩm AGU</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
    </head>
    <body id="top">
        
        <?php include "inc/top.php"; ?>
        <div class="w3-row-padding w3-auto " style="width: 85%;">
            <div class="w3-threequarter w3-card">
                <h4 class="w3-text-blue"><?php echo $mathang['tenmathang']; ?></h4>
                <img style="width: 70%;" src="../<?php echo $mathang['hinhanh']; ?>">
                <h5 class="w3-text-black">Giá bán: <span class="w3-text-red"><?php echo $mathang['giaban']; ?></span></h5>
                <form action="detail.php" method="post">
                    <input class="" type="text" name="amount" value="1">
                    <button class="w3-button w3-red ">Chọn mua</button>
                </form>
                <h4 class="w3-text-blue">Mô tả sản phẩm:</h4>
                <div style="padding-left: 20px;">
                    <?php echo $mathang['mota']; ?>
                </div>
            </div>
            <div class="w3-quarter">
                <h4 class="w3-text-blue">Cùng danh mục:</h4>
                <?php foreach($danhsachmathang as $m){ ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <?php 
                            $giamgia = ($m['giagoc'] > $m['giaban']);
                            if($giamgia) {
                            ?>
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Giảm giá</div>
                            <?php } ?>
                            <!-- Product image-->
                            <img class="card-img-top" src="../<?php echo $m['hinhanh']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder text-info"><?php echo $m['tenmathang']; ?></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <?php
                                    if($giamgia) { ?>
                                        <span class="text-muted text-decoration-line-through"><?php echo number_format($m['giagoc']); ?>đ</span>
                                        <span class="text-danger fw-bolder"><?php echo number_format($m['giaban']); ?>đ</span>
                                    <?php } else { ?>
                                        <span class="text-muted fw-bolder"><?php echo number_format($m['giaban']); ?>đ</span>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-info mt-auto" href="?action=detail&id=<?php echo $m['id']; ?>">Chọn mua</a></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php include "inc/bottom.php"; ?>
    </body>
</html>
