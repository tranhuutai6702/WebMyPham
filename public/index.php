<?php 
require("../model/database.php");
require("../model/danhmuc.php");
require("../model/mathang.php");

$dmnew = new DANHMUC();
$danhmuc = $dmnew->laydanhmuc();
$mhnew = new MATHANG();

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="null"; 
}

switch($action){
    case "null":
        $mathang = $mhnew->laymathang(); 
        include("main.php");
        break;
    case "group":
        $mathang = $mhnew->laymathangtheodanhmuc($_REQUEST["id"]); 
        $iddanhmuc = $dmnew->laydanhmuctheoid($_REQUEST["id"]);
        include("group.php");
        break;
    case "detail":
        $mathang = $mhnew->laymathangtheoid($_REQUEST["id"]);
        $danhsachmathang = $mhnew->laymathangtheodanhmuc_ignore($mathang['danhmuc_id'], $mathang['id']);
        include("detail.php");
        break;
    default:
        break;
}
?>
