<?php
$page = "Login";
require('../koneksi.php');

if ($mysqli->connect_error) {
    die("Koneksi Gagal: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_user = $mysqli->prepare("SELECT * FROM user WHERE username = ?");
    $check_user->bind_param("s", $username);
    $check_user->execute();
    $result = $check_user->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header('location: index.php?page=welcome');
        } else {
            echo "<div class=text-center><h4 style=color:red;>Password Salah</h4></div>";
        }
    } else {
        echo "<div class=text-center><h4 style=color:red;>Username Tidak Ditemukan</h4></div>";
    }
}
?>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user" placeholder="Enter Usename...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name ="password" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <button type="submit" value="login" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="index.php?page=register">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>