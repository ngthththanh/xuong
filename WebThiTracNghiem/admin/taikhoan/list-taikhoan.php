<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Danh sách khách hàng</h1>
    <p class="mb-3"><a href="?act=addtk">Thêm khách hàng</a></p>
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
                            <td>Tên đăng nhập</td>
                            <td>Họ tên</td>
                            <td>Địa chỉ</td>
                            <td>Email</td>
                            <td>Role</td>
                            <td>Thao tác</td>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>STT</td>
                            <td>Tên đăng nhập</td>
                            <td>Họ tên</td>
                            <td>Địa chỉ</td>
                            <td>Email</td>
                            <td>ROLE</td>
                            <td>Thao tác</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        foreach ($listtaikhoan as $key => $taikhoan) {
                            extract($taikhoan);
                            if ($role == 1) {
                                $vaitro = "Admin";
                            } else {
                                $vaitro = "Thành viên";
                            }
                            echo ' <tr>
                        <td>' . $id . '</td>
                        <td>' . $username . '</td>
                        <td>' . $fullname . '</td>
                        <td>' . $address . '</td>
                        <td>' . $email . '</td>
                        <td>' .  $vaitro . '</td>
                        <td><a  class="btn btn-primary btn-circle btn-sm"  href="?act=edittk&idtk=' . $id . '">
                        <i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger btn-circle btn-sm" onclick="hoixoa(' . $id . ')"  onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\');">
                        <i class="fas fa-trash"></i></a></td>
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
<script>
    function hoixoa(id) {
        let ok = confirm("Bạn có thực sự muốn xóa hay không.");
        if (ok) {
            window.location.href = "?act=dltk&idtk= " + id;
        }
    }
</script>