<?php
session_start();
require_once 'config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับค่าจากฟอร์ม
    $username_or_email = trim($_POST['username_or_email']);
    $password = $_POST['password'];

    // เอาค่าที่รับมาจากฟอร์ม ไปตรวจสอบว่ามีข้อมูลตรงกับใน DB หรือไม่
    $sql = "SELECT * FROM users WHERE (username = ? OR email = ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username_or_email, $username_or_email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] === 'admin') {
            header("Location: admin/index.php");
        } else {
            header("Location: index.php");
        }
        exit(); // หยุดการทำงานของสคริปต์หลังจากเปลี่ยนเส้นทาง
    } else {
        $error = "ชื่อผู้ใช้ไม่ถูกต้อง";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5 justify-content-center col-md-4 card shadow-lg border-0 card-body p-4">

        <?php if (isset($_GET['register']) && $_GET['register'] === 'success'): ?>
            <div class="alert alert-success">สมัครสมาชิกสำเร็จ กรุณาเข้าสู่ระบบ</div>
        <?php endif; ?>
    
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <h2 class="mb-4 text-center">ลงชื่อเข้าใช้</h2>
        <form method="post" class="row g-3">
            <div class="col-12">
                <label for="username_or_email" class="form-label">ชื่อผู้ใช้หรืออีเมล</label>
                <input type="text" name="username_or_email" id="username_or_email" class="form-control">
            </div>
            <div class="col-12">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
                <a href="register.php" class="btn btn-link">สมัครสมาชิก</a>
            </div>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

</body>

</html>