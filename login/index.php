<?php include '../reuse/header.php' ?>

<?php
session_start(); // bắt đầu session cho người đăng nhập
if (empty($_SESSION['current_user'])) {
?>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                                <form id="login-form" class="mx-1 mx-md-4">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" class="form-control"
                                                name="txtUser" />
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">

                                            <input type="password" id="form3Example4c" class="form-control"
                                                name="txtPass" />
                                            <label class="form-label" for="form3Example4c"
                                                name="txtPass">Password</label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mx-5 mb-3 mb-lg-4">

                                        <a href="../signup/index.php" class="text-decoration-none text-center">Click
                                            here to register</a>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                    </div>
                                </form>
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
<?php
} else {
    header("Location:../index.php"); // tạm thời head đến trang index cơ bản vì lv người dùng trong db = 0 và chưa phân chia form rõ ràng bên index 
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script>
$("#login-form").submit(function(event) {
    event.preventDefault();
        $.ajax({
            type: "POST",
            url: './process.php',
            data: $(this).serializeArray(),
            success: function(response) {
                response = JSON.parse(response);
                if (response.status == 0) { // đăng nhập thất bại
                    alert(response.message);
                } else { // đăng nhập thành công
                    alert(response.message);
                    location.reload();
                }
            }
        })
});
</script>

<?php include '../reuse/footer.php' ?>