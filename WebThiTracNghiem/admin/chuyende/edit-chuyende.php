<?php
if (is_array($a)) {
    extract($a);
}
$hinhpath = "../uploads/" . $image_cd;
if (is_file($hinhpath)) {
    $hinh_cd = "<img src='" . $hinhpath . "' width='200px'>";
}else{
    $hinh_cd = "";
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Cập nhật chuyên đề</h1>
     <p class="mb3"><a  href="?act=dsch">Danh sách câu hỏi</a></p>
    <form action="index.php?act=updatecd" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="">CHUYÊN ĐỀ:</label>
            <input type="text" class="form-control" name="tencd" value="<?php if (isset($name) && ($name != "")) echo $name ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Hình ảnh</label>
            <?php echo $hinh_cd ?><br>
            <input class="form-control" type="file" name="image_cd">
        </div>
        <div class="mb-3">
            <input type="hidden" name="id_cd" value="<?php if (isset($id_cd) && ($id_cd > 0)) echo $id_cd; ?>">
            <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-success" >
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>


</div>