<?php
include("inc/top.php");
?>

<h3 class="text-info ">Giỏ hàng của bạn: </h3>
<form action="index.php">
<table class="table table-hover">
    <tr><th>Hình ảnh</th><th>Tên hàng</th><th>Giá</th><th>Số lượng</th><th>Thành tiền</th></tr>
<?php 
foreach($giohang as $id => $gh){ 
?>
    <tr>
        <td><img width="50" src="../<?php echo $gh['hinhanh']; ?>"></td>
        <td><?php echo $gh['tenmathang']?></td>
        <td><?php echo number_format($gh['giaban']);?>đ</td>
        <td><input type="number" name="mh[<?php echo $id; ?>]" value="<?php echo $gh['soluong']?>"></td>
        <td><?php echo number_format($gh['thanhtien']);?>đ</td>
    </tr>
<?php } ?>

    <tr>
        <td colspan="3"></td>
        <td colspan="fw-bold">Tổng tiền</td><td class="text-danger fw-bold">
            <?php echo number_format(tinhtiengiohang());?>đ
        </td>
    </tr>
</table>

<div class="row">
    <div class="col">
        <a href="index.php?action=xoagiohang">Xóa tất cả</a>

    </div>
    <div class="col text-red">
        <input type="hidden" name="action" value="capnhatgio">
        <input type="submit" class="btn btn-warning" value="Cập nhật">
        <a href="index.php?action=thanhtoan" class="btn btn-success">Thanh toán</a>
    </div>

</div>
</form>
<?php
include("inc/bottom.php");
?>