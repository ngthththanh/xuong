
<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Cập nhật đáp án</h1>
     <p class="mb3"><a  href="?act=dsch">Danh sách đáp án</a></p>
     <form action="?act=editda" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $olddata['id'] ?>">
        <div class="mb-3">
        <label for="">Nội dung đáp án</label>
            <input type="text" class="form-control" name="content_dapan" value="<?= $olddata['content_dapan'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Hình ảnh</label>
            <?php
                    if ($olddata['image'] != "" && $olddata['image'] != null) {
                        echo "<img width='150' src='../uploads/{$olddata['image']}'>";
                    }

                    ?>
            <input class="form-control" type="file" name="img">
        </div>
    
        <div>
                    <label for="">Đáp án</label>
                    <select name="right_answer" id="">
                        <option value="2" <?php if ($olddata['right_answer'] == '2') echo 'selected'; ?>>Sai</option>
                        <option value="1" <?php if ($olddata['right_answer'] == '1') echo 'selected'; ?>>Đúng</option>
                    </select>
                </div>

                <div>
                    <!-- <label for="">Câu hỏi</label> <br> -->
                    <select name="id_question" id="" hidden >
                        <?php foreach ($idcauhoi as $key => $value) : ?>
                            <option value="<?= $value['id_ch']; ?>" <?php if ($olddata['id_question'] == $value['id_ch']) : ?> selected <?php endif; ?>>
                                <?= $value['content'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
    
    <input type="submit" name="btnSubmit" value="Cập nhật" class="btn btn-success" >
</div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>


</div>