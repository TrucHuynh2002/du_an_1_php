<?php
include("../../controller/gobal.php");
include("../../..$database/function.php");
include("../../..$thuvien/library_email/index.php");
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
    case 'dangky':
        if (isset($_POST['sub_mit'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $nl_pass = $_POST['nl_pass'];
            $dia_chi = $_POST['dia_chi'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $hinh = "Trend-Avatar-Facebook.jpg";
            $vai_tro = "free";
            $kiemtra_email = '/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/';
            $row = khach_hang();
            foreach ($row as $a) {
                if ($user == $a['ten_dang_nhap']) {
                    echo " <script>alert('Tên đăng nhập đã tồn tại')</script>";
                    return;
                }
            }
            if (preg_match($kiemtra_email, $email, $matchs)) {
                if ($pass == $nl_pass) {
                    if (strlen($user) > 6) {
                        $matkhau = md5($pass);
                        $row = insert_khachhang($user, $matkhau, $hinh, $email, $sdt, $dia_chi, $vai_tro);
                        echo "<script>alert('Đăng ký tài khoản thành công')</script>";
                        header("location:$view/dangnhap.php");
                        return;
                    } else {
                        echo "<script>alert('Tên đăng ký phải lớn hơn 6 ký tự')</script>";
                        return;
                    }
                } else {
                    echo "<script>alert('Mật khẩu không khớp');</script>";
                    return;
                }
            } else {
                echo "<script>alert('Nhập email không đúng định dạng')</script> ";
                return;
            }
            break;
        }
    case 'dangnhap':
        if (isset($_POST['sub_mit'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $matkhau = md5($pass);
            echo $matkhau;
            $row = khach_hang();
            foreach ($row as $a) {
                if ($user == 'admin' & $pass == '123456') {
                    $_SESSION['user'] = $user;
                    header("location:$admin/layout.php?danhmuc_list");
                    return;
                } else if ($user == $a['ten_dang_nhap'] & $matkhau == $a['pass']) {
                    $_SESSION['user'] = $user;
                    header("location:$taikhoan/layout.php?tai_khoan_list");
                    // } else {
                    //     echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu');</script>";
                    //     return;
                }
            }
            break;
        }
    case 'email':
        if (isset($_POST['sub_mit'])) {
            $user = $_POST['user'];
            $email = $_POST['email'];
            if ($email == '') {
                echo "<script>alert('Không được để trống email')</script>";
            } else {
                $row = khach_hang_email($email);
                foreach ($row as $a) {
                    if ($email != $a['email']) {
                        echo "<script>alert('Không tồn tại email này');</script>";
                        return;
                    }
                }
                $code = substr(rand(0, 999999), 0, 6);
                $title = 'Quên mật khẩu';
                $content = "Mã xác nhận của bạn là <span style='color:red;'>$code</span>";
                $mail = sendMail($title, $content, $email);
                $_SESSION['email'] = $email;
                $_SESSION['code'] = $code;
                $_SESSION['user'] = $user;
                header("location:$view/ma_code.php");
            }
            break;
        }
    case 'ma_code':
        if (isset($_POST['sub_mit'])) {
            $ma = $_POST['ma_code'];
            if ($_SESSION['code'] == $ma) {
                header("location:$view/mat_khau_moi.php");
                unset($_SESSION['code']);
                return;
            } else {
                echo "<script>alert('Mã code không tồn tại hoặc đã sữ dụng');</script>";
                return;
            }
        }
        break;
    case 'mk_moi':
        if (isset($_POST['sub_mit'])) {
            $user = $_SESSION['user'];
            $mk_moi = $_POST['mk_moi'];
            $nl_mk_moi = $_POST['nl_mk_moi'];
            if ($mk_moi == $nl_mk_moi) {
                $email = $_SESSION['email'];
                $matkhau = md5($mk_moi);
                $row = update_khachhang_mk($matkhau, $email, $user);
                echo "<script>alert('Cập nhật mật khẩu thành công');</script>";
                header("location:$view/dangnhap.php");
                unset($_SESSION['email']);
                unset($_SESSION['user']);
                return;
            } else {
                echo "<script>alert('Mật khẩu nhập không khớp');</script>";
                return;
            }
        }
        break;
    case 'sdt':
        if (isset($_POST['sub_mit'])) {
            $sdt = $_POST['sdt'];
            if ($sdt == '') {
                echo "<script>alert('Không được để trống sdt')</script>";
            } else {
                $row = khach_hang_sdt($sdt);
                foreach ($row as $a) {
                    if ($sdt != $a['sdt']) {
                        echo "<script>alert('Không tồn tại số điện thoại này');</script>";
                        return;
                    }
                }
                // // Require the bundled autoload file - the path may need to change
                // // based on where you downloaded and unzipped the SDK
                // $sid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
                // $token = 'your_auth_token';
                // $client = new Client($sid, $token);
                // // Use the client to do fun stuff like send text messages!
                // $client->messages->create(
                //     // the number you'd like to send the message to
                //     '+15558675309',
                //     [
                //         // A Twilio phone number you purchased at twilio.com/console
                //         'from' => '+15017250604',
                //         // the body of the text message you'd like to send
                //         'body' => "Hey Jenny! Good luck on the bar exam!"
                //     ]
                // );
                $_SESSION['sdt'] = $sdt;
                $_SESSION['code'] = $code;
                header("location:$view/ma_code.php");
            }
            break;
        }
    case 'edit':
        if (isset($_POST['sub_mit']) & isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $path = $_SERVER['DOCUMENT_ROOT'] . $img;
            $dia_chi = $_POST['dia_chi'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $hinh =  $_FILES['hinh']['name'];
            move_uploaded_file($_FILES['hinh']['tmp_name'], "$path./$hinh");
            $kiemtra_email = '/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/';
            if (preg_match($kiemtra_email, $email, $matchs)) {
                $row = update_khachhang($user, $hinh, $email, $sdt, $dia_chi);
                echo " <script>alert('Cập nhật tài khoản thành công')</script>";
                header("location:$taikhoan/layout.php?tai_khoan_list");
                return;
            } else {
                echo "<script>alert('Nhập email không đúng định dạng')</script> ";
                return;
            }
        } else {
            echo "<script>alert('Không tồn tại tên đăng nhập')</script> ";
            return;
        }
        break;
    case 'change':
        if (isset($_POST['sub_mit']) & isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $pass = $_POST['mk'];
            $nl_pass = $_POST['nl_mk'];
            if ($pass == $nl_pass) {
                $matkhau = md5($pass);
                $row = update_khachhang_pass($user, $matkhau);
                echo " <script>alert('Đổi mật khẩu thành công')</script>";
                header("location:$taikhoan/layout.php?tai_khoan_list");
                return;
            } else {
                echo " <script>alert('Mật khẩu nhập không khớp')</script>";
                return;
            }
        } else {
            echo " <script>alert('Thất bại ')</script>";
        }
        break;
    case 'dangxuat':
        if (isset($_POST['dang_xuat'])) {
            unset($_SESSION['user']);
            header("location:$controller/layout.php");
        } else {
            echo "<script>alert('Có lỗi')</script>";
        }
        break;
    case 'lienhe':
        if (isset($_POST['sub_mit'])) {
            $user = $_SESSION['user'];
            $noi_dung = $_POST['noi_dung'];
            insert_lienhe($user, $noi_dung);
            header("location:$controller/layout.php?lienhe");
        }
        break;
}
