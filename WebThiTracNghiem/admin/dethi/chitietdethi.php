<div class="container">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <h2>DANH SÁCH ĐỀ THI</h2>
        </div>
    </nav>

    <div>
        <div>
            <form action="?act=dsdt" method="post">
                <select name="id_lichthi" id="" class='loc_dethi'>
                    <option value="" hidden>--Chọn kỳ thi --</option>
                    <?php foreach ($ds_lichthi as $key => $value) : ?>
                        <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <button class="btn" type="submit" name="btnTimkiem">Tìm kiếm</button>
            </form>
        </div>
        <br>
        <table class="table table_dsch">
            <tr>
                <th>Tên kỳ thi</th>
                <th>Tên kỳ thi</th>
                <th scope="col">STT</th>
                <th>Các câu hỏi</th>
                <th>Thao tác</th>
            </tr>

            <?php
            $previousTestId = null;
            $previousExamId = null;
            foreach ($dsdt as $key => $value) : extract($value) ?>
                <?php
                // Kiểm tra nếu đề thi hiện tại khác đề thi trước đó thì mới hiển thị tên kỳ thi
                if ($id_lichthi != $previousExamId) {
                    echo "<tr><td colspan='5'>" . $ten_kythi . "</td></tr>";
                }
                if ($id_dethi  != $previousTestId) {
                    echo "<tr><td></td><td colspan='5'>" . $ten_de . "</td></tr>";
                }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td><?= $key + 1 ?></td>
                    <td><?= $ten_cauhoi . "</br>" ?></td>
                    <td>
                        <!-- <a class="btn" href="">Sửa</a> -->
                        <a class="btn" href="">Xóa</a>
                    </td>
                </tr>
                <?php
                $previousTestId = $id_dethi ;
                $previousExamId = $id_lichthi;
                ?>
            <?php endforeach; ?>
        </table>
    </div>
</div>