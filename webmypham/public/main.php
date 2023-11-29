<?php
include("inc/top.php");
?>

<?php 
foreach($danhmuc as $d){ 
    $i = 0;
?>
<h3><a class="text-decoration-none text-info" href="index.php?action=group&id=<?php echo $d["id"]; ?>">
    <?php echo $d["tendanhmuc"]; ?></a></h3>
<?php
    if($i == 0) 
        echo "<p>Danh mục hiện chưa có sản phẩm.</p>";
    else 
?>
        <div class="text-end mb-2"><a class="text-warning text-decoration-none fw-bolder" href="index.php?action=group&id=<?php echo $d["id"]; ?>">Xem thêm <?php echo $d["tendanhmuc"]; ?></a></div>
<?php
} 
?>

<?php
include("inc/bottom.php");
?>