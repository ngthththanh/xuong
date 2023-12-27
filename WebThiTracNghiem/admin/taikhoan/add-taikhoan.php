<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Thêm khách hàng</h1>
     <p class="mb-3"><a  href="?act=dstk">Danh sách khách hàng</a></p>
     <form id="registrationForm" action="?act=addtk" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Tên đăng nhập</label>
            <input type="text" class="form-control" name="user" id="user" required placeholder="Nhập tên tài khoản">
        </div>
        <div class="mb-3">
            <label for="">Tên khách hàng</label>
            <input type="text" class="form-control" name="full_name" id="user" required placeholder="Nhập tên khách hàng">
        </div>
        <div class="mb-3">
            <label for="">Mật khẩu</label>
            <input type="text" class="form-control" name="password" id="user" required placeholder="Nhập mật khẩu">
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" id="email" required placeholder="Nhập email khách hàng">
        </div>
        <div class="mb-3">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="address" id="address" required placeholder="Nhập địa chỉ khách hàng">
        </div>
        <div class="mb-3">
                <label for="role">Role</label>
                <select name="role" class="form-select" aria-label="Default select example">
                    <option value="1">Admin</option>
                    <option value="2">Khách hàng</option>
                </select>
            </div>
        <div class="mb-3">
            <input type="submit" name="btn-addtk" onclick="validateForm()" class="btn btn-success" value="Thêm mới">
        </div>
    </form>
</div>