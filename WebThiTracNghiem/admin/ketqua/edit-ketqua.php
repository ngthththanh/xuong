<div class="container content-boder-user">
    <div class="title-boder-top-user">
        <p>
            Cập Nhật Lịch thi
        </p>
    </div>
    <form action="?act=editlt" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $olddata['id']; ?>">
        <div class="mb-3">
            <label for="user">Tên kì thi</label>
            <input type="text" name="name" id="name" required value="<?php echo $olddata['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="time_start">Thời gian bắt đầu</label>
            <input type="datetime-local" id="time_start" name="time_start" required value="<?php echo $olddata['time_start'] ?>">
        </div>

        <div class="mb-3">
            <label>Thời gian kết thúc:</label>
            <input type="datetime-local" name="time_end" required value="<?php echo $olddata['time_end'] ?>">
        </div>
        <div class="mb-3">
                <label for="address">Thời gian làm bài:(tính theo phút)</label><br>
                <input type="number" name="time" required value="<?php echo $olddata['time'] ?>">
        </div>
        <div class="mb-3">
                <label for="email">Số lượng đề thi:</label>
                <input type="number" name="so_de_thi" required value="<?php echo $olddata['so_de_thi'] ?>">
        </div>
        <button name="btnSubmit">Cập Nhật</button>
    </form>
</div>