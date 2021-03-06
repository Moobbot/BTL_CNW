<?php include '../reuse/header.php' ?>
<?php
session_start(); // bắt đầu session cho người đăng nhập
(empty($_SESSION['signup_user']))
?>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký</p>

                                <div class="mx-1 mx-md-4 signup-form">

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="txtUser" class="form-control " name="txtUser"
                                                placeholder="Tên tài khoản" />

                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user-cog fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">

                                            <select class="form-select" aria-label="Default select example"
                                                name="txtPosition" id="txtPosition">
                                                <label class="form-label" for="form3Example4c">Chức Vụ</label>
                                                <option value="Giảng Viên">Giảng Viên</option>
                                                <option value="Sinh Viên">Sinh Viên</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="txtEmail" class="form-control" name="txtEmail"
                                                placeholder="example@gmail.com" />

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="txtPass1" class="form-control" name="txtPass1"
                                                placeholder="Mật khẩu" />

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="txtPass2" class="form-control" name="txtPass2"
                                                placeholder="Nhập lại mật khẩu" />

                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user-tie fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="fullname" class="form-control " name="fullname"
                                                placeholder="Họ tên" />

                                        </div>
                                    </div>


                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-phone-alt fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="phone" id="phone" class="form-control" name="phone"
                                                placeholder="Số điện thoại" />

                                        </div>
                                    </div>

                                    <!-- <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-id-card-alt fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="office_id" class="form-control" name="office_id"
                                                placeholder="Office ID" />

                                        </div>

                                    </div> -->

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg submit"
                                            name="sbmRegister">Đăng ký</button>
                                    </div>

                                    <a href="../login/index.php" class="text-center">Đã có tài khoản?</a>
                                </div>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png"
                                    class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src='../assets/js/script.js'> </script>

<?php include '../reuse/footer.php' ?>