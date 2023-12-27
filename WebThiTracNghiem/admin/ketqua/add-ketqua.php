<div class="container content-boder-user">
    <div class="title-boder-top-user ">
        <p>Kết quả</p>
    </div>

    <form id="registrationForm" action="?act=addkq" method="post" enctype="multipart/form-data">
        <h3>Thêm mới kết quả</h3>
        <div>
            <label for="user">Bộ kết quả:</label><br>
            <input type="text" name="bo_ket_qua" id="name" required>
        </div>
        <div>
            <label for="time_start">Thời gian bắt đầu:</label><br>
            <input type="datetime-local" id="time_start" name="time_start" required>
        </div>

        <div>
            <label>Thời gian kết thúc:</label><br>
            <input type="datetime-local" name="time_end" required>
        </div>
        <div>
            <div class="address-user">
                <label for="address">Thời gian làm bài:(tính theo phút)</label><br>
                <input type="number" name="time" required>
            </div>
        </div>
        <div>
            <div class="email">
                <label for="email">Số lượng đề thi:</label><br>
                <input type="number" name="so_de_thi" required>
            </div>
        </div> <br>

        <button name="btnSubmit">REGISTER</button>
    </form>
</div>