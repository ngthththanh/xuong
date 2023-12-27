<?php

//Hàm xử lý đăng ký tài khoản ở dao khachhang.php

function check_user($username, $password)
{
    $sql = "SELECT * FROM taikhoan WHERE username = '" . $username . "' AND password = '" . $password . "' ";
    $result = pdo_query_one($sql);
    return $result;
}

function edit_tk($id, $user, $pass, $email, $address, $tel)
{
    $sql = "UPDATE `taikhoan` SET `user`='$user',`pass` = '$pass' ,`email`='$email',`address`='$address',`tel`='$tel' WHERE id = $id";
    pdo_execute($sql);
}

function check_email($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email = '" . $email . "' ";
    $result = pdo_query_one($sql);
    return $result;
}

function loadall_taikhoan()
{
    $sql = "select * from taikhoan ";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function add_taikhoan($user, $pass, $fullname, $email, $address, $role)
{
    $sql = "INSERT INTO `taikhoan`(`username`, `password`, `fullname`,`email`, `address`,`role`) VALUES ('$user','$pass','$fullname','$email','$address','$role')";
    pdo_execute($sql);
}
function getold_taikhoan($idtk)
{
    $sql = "SELECT * FROM taikhoan WHERE id =$idtk";
    $result = pdo_query_one($sql);
    return $result;
}
function update_taikhoan($id, $user, $pass, $email, $address, $role)
{
    $sql = "UPDATE `taikhoan` SET `username`='$user',`password`='$pass',`email`='$email',`address`='$address',`role`='$role' WHERE id= $id";
    pdo_execute($sql);
}

function delete_taikhoan($idtk)
{
    $sql = "DELETE FROM `taikhoan` WHERE id=$idtk";
    pdo_execute($sql);
}
