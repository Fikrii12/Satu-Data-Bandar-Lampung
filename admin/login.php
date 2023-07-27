<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "databandarlampung"; 


// Membuat koneksi dengan database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
session_start();

$error_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if ($user['password'] == $password) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['id'] = $user['id'];
                header('Location: index.php');
            } else {
                $error_message = 'Password Salah, Silahkan Ulangi.';
            }
        } else {
            $error_message = 'Username Salah, Silahkan Ulangi.';
        }

        $stmt->close();
    } else {
        $error_message = 'Tolong Masukan Akun.';
    }
}

$conn->close();
?>

 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <link href="../assets/img/logo_bdl.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <title>Login Admin</title>
</head>
<body>
 
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <div>
                <img src="../assets/img/logo.png" alt="Logo">
                <h1>Login Admin</h1>
                <p class="login-text">Satu Data Kota Bandar lampung</p>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" class="login-box" name="username"><br>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" class="login-box" name="password"><br>
            </div>
            <div class="input-group">
                <input type="submit" value="Masuk" id="btn-login">
            </div>
        </form>
    </div>
</body>
</html>

