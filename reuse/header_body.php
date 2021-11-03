<!-- Header -->
<header class="bg-dark text-white p-2">
    <div class="container-fluid p-0 m-0">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <a href="http://localhost/CNW/" class="d-flex align-items-center mb-md-0 text-start">
                <img src="http://localhost/CNW/assets/img/logo.jfif" alt="" width="40" height="32"
                    class="d-inline-block align-text-top p-0 m-0 me-2">
            </a>

            <?php
            session_start();
            if (empty($_SESSION['current_user'])) {
            ?>

            <div class="text-end">
                <a href="http://localhost/CNW/login/" class="btn btn-outline-light me-2">Login</a>
                <a href="http://localhost/CNW/signup/" class="btn btn-warning me-2">Sign-up</a>
            </div>

            <?php
            } else {
                $currentUser = $_SESSION['current_user'];
            ?>

            <div class="text-end">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        <!-- Tên người đăng nhập -->
                        <?= $currentUser['User_FullName'] ?>

                        <i class="fa fa-user-circle fa-w-16 fa-2x p-2" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Thông tin tài khoản</a></li>
                        <li><a class="dropdown-item" href="http://localhost/CNW/change_password/index.php">Đổi mật
                                khẩu</a></li>
                        <li><a class="dropdown-item" href="http://localhost/CNW/logout/index.php">Đăng xuất</a></li>
                    </ul>
                </div>
            </div>

            <?php
            }
            ?>
        </div>
    </div>
</header>
