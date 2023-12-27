<!-- Begin Page Content -->
<div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Danh sách chuyên đề</h1>
     <p class="mb-3"><a  href="?act=add-chuyende">Thêm chuyên đề</a></p>
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
          <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
          </div>
          <div class="card-body">
               <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                         <thead>
                              <tr>
                                   <th>STT</th>
                                   <th>Tên Chuyên đề </th>
                                   <th>Hình ảnh</th>
                                   <th>Thao tác </th>
                              </tr>
                         </thead>
                         <tfoot>
                              <tr>
                                   <th>STT</th>
                                   <th>Tên Chuyên đề </th>
                                   <th>Hình ảnh</th>
                                   <th>Thao tác</th>
                              </tr>
                         </tfoot>
                         <tbody>
                              <?php foreach ($listchuyende as $chuyende) {
                                   extract($chuyende);
                                   $suacd = "index.php?act=suacd&id_cd=" . $id_cd;
                                   $xoacd = "index.php?act=xoacd&id_cd=" . $id_cd;
                                   $hinhpath = "../uploads/" . $image_cd;
                                   if (is_file($hinhpath)) {
                                        $hinh_cd = "<img src='" . $hinhpath . "' width='100px'>";
                                   } else {
                                        $hinh_cd = "";
                                   }
                                   echo '
                                   <tr>
                                        <td>' . $id_cd . '</td>
                                        <td>' . $name . '</td>
                                        <td>' . $hinh_cd . '</td>
                                        <td><a  class="btn btn-primary btn-circle btn-sm" href="' . $suacd . '">
                                        <i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-circle btn-sm" href="' . $xoacd . '"  onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');">
                                        <i class="fas fa-trash"></i></a></td>
                                   </tr>';
                              }?>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->