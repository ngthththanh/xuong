<?php
session_start();
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/chuyende.php";
include "../model/lichthi.php";
include "../model/dethi.php";
include "_header.php";
include "_menu.php";
include "../model/dethi_cauhoi.php";
?>

<div>
    <?php
    $dslt = loadall_lichthi();
    $dscd = loadall_chuyende();
    //Controller
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];

        switch ($act) {
         

            case "login": {
                    if (isset($_POST['btnSubmit'])) {
                        if ($_POST['username'] != "" && $_POST['password'] != "") {
                            $check_user = check_user($_POST['username'], $_POST['password']);
                            if (is_array($check_user)) {
                                //Tạo ra biến Session để lưu kết quả vừa tìm đc
                                $_SESSION['user'] = $check_user;
                                echo "<script>window.location.href='?act=trangchu';</script>";
                                /*   header("Location:?act=trangchu"); */
                            } else {
                                $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký";
                            }
                        } else {
                            $thongbao = "Tên đăng nhập và mật khẩu không được để trống";
                        }
                    }
                    include "login.php";
                    break;
                }

            case 'register':

                include "register.php";
                break;
            case 'About':

                include "About.php";
                break;
            case 'chuyende':

                include "chuyende.php";
                break;
            case 'lichthi':

                include "trangchu.php";
                break;
            case 'logout':

                unset($_SESSION['user']);
                header('location:?act=trangchu');
                break;
            case 'admin':

                header("Location:../admin/index.php");
                break;
            case "trangthi":
                if (isset($_GET['id_lichthi'])) {
                    $id_lichthi = $_GET['id_lichthi'];
                    $lichthi = getOne_lichthi($id_lichthi);
                    // Tải dữ liệu đề thi
                    $list_trangthi = loadAll_dethi($id_lichthi);
                    // Hiển thị nội dung trang_thi.php, chẳng hạn
                    //echo "Nội dung trang thi ở đây.";
                } else {
                    // Xử lý trường hợp không có id_lichthi được cung cấp
                    //echo "Vui lòng cung cấp id_lichthi.";
                }
                echo "<style>
                    header,footer {
                        display:none;
                    }
                </style>";
                $list_cauhoi = load_cauoi($list_trangthi['id']);
                

                include 'trang_thi2.php';
               
                break;
                case 'trangchu':

                    include "home.php";
                    break;
            default:

                include "home.php";
                break;
        }
    } else {

        include "home.php";
    }
    ?>
</div>

<?php
include "_footer.php";
?>