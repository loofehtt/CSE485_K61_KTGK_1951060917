<?php
include './header.php';
$id = $_GET['id'];
?>
<a href="index.php" class="btn btn-success">Quay lại trang chủ</a>

<table class="table table-responsive">
    <thead>
        <tr>
            <th scope="col">Mã bài thi</th>
            <th scope="col">Tên bài thi</th>
            <th scope="col">Ngày thi</th>
            <th scope="col">Thời gian làm bài(phút)</th>
            <th scope="col">Số câu hỏi</th>
            <th scope="col">Điểm/câu</th>
            <th scope="col">Ngày tạo</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Mã truy cập bài thi</th>
        </tr>
    </thead>
    <tbody>
        <!--xuất dữ liệu theo CSDL -->
        <?php
        //* B1: mở kết nối
        include './config.php';
        //* B2: Truy vấn
        $sql = "SELECT * FROM exams WHERE id = '$id' ";

        //? lưu kết quả trả về $result
        $result = mysqli_query($conn, $sql);
        $gender;

        //* B3: Phân tích sử lý kết quả
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['exam_title'] . '</td>';
                echo '<td>' . $row['exam_datetime'] . '</td>';
                echo '<td>' . $row['duration'] . '</td>';
                echo '<td>' . $row['total_question'] . '</td>';
                echo '<td>' . $row['marks_per_right_answer'] . '</td>';
                echo '<td>' . $row['created_on'] . '</td>';
                echo '<td>' . $row['status'] . '</td>';
                echo '<td>' . $row['exam_code'] . '</td>';
                echo '<td>';
            }
        } else {
            header('location:error.php');
        }
        //* B4: đóng kết nối
        mysqli_close($conn);
        ?>
    </tbody>
</table>
<?php include './footer.php' ?>