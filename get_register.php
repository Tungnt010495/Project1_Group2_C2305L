<?php 
    include('../db/connect_db.php');
    $message_user_register='';
    $message_pass_register='';
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
        // Lấy dữ liệu từ form đăng ký
        $name = $_POST['register_name'];
        $email_register = $_POST['register_email'];
        $pass_register = $_POST['register_pass'];
    
        // Kiểm tra xem tên người dùng đã tồn tại trong cơ sở dữ liệu chưa
        $query_register = "SELECT * FROM users WHERE email = ?" ;
        $stmt = $conn->prepare($query_register);
        $stmt->bind_param('s', $email_register);
        $stmt->execute();
        $result = $stmt->get_result();
        $user_register = $result->fetch_assoc();
    
        if ($user_register) {
            $message_user_register = "Tên người dùng đã tồn tại!";
        } else {
            // Mã hóa mật khẩu với bcrypt
            $hashedPassword = password_hash($pass_register, PASSWORD_BCRYPT);
            // Thêm người dùng vào cơ sở dữ liệu
            $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)"); 
            $stmt->bind_param('sss', $name, $email_register, $hashedPassword); 
            $stmt->execute();
            header('Location: login.php');
            exit();
        }
    }
    $conn->close();
?>