<!-- Begin Page Content -->
<div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Danh sách kết quả thi</h1>
     <p class="mb-3"><a  href="?act=addkq">Thêm kết quả</a></p>
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
                                   <td>STT</td>
                                   <td>Bộ kết quả</td>
                                   <td>Tên người dùng</td>
                                   <td>ID đề thi </td>
                                   <td>Điểm</td>
                                   <td>Thao tác</td>
                              </tr>
                         </thead>
                         <tfoot>
                              <tr>
                                   <td>STT</td>
                                   <td>Bộ kết quả</td>
                                   <td>Tên người dùng</td>
                                   <td>ID đề thi </td>
                                   <td>Điểm</td>
                                   <td>Thao tác</td>
                              </tr>
                         </tfoot>
                         <tbody>
                              <?php foreach ($dskq as $key => $value) : ?>
                                   <tr>
                                        <td><?php echo $value['id'] ?></td>
                                        <td><?php echo $value['bo_ket_qua'] ?></td>
                                        <td><?php echo $value['username'] ?></td>
                                        <td><?php echo $value['id'] ?></td>
                                        <td><?php echo $value['diem'] ?>đ</td>
                                        <td><a href="">Xem chi tiết</a></td>
                                   </tr>
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