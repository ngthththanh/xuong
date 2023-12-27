<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Danh sách lịch thi</h1>
    <p class="mb-3"><a href="?act=addlt">Thêm lịch thi</a></p>
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
                            <td>Tên kì thi</td>
                            <td>Hình ảnh</td>
                            <td>Thời gian bắt đầu</td>
                            <td>Thời gian kết thúc</td>
                            <td>Thời gian làm bài </td>
                            <td>Số lượng đề thi</td>
                            <td>Thao tác</td>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>STT</td>
                            <td>Tên kì thi</td>
                            <td>Hình ảnh</td>
                            <td>Thời gian bắt đầu</td>
                            <td>Thời gian kết thúc</td>
                            <td>Thời gian làm bài </td>
                            <td>Số lượng đề thi</td>
                            <td>Thao tác</td>
                        </tr>
                    </tfoot>
                    <tbody>
                       
                        
                            <?php foreach ($dslt as $key => $value) : extract($value) ?>
                            <input type="hidden" name="idlt" value="<?= $id?>">
                                <?php $hinhpath = "../uploads/" . $image_lt;
                                if (is_file($hinhpath)) {
                                    $hinh_lt = "<img src='" . $hinhpath . "' width='100px'>";
                                } else {
                                    $hinh_lt = "";
                                } ?>
                                <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $hinh_lt ?></td>
                                    <td><?php echo $time_start ?></td>
                                    <td><?php echo $time_end ?></td>
                                    <td><?php echo $time ?>p</td>
                                    <td><?php echo $so_de_thi ?></td>
                                    <td><a href="?act=chon_cauhoi&idlt=<?php echo $id ?>" class="btn btn-success btn-circle btn-sm"> <i class="fas fa-check"></i></a>
                                        <a href="?act=dsdt&idlt=<?php echo $id ?>" class="btn btn-success btn-circle btn-sm"> <i class="fa fa-th-list"></i></a>
                                        <a class="btn btn-primary btn-circle btn-sm" href="?act=editlt&idlt=<?php echo $id ?>"> <i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-circle btn-sm" href="?act=deletelt&idlt=<?php echo $id ?>" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')'"> <i class="fas fa-trash"></i></a>
                               
                                    </td>
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