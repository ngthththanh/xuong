<!-- Begin Page Content -->
<div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Danh sách đề thi</h1>
     <p class="mb-3"><a  href="?act=add-chuyende"></a></p>
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
          <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
          </div>
          <div class="card-body">
               <div class="table-responsive">
               <form action="?act=dsdt" method="post">
                <select name="id_lichthi" id="" class='loc_dethi'>
                    <option value="" hidden>--Chọn kỳ thi --</option>
                    <?php foreach ($ds_lichthi as $key => $value) : ?>
                        <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <button class="btn" type="submit" name="btnTimkiem">Tìm kiếm</button>
            </form>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                         <thead>
                              <tr>
                              <th>Tên kỳ thi</th>
                <th>Tên kỳ thi</th>
                <th scope="col">STT</th>
                <th>Các câu hỏi</th>
                <th>Thao tác</th>
                              </tr>
                         </thead>
                         <tfoot>
                              <tr>
                              <th>Tên kỳ thi</th>
                <th>Tên kỳ thi</th>
                <th scope="col">STT</th>
                <th>Các câu hỏi</th>
                <th>Thao tác</th>
                              </tr>
                         </tfoot>
                         <tbody>
                            
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
                        <a class="btn btn-danger btn-circle btn-sm" href=""><i class="fas fa-trash"></i></a></td>
                    </td>
                </tr>
                <?php
                $previousTestId = $id_dethi ;
                $previousExamId = $id_lichthi;
                ?>
            <?php endforeach; ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->