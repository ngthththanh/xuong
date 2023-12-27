
<?php
if (is_array($cauhoi)) {
    extract($cauhoi);
}
$hinhpath = "../uploads/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' width='200px'>";
}else{
    $hinh= "";
}
?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Cập nhật câu hỏi</h1>
<p class="mb-3"><a  href="?act=dsch">Danh sách câu hỏi</a></p>
    <form action="index.php?act=update_ch" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id_ch ?>">
        <div class="mb-3">
            <label class="form-label">Câu hỏi</label>
            <input type="text" class="form-control" name="content" value="<?= $content ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Hình ảnh</label> <br>
            <?php echo $hinh ?><br>
            <input class="form-control" type="file" name="image">
        </div>
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="idcd">
                <option value="0">Chuyên đề</option>
                <?php
                foreach ($listchuyende as $chuyende) {
                    extract($chuyende);
                    if ($cauhoi['id_cd'] == $id_cd) $s = "selected";
                    else $s = "";
                    echo ' <option value="' . $id_cd . '" ' . $s . ' >' . $name . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <input class="btn btn-success" type="submit" name="capnhat" value="Cập nhật">
        </div>
    </form>
</div>