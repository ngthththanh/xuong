<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Thêm chuyên đề</h1>
     <p class="mb-3"><a href="?act=dscd">Danh sách chuyên đề</a></p>
    <form action="index.php?act=add-chuyende" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="">Tên chuyên đề</label>
            <input type="text" class="form-control" name="tencd" placeholder="Nhập tên chuyên đề">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Hình ảnh</label>
            <input class="form-control" type="file" id="formFile" name="image_cd">
        </div>
        <div class="mb-3">
            <input type="submit" value="Thêm mới" class="btn btn-success" name="themcd">
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</div>