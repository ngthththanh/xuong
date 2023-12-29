<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Danh sách đề thi</h1>
    <!-- <p class="mb-3"><a  href="?act=add-chuyende">Thêm chuyên đề</a></p> -->
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
                            <th>Tên đề thi</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Tên đề thi</th>
                            <th>Thao tác</th>
                        </tr>
                        </tr>
                    </tfoot>
                    <tbody>
                      
                        <?php foreach ($dsd as $key => $value) : extract($value) ?>
                        <input type="hidden" name="iddt" value="<?= $id?>">
                            <td><?php echo $id ?></td>
                            <td><?php echo $ten_de ?></td>
                            <td>
                                <a href="?act=ctdt" class="btn btn-success btn-circle btn-sm"> <i class="fa fa-th-list"></i></a>
                                <a class="btn btn-primary btn-circle btn-sm" href="?act=editlt&idlt=<?php echo $id ?>"> <i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger btn-circle btn-sm" href="?act=deletedt&iddt=<?php echo $id ?>" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')'"> <i class="fas fa-trash"></i></a>
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