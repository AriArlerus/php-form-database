<?php
// กำหนดค่าการเชื่อมต่อฐานข้อมูล
$servername = "localhost"; // เซิร์ฟเวอร์ที่ใช้ (localhost สำหรับ Localhost)
$username = "root";        // ชื่อผู้ใช้ (ค่าเริ่มต้นของ XAMPP คือ root)
$password = "";            // รหัสผ่าน (ค่าเริ่มต้นของ XAMPP คือเว้นว่าง)
$database = "example_db";  // ชื่อฐานข้อมูลที่ต้องการเชื่อมต่อ

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $database);

// ตรวจสอบว่าการเชื่อมต่อสำเร็จหรือไม่
if ($conn->connect_error) { // ถ้าเกิดข้อผิดพลาด
    die("Connection failed: " . $conn->connect_error); // แสดงข้อความข้อผิดพลาดและหยุดการทำงาน
} else {
    echo "Database connected successfully!";
}

// ถ้าเชื่อมต่อสำเร็จ โค้ดจะดำเนินการต่อไป
?>
