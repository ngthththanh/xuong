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
        updateCountdown(endTime);
    }

    function calculateEndTimeFromDuration(startDateTime, durationMinutes) {
        var startDateTimeObj = new Date(startDateTime);
        var endDateTime = new Date(startDateTimeObj.getTime() + durationMinutes * 60000); // Convert minutes to milliseconds
        return endDateTime;
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
        document.getElementById('end_time_input').value = formatDateTime(endTime);
        document.getElementById('end_time_span').innerText = formatDateTime(endTime);
    }

    function updateCountdown(endTime) {
        // Update countdown every second
        timeout = setInterval(function() {
            var currentTime = new Date();
            var timeDifference = endTime - currentTime;

            // Check if the countdown has reached zero
            if (timeDifference <= 0) {
                clearInterval(timeout);
                document.getElementById('end_time_input').value = 'Hết giờ';
                document.getElementById('end_time_span').innerText = 'Hết giờ';
            } else {
                // Calculate hours, minutes, and seconds
                var hours = Math.floor(timeDifference / 3600000);
                var minutes = Math.floor((timeDifference % 3600000) / 60000);
                var seconds = Math.floor((timeDifference % 60000) / 1000);

                // Display the countdown
                document.getElementById('end_time_input').value = formatTimeUnit(hours) + ':' + formatTimeUnit(minutes) + ':' + formatTimeUnit(seconds);
                document.getElementById('end_time_span').innerText = formatTimeUnit(hours) + ':' + formatTimeUnit(minutes) + ':' + formatTimeUnit(seconds);
            }
        }, 1000);
    }
</script>
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Cập nhật lịch thi</h1>
     <p class="mb-3"><a href="?act=dslt">Danh sách lịch thi</a></p>
     <form action="?act=editlt" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $olddata['id']; ?>">

        <div class="mb-3">
            <label for="">Tên kì thi</label>
            <input type="text" class="form-control" name="name" id="name" required value="<?php echo $olddata['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Hình ảnh</label>
            <?php
            if ($olddata['image_lt'] != "" && $olddata['image_lt'] != null) {
                echo "<img width='150' src='../uploads/{$olddata['image_lt']}'>";
            }

            ?>
            <input class="form-control" type="file" id="formFile" name="image_lt">
        </div>
        <div class="mb-3">
            <label for="">Thời gian bắt đầu</label>
            <input type="datetime-local" id="start_datetime" name="time_start" required onchange="calculateEndTime()"  class="form-control" value="<?php echo $olddata['time_start'] ?>">
        </div>
        <div class="mb-3">
            <label for="">Thời gian làm bài</label>
            <input type="number" name="time" onchange="calculateEndTime()" id="duration" required class="form-control"  value="<?php echo $olddata['time'] ?>">
        </div>
        <div class="mb-3">
            <label for="">Thời gian kết thúc</label>
            <input type="datetime-local" class="form-control" name="time_end" id="end_time_input" value="<?php echo $olddata['time_end'] ?>">
        </div>
        <div class="mb-3">
            <label for="">Số lượng đề thi</label>
            <input name="so_de_thi" required class="form-control" required value="<?php echo $olddata['so_de_thi'] ?>">
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