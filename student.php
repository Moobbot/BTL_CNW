<!-- Giao diện từng môn học
        Giao diện cho sinh viên
-->
<?php include 'header.php' ?>

<div class="container-fluid bg-light h-100 ps-0 pe-0">
    <header class="bg-dark text-white p-2">
        <div class="container-fluid p-0 m-0">
            <div class="d-flex flex-wrap align-items-center justify-content-md-start justify-content-between">
                <a href="http://www.tlu.edu.vn/" class="d-flex align-items-center mb-md-0 text-start">
                    <img src="assets/img/logo.jfif" alt="" width="40" height="32"
                        class="d-inline-block align-text-top p-0 m-0 me-2">
                </a>

                <ul class="nav col-12 col-md-auto me-md-auto mb-2 justify-content-center mb-md-0 d-md-flex d-none">
                    <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>

                <div class="text-end">
                    <i class="fa fa-user-circle fa-w-16 fa-3x p-2" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Body -->
    <!-- Bao gồm bảng tài liệu và phản hồi của sinh viên -->
    <div class="row d-flex justify-content-center mt-sm-5 p-0 m-0">
        <div class="col-10">
            <!-- Thông báo -->
            <div class="row">
                <table class="table">
                    <thead>
                        <h2>Thông báo</h2>
                    </thead>
                    <tbody>
                        <th class="col">
                            <p class="bg-warning">
                                Quickly design and customize responsive mobile-first sites with
                                Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass
                                variables
                                and
                                mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript
                                plugins.
                            </p>
                        </th>
                    </tbody>
                </table>
            </div>
            <!-- Bảng thông tin tài liệu -->
            <div class="row">
                <div class="col-md-12">
                    <h2>Tài liệu môn học</h2>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>
                                    STT
                                </th>
                                <th>
                                    Tên tài liệu
                                </th>
                                <th>
                                    Ngày đăng
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    TB - Monthly
                                </td>
                                <td>
                                    01/04/2012
                                </td>
                                <td>
                                    Default
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    Ex: Giáo trình mạng máy tính
                                </td>
                                <td>
                                    date_timestamp_get
                                </td>
                                <td>
                                    Default
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Comments của sinh viên-->
            <div class="row">
                <div class="col-md-12 flex-column m-md-5">
                    <input type="text" class="w-75 p-5">
                    <input type="submit" value="Gửi" class="btn btn-success ps-4 pe-4 pt-2 pb-2">
                </div>
            </div>
        </div>
    </div>
    <div class="row w-100 position-absolute bottom-0 p-0 m-0">
        <?php include 'footer_body.php' ?>
    </div>
</div>


<?php include 'footer.php' ?>