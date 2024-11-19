<?php
// เชื่อมต่อฐานข้อมูลโดยใช้ connect.php
include 'connect.php';

// ตรวจสอบว่าฟอร์มถูกส่งมาด้วยวิธี POST หรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // ดึงค่าจากฟอร์มมาเก็บในตัวแปร
    $name = $_POST['name']; // ดึงค่าชื่อจากฟอร์ม
    $email = $_POST['email']; // ดึงค่าอีเมลจากฟอร์ม

    // สร้างคำสั่ง SQL สำหรับเพิ่มข้อมูลลงฐานข้อมูล
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    // ตรวจสอบว่าการเพิ่มข้อมูลสำเร็จหรือไม่
    if ($conn->query($sql) === TRUE) { 
        // ถ้าสำเร็จ
        echo "New record created successfully<br>";
        echo "<a href='form.php'>Go Back</a>"; // ลิงก์กลับไปยังฟอร์ม
    } else {
        // ถ้าเกิดข้อผิดพลาด
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    $conn->close();
} else {
    // ถ้าฟอร์มไม่ได้ถูกส่งมาด้วย POST
    echo "Invalid Request";
}
?>
