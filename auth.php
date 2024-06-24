<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "loginSpace";

$connect = new mysqli($servername, $db_username, $db_password, $db_name);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// بررسی اینکه آیا فرم ارسال شده است
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت مقادیر username و password از فرم
    if (isset($_POST['username']) && isset($_POST['pass_input'])) {
        $username = $_POST['username'];
        $password = $_POST['pass_input'];
        
        // اجرای پرس و جو برای چک کردن نام کاربری و رمز عبور
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $connect->query($sql);
        
        var_dump($username);
        var_dump($password);

        if ($result->num_rows > 0) {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    }

}

// بستن اتصال
$connect->close();

?>
