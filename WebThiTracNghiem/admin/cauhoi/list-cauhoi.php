<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Danh sách câu hỏi</h1>
     <p class="mb-3"><a  href="?act=addch">Thêm câu hỏi</a></p>

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
                                   <th scope="col">STT</th>
                                   <th>Câu hỏi</th>
                                   <th>Hình ảnh</th>
                                   <th>Chuyên đề</th>
                                   <th>Thao tác</th>
                              </tr>
                         </thead>
                         <tfoot>
                              <tr>
                                   <th scope="col">STT</th>
                                   <th>Câu hỏi</th>
                                   <th>Hình ảnh</th>
                                   <th>Chuyên đề</th>
                                   <th>Thao tác</th>
                              </tr>
                         </tfoot>
                         <tbody>
                              <?php
                              foreach ($listcauhoi as $key => $cauhoi) {
                                   extract($cauhoi);
                                   $suach = "index.php?act=editch&id=" . $id_ch;
                                   $xoach = "index.php?act=xoach&id=" . $id_ch;

                                   $dsda = "index.php?act=dsda&id=" . $id_ch;

                                   $hinhpath = "../uploads/" . $image;
                                   if (is_file($hinhpath)) {
                                        $hinh = "<img src='" . $hinhpath . "' width='80px'>";
                                   } else {
                                        $hinh = "";
                                   }
                                   echo
                                   '<tr>
                     
                    <td style="width: 5%">' . $key + 1 . '</td>
                    
                    <td style="width: 55%">' . $content . '</td>
                    <td style="width: 10%">' . $hinh . '</td>
                    <td style="width:15%">' . $ten_cd . '</td>
                    <td>
                    <a class="btn btn-success btn-circle btn-sm" href="' . $dsda . '"><i class="fa fa-list"></i></a>
                    <a  class="btn btn-primary btn-circle btn-sm" href="' . $suach. '">
                    <i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger btn-circle btn-sm" href="' . $xoach . '"  onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');">
                    <i class="fas fa-trash"></i></a></td>
             
                    
                    </td>
               </tr>';
                              }
                              ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->