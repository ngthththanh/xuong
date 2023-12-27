<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Chọn câu hỏi</h1>
    <p class="mb-3"><a  href="?act=dslt">Danh sách lịch thi</a></p>
    <!-- DataTales Example -->
    <form method="post" action="?act=chon_cauhoi">
<div class="mb-3" >
<a  style="color: red;" href="javascript:void(0)" onclick="selectAllCheckboxes()">Chọn tất cả</a>
    <a   style="color: red;" href="">Bỏ chọn tất cả</a>
</div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>STT</td>
                                <td class='chuyen_de'>Chuyên đề</td>
                                <td class='cau_hoi'>Câu hỏi</td>
                                <?php for ($i = 1; $i <= $olddata['so_de_thi']; $i++) : ?>
                                    <td>Đề <?= $i ?> </td>
                                <?php endfor; ?>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td>STT</td>
                                <td class='chuyen_de'>Chuyên đề</td>
                                <td class='cau_hoi'>Câu hỏi</td>
                                <?php for ($i = 1; $i <= $olddata['so_de_thi']; $i++) : ?>
                                    <td>Đề <?= $i ?> </td>
                                <?php endfor; ?>
                            </tr>
                        </tfoot>
                        <tbody>
                            <input type="text" hidden name='id_lichthi' value='<?= $_GET['idlt'] ?>'>

                            <!-- Các checkbox cho từng đề thi -->
                            <?php foreach ($listcauhoi as $key => $value) : extract($value) ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $ten_cd ?></td>
                                    <td><?= $content ?></td>
                                    <?php for ($i = 1; $i <= $olddata['so_de_thi']; $i++) : ?>
                                        <td><input type="checkbox" id="ch_de<?= $i ?>_<?= $key ?>" name="selected_ch_de<?= $i ?>[]" value="<?= $id_ch ?>"></td>
                                    <?php endfor; ?>


                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>

    </div>
<div class="mb-3">
<button type="submit" class="btn btn-success" name="btnSubmit">Xác nhận</button>
</div>
</form>
 
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
    function selectAllCheckboxes() {
        <?php for ($i = 1; $i <= $olddata['so_de_thi']; $i++) : ?>
            var checkboxes<?= $i ?> = document.querySelectorAll('input[name="selected_ch_de<?= $i ?>[]"]');
            checkboxes<?= $i ?>.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        <?php endfor; ?>
    }
</script>