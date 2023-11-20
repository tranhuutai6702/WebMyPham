<!-- Carousel -->
<div id="demo" class="carousel slide shadow" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>>
</div>
<!-- Footer-->
<footer class="py-5 bg-danger">
    <div class="text-center mb-5"><a class="text-warning" href="#top"><i class="bi bi-chevron-up"  style="font-size: 3rem; font-weight: bold; color:white;"></i></a></div>
    
    <div class="container">
        <div class="row">
            <div class="col-6 text-light">
                <h4><span class="badge text-white bg-success">A</span>
                    <span class="badge text-white bg-danger">B</span>
                    <span class="badge text-white bg-warning">C</span> Shop - Cửa hàng văn phòng phẩm</h4>
                <p><b><i>Địa chỉ:</i></b> 18 Ung Văn Khiêm, phường Đông Xuyên, TP Long Xuyên, An Giang<br>
                    <b><i>Điện thoại:</i></b> 076 3841190<br> 
                    <b><i>Email:</i></b> abc@abc.com</p>
            </div>
            <div class="col-3 text-muted">
                <h4>DANH MỤC HÀNG</h4>
                <?php foreach ($danhmuc as $d): ?>
                    <a href="?action=group&id=<?php echo $d["id"]; ?>" class="list-group-item"><?php echo $d["tendanhmuc"]; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="col-3 text-muted">
                <h4>DỊCH VỤ KHÁCH HÀNG</h4>
                <a href="#" class="list-group-item">Hướng dẫn mua hàng</a>
                <a href="#" class="list-group-item">Câu hỏi thường gặp</a>
                <a href="#" class="list-group-item">Liên hệ với chúng tôi</a>
            </div>
        </div>
        <hr>
        <p class="m-0 text-center text-warning fw-bolder">Copyright &copy; ABC Shop 2023</p>
    </div>
</footer>
