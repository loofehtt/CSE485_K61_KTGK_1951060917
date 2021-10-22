<?php
include './header.php';
include './config.php';
$id = $_GET['id'];
?>
<h2>Thay đổi thông tin bài thi</h2>

<form method="post">
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Tên bài thi</label>
        <div class="col-sm-10">
            <input type="mumber" class="form-control" name="title">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Ngày thi</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="examdate" placeholder="yyyy-mm-dd">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Thời gian làm bài</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="examtime">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Tổng số câu hỏi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="questions">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Điểm mỗi câu hỏi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="marks">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Trạng thái</label>
        <div class="col-sm-10">
            <select class="p-1" name="status">
                <option value="Pending">Pending</option>
                <option value="Created">Created</option>
                <option value="Started">Started</option>
                <option value="Completed">Completed</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Mã truy cập bài thi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="code">
        </div>
    </div>

    <div class="form-group row">
        <label for="saveBtn" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" name="Save" class="btn btn-success">Lưu lại</button>
            <a href="index.php" class="btn btn-danger">Quay lại trang chủ</a>

        </div>
    </div>

</form>

<?php
if (isset($_POST['Save'])) {
    $title = $_POST['title'];
    $date = $_POST['examdate'];
    $time = $_POST['examtime'];
    $questions = $_POST['questions'];
    $marks = $_POST['marks'];
    $status = $_POST['status'];
    $code = $_POST['code'];
    //? câu lệnh
    $sql = "UPDATE `exams` SET `exam_title`='$title',`exam_datetime`='$date',
    `duration`='$time',`total_question`='$questions',`marks_per_right_answer`='$marks',
    `status`='$status',`exam_code`='$code' WHERE id = $id";

    //? kiểm tra và thực thi câu lệnh
    if (mysqli_query($conn, $sql)) {
        header('location:index.php');
    } else {
        header('location:error.php');
    }
}

//? đóng kết nối
mysqli_close($conn);

include './footer.php';
