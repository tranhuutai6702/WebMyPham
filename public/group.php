<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Văn phòng phẩm AGU</title>

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
    </head>
    <body id="top">
        
        <!-- Navigation-->
        <?php include "inc/top.php"; ?>
        <!-- Section-->        
        <section class="py-5">            
            <div class="container px-4 px-lg-5 mt-1">
<!-- Cắt TOP từ trên đến đây -->
                <h3 class="text-info"><?php echo $iddanhmuc['tendanhmuc']; ?></h3>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach($mathang as $m){ ?>
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
                <ul class="pagination justify-content-center" style="margin:20px 0">
                    <li class="page-item"><a class="page-link" href="#"><i class="bi bi-caret-left-fill"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="bi bi-caret-right-fill"></i></a></li>
                </ul>
<!-- Cắt BOTTOM từ đây đến hết -->
            </div>
        </section>
        <?php include "inc/bottom.php"; ?>
    </body>
</html>
