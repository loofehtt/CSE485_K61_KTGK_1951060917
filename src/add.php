<?php
include './header.php';
include './config.php';
?>
<h2>Thêm bài thi</h2>


<form method="post">

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Tên bài thi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="title">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Ngày thi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="examdate" placeholder="yyyy-mm-dd">
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
    $code = $_POST['code'];
    //? câu lệnh
    $sql = "INSERT INTO `exams`(`exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `exam_code`)
    VALUES ('$title','$date', '$time', '$questions', '$marks', '$code')";

    //? kiểm tra và thực thi lệnh
    if (mysqli_query($conn, $sql)) {
        header('location:index.php');
    } else {
        header('location:error.php');
    }
}


//? đóng kết nối
mysqli_close($conn);

include './footer.php';
