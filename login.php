<?php 
include("../db/connect_db.php");
session_start();
$message_user_login='';
$message_pass_login='';
$message_user_register= isset($_GET['msg_user_log_out']) ? $_GET['msg_user_log_out'] : '';
$message_pass_register= isset($_GET['msg_pass_log_out']) ? $_GET['msg_user_log_out'] : '' ;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    // Lấy dữ liệu từ form đăng nhập
    $email_login = $_POST['login_email'];
    $pass_login = $_POST['login_pass'];

    // Tìm kiếm người dùng trong cơ sở dữ liệu
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param('s', $email_login); 
    $stmt->execute();
    $result_login = $stmt->get_result();
    $user_login = $result_login->fetch_assoc();

    if ($user_login) {
        // Kiểm tra mật khẩu
        if (password_verify($pass_login, $user_login['password'])) { 
            // Đăng nhập thành công
            $_SESSION['user'] = $user_login['id'];
            header('Location: ../index.php');
            exit(); // Thêm dòng này để chắc chắn dừng chương trình sau khi chuyển hướng
        } else {
            $message_pass_login = "Mật khẩu không chính xác!";
        }
    } else {
       $message_user_login = "Tên người dùng không tồn tại!";
    }
}

?>

<!-- -------------------------sig up ------------------- -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="get_register.php" method="POST">
                <h1>Create an Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" name="register_name" required/>
                <input type="email" placeholder="Email" name="register_email" required/>
                <span id="messgaeLogin" style='color: red;font-size: 12px;'>
                    <?php echo $message_user_register?> 
                </span>
                <input type="password" placeholder="Password" name="register_pass" required/>
                <span id="messgaeLogin" style='color: red;font-size: 12px;'>
                    <?php echo $message_pass_register;?>
                </span>
                <button name="register"><a href="#" style="color: aliceblue;" >Register</a></button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="POST">
                <h1>Log In</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" name="login_email" required/>
                <span id="messgaeLogin" style='color: red;font-size: 12px;'>
                    <?php echo $message_user_login ;?>
                </span>
                <input type="password" placeholder="Password" name="login_pass" required/>
                <span id="messgaeLogin" style='color: red;font-size: 12px;'>
                    <?php echo $message_pass_login ;?>
                </span>
                <a href="#">Forgot your password?</a>


                <button name="login">Log In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Log In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>

                    <button class="ghost" id="signUp" >Register</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/login.js"></script>

</body>

</html>