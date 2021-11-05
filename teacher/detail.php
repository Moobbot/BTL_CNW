<!-- Giao diện từng môn học
        Giao diện cho Giảng viên
-->
<?php include '../reuse/header.php' ?>

<?php include '../reuse/config.php' ?>

<?php
$data = $_GET['data']; //teach_learn_id
$id = explode(',', $data)[0];
$sub_name = explode(',', $data)[1];
?>

<div class="container-fluid bg-light h-100 p-0 m-0">
    <?php
    // BEGIN HEADER

    include '../reuse/header_body.php';

    // END HEADER
    ?>
    <!-- BEGIN CONTAINER -->

    <!-- Bao gồm bảng tài liệu, thông báo và thông báo  -->
    <?php
    if (empty($_SESSION['current_user'])) {
        header("Location:../index.php"); // tạm thời head đến trang index cơ bản vì lv người dùng trong db = 0 và chưa phân chia form rõ ràng bên index
    ?>
    <?php
    } else {
        $currentUser = $_SESSION['current_user'];
    ?>
    <div class="row d-flex justify-content-center p-0 m-0">
        <div class="col-12 text-center justify-content-center p-2">
            <h1><?= $sub_name ?></h1>
        </div>
        <div class="col-lg-10 col-12">
            <!-- Thông báo -->
            <div class="row bg-warning">
                <table class="table table-bordered mb-0">
                    <thead>
                        <h2 class="text-center">Thông báo</h2><span id="noti"></span>
                    </thead>
                    <tbody>
                        <form method="POST" id="process_note">
                            <!-- Dữ liệu thay đổi theo CSDL -->

                            <?php
                                $sql = "SELECT `note_id`, `note_mes` FROM db_note WHERE teach_learn_id = '$id'";
                                $result = mysqli_query($conn, $sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                ?>

                            <tr>
                                <th class="col-11">
                                    <input type="text" class="txt_note_mes w-100" data-id="<?= $row['note_id'] ?>"
                                        value="<?= $row['note_mes'] ?>">

                                </th>

                                <!-- <input type="hidden" id="note_id" value=""> -->
                                <!-- href="./process_edit_note.php?id=</?= $row['note_id'] ?>" -->
                                <!-- <th scope="col">
                                    <button type="button" class="btn btn-success mb-2 btn_edit_note"
                                        value="</?= $row['note_id'] ?>, </?= $row['note_mes'] ?>"> Sửa
                                    </button>
                                </th> -->

                                <th class="col-1 justify-content-center">
                                    <!-- href=" ./process_delete_note.php?id=</?=$row['note_id'] ?>" -->
                                    <button type="button" class="btn btn-success w-100 btn_delete_note"
                                        value="<?= $row['note_id'] ?>"> Xóa
                                    </button>
                                </th>
                            </tr>
                            <?php
                                    }
                                }
                                ?>

                            <tr>
                                <th class="col-11">
                                    <input type="text" id="note_mes" class="w-100" placeholder="Thông báo">
                                </th>
                                <th class="col-1">
                                    <!-- <input type="hidden" id="t_learn_id" value=""> -->
                                    <button type="button" id="btn_add_note" value="<?php echo $id ?>"
                                        class="btn btn-success w-100">Thêm</button>
                                </th>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>

            <!-- Bảng thông tin tài liệu -->
            <div class="row px-0 mx-0 mt-4">
                <div class="col-12">
                    <h2 class=" text-center">Tài liệu môn học</h2>
                    <table class="table table-bordered table-responsive text-center">
                        <thead>
                            <tr>
                                <th class="col">
                                    STT
                                </th>
                                <th class="col">
                                    Tên tài liệu
                                </th>
                                <th class="col">
                                    Ngày đăng
                                </th>
                                <th class="col">
                                    Status
                                </th>
                                <th class="col"></th>
                                <th class="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dữ liệu thay đổi theo CSDL -->
                            <?php
                                $sql = "SELECT `doc_ID`, `doc_name`, `doc_link`, `date_sub`, `status` FROM `db_doc` WHERE teach_learn_id = '$id'";
                                $result = mysqli_query($conn, $sql);
                                $STT = 0;
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $STT += 1;
                                ?>
                            <tr>
                                <th cope="row"> <?= $STT ?></th>
                                <td>
                                    <a href="<?= $row['doc_link'] ?>"><?= $row['doc_name'] ?></a>
                                </td>
                                <td><?= $row['date_sub'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-success w-100 btn_delete_doc"
                                        value="<?= $row['doc_ID'] ?>"> Xóa
                                    </button>
                                </td>
                            </tr>
                            <?php
                                    }
                                }
                                ?>
                            <tr>
                                <th>
                                    <?= $STT += 1 ?>
                                </th>
                                <td>
                                    <input type="text" id="doc_name" placeholder="Tên tài liệu"
                                        class="text-center mb-2">
                                    <input type="link" id="doc_link" placeholder="Link tài liệu" class="text-center">
                                </td>
                                <td>Là ngày thêm</td>
                                <td>
                                    <input type="text" id="status" placeholder="Ghi chú" class="text-center">
                                </td>
                                <th>
                                    <button type="button" id="btn_add_doc" value="<?php echo $id ?>"
                                        class="btn btn-success w-100">Thêm</button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Comments-->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
            <div class="container">

                <?php include '../subject/comment.php' ?>

            </div>

        </div>
    </div>

    <!-- END CONTAINER -->


    <!-- BEGIN FOOTER -->

    <?php include '../reuse/footer_body.php' ?>

    <!-- END FOOTER -->

</div>

<?php } ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src='../assets/js/process_teacher.js'> </script>

<?php include '../reuse/footer.php' ?>