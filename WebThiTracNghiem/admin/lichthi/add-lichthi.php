<script language="javascript">
    var timeout = null;

    function calculateEndTime() {
        // Lấy giá trị nhập vào
        var startDateTime = document.getElementById('start_datetime').value;
        var durationMinutes = parseInt(document.getElementById('duration').value);

        // Tính thời gian kết thúc
        var endTime = calculateEndTimeFromDuration(startDateTime, durationMinutes);

        // Hiển thị kết quả và bắt đầu đếm ngược
        updateResult(endTime);

        // Bắt đầu đếm ngược
        updateClock();
    }

    function calculateEndTimeFromDuration(startDateTime, durationMinutes) {
        var startDateTimeObj = new Date(startDateTime);
        var endDateTime = new Date(startDateTimeObj.getTime() + durationMinutes * 60000); // Convert minutes to milliseconds
        return formatDateTime(endDateTime);
    }

    function formatDateTime(dateTime) {
        var year = dateTime.getFullYear();
        var month = dateTime.getMonth() + 1; // Month is zero-based
        var day = dateTime.getDate();
        var hours = dateTime.getHours();
        var minutes = dateTime.getMinutes();

        return year + '-' + formatTimeUnit(month) + '-' + formatTimeUnit(day) + ' ' + formatTimeUnit(hours) + ':' + formatTimeUnit(minutes);
    }

    function formatTimeUnit(unit) {
        return unit < 10 ? '0' + unit : unit;
    }

    function updateResult(endTime) {
        // Display the calculated end date and time
        document.getElementById('end_time_input').value = endTime;
        document.getElementById('end_time_span').innerText = endTime;
    }

    function updateClock() {
        // Countdown logic (if needed)
    }
</script>
<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Thêm lịch thi</h1>
     <p class="mb-3"><a  href="?act=dscd">Danh sách lịch thi</a></p>
    <form action="index.php?act=addlt" method="post" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="">Tên kì thi</label>
            <input type="text" class="form-control" name="name" id="name" required placeholder="Nhập tên kì thi">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Hình ảnh</label>
            <input class="form-control" type="file" id="formFile" name="image_lt">
        </div>
        <div class="mb-3">
            <label for="">Thời gian bắt đầu</label>
            <input type="datetime-local" id="start_datetime" name="time_start" required onchange="calculateEndTime()"  class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="">Thời gian làm bài</label>
            <input type="number" name="time" onchange="calculateEndTime()" id="duration" required class="form-control"  placeholder="Nhập thời gian làm bài">
        </div>
        <div class="mb-3">
            <label for="">Thời gian kết thúc</label>
            <input type="datetime-local" class="form-control" name="time_end" id="end_time_input">
        </div>
        <div class="mb-3">
            <label for="">Số lượng đề thi</label>
            <input name="so_de_thi" required class="form-control" required placeholder="Nhập số đề thi">
        </div>
        <div class="mb-3">
            <input type="submit" value="Thêm mới" class="btn btn-success" name="btnSubmit">
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</div>
