<!-- Begin Page Content -->
<div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Cập nhật khách hàng</h1>
     <p class="mb-3"><a href="?act=dstk">Danh sách khách hàng</a></p>
     <form action="?act=edittk" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idtk" value="<?php echo $old_taikhoan['id']; ?>">
        <div class="mb-3">
            <label for="">Tên đăng nhập</label>
            <input type="text" class="form-control" name="user" value="<?php echo $old_taikhoan['username'] ?>">
        </div>
        <div class="mb-3">
            <label for="">Tên khách hàng</label>
            <input type="text" class="form-control" name="full_name" value="<?php echo $old_taikhoan['fullname'] ?>">
        </div>
        <div class="mb-3">
            <label for="">Mật khẩu</label>
            <input type="text" class="form-control" name="password" value="<?php echo  $old_taikhoan['password'] ?>">
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $old_taikhoan['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="address" value="<?php echo $old_taikhoan['address'] ?>">
        </div>
        <div class="mb-3">
                <label for="role">Role</label>
                <select name="role" id="role">
                    <option value="2" <?php if ($old_taikhoan['role'] == "2") : ?> selected <?php endif; ?>>Khách hàng</option>
                    <option value="1" <?php if ($old_taikhoan['role'] == "1") : ?> selected <?php endif; ?>>Admin</option>
                </select>
            </div>
        <div class="mb-3">
            <input type="submit" name="btn-addtk" onclick="validateForm()" class="btn btn-success" value="Thêm mới">
        </div>
    </form>
</div>