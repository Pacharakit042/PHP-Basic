<?php
session_start(); // เริ่มต้น session เพื่อจัดการ การเข้าสู่ระบบ
session_unset(); // ล้างค่าใน session
session_destroy(); // ทำลาย session ทั้งหมด
header("Location: login.php"); // เปลยี่ นเสน้ ทำงไปยังหนำ้ login.php
exit; // หยดุ กำรท ำงำนของสครปิ ตห์ ลังจำกเปลยี่ นเสน้ ทำง
?>