<?php
// Avoid using extract(), access array elements directly
$idQuestion = isset($oldcauhoi['id_ch']) ? $oldcauhoi['id_ch'] : '';
$content = isset($oldcauhoi['content']) ? $oldcauhoi['content'] : '';
$imagePath = "../uploads/" . (isset($oldcauhoi['image']) ? $oldcauhoi['image'] : '');

// Check if the image file exists
$hinh = '';
if (is_file($imagePath)) {
    $hinh = "<img src='" . $imagePath . "' width='150px'>";
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-3 text-gray-800">Thêm đáp án</h1>
     <p class="mb-3"><a href="?act=dscd">Danh sách đáp án</a></p>
     <form action="?act=themda" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                <input type="hidden" name="id_question" value="<?= $idQuestion ?>">
        <div class="mb-3">
            <label for="">Câu hỏi</label>
            <input type="text" class="form-control" name="content" readonly value="<?= $content ?>">

        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Hình ảnh</label>
            <?= $hinh ?>
        </div>
        <div id="dapan-container" class="mb-3"></div>
        <div class="mb-3">
        <a href="#" onclick="addAnswer()">+Thêm đáp án</a>
        </div>
        <div class="mb-3">
            <input type="submit" value="Xác nhận" class="btn btn-success" name="btnSubmit">
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</div>
<script>
    let answerCount = 0; // Số đáp án hiện tại, bắt đầu từ 0
function addAnswer() {
    answerCount++; // Tăng số đáp án lên 1

    const dapanContainer = document.getElementById('dapan-container');

    // Tạo một div mới cho đáp án
    const newAnswerDiv = document.createElement('div');
    newAnswerDiv.classList.add('dapan', 'mb-3');

    // Tạo div cho nội dung đáp án
    const contentDiv = document.createElement('div');

    const answerLabel = document.createElement('label');
    answerLabel.textContent = `Nội dung đáp án ${answerCount}`;

    const answerInput = document.createElement('input');
    answerInput.type = 'text';
    answerInput.classList.add('form-control');
    answerInput.name = `content_dapan[]`;
    answerInput.required = true;

    // Đưa nhãn và ô nhập vào div nội dung
    contentDiv.appendChild(answerLabel);
    contentDiv.appendChild(answerInput);

    // Tạo div cho hình ảnh đáp án
    const imageDiv = document.createElement('div');

    const imageInputLabel = document.createElement('label');
    imageInputLabel.textContent = 'Hình ảnh đáp án';

    const imageInput = document.createElement('input');
    imageInput.type = 'file';
    imageInput.name = `image[]`;
    imageInput.accept = 'image/*';

    // Đưa nhãn và ô nhập hình ảnh vào div hình ảnh, sau đó đưa div hình ảnh vào div nội dung
    imageDiv.appendChild(imageInputLabel);
    imageDiv.appendChild(imageInput);
    contentDiv.appendChild(imageDiv);

   // Tạo select cho đáp án đúng/sai
const rightAnswerLabel = document.createElement('label');
rightAnswerLabel.textContent = 'Đáp án';
const rightAnswerSelect = document.createElement('select');
rightAnswerSelect.name = `right_answer[]`;

// Tạo option cho lựa chọn 'Sai'
const option1 = document.createElement('option');
option1.value = '2';
option1.textContent = 'Sai';

// Tạo option cho lựa chọn 'Đúng'
const option2 = document.createElement('option');
option2.value = '1';
option2.textContent = 'Đúng';

// Thêm option vào dropdown
rightAnswerSelect.appendChild(option1);
rightAnswerSelect.appendChild(option2);

// Thêm label và dropdown vào div mới
newAnswerDiv.appendChild(answerLabel);
newAnswerDiv.appendChild(answerInput);
newAnswerDiv.appendChild(rightAnswerLabel);
newAnswerDiv.appendChild(rightAnswerSelect);
newAnswerDiv.appendChild(imageInput);

// Thêm div mới vào container đáp án
dapanContainer.appendChild(newAnswerDiv);

    // Kiểm tra và ẩn liên kết "Thêm đáp án" nếu đã đạt đến số lượng tối đa (4)
    if (answerCount === 4) {
        document.querySelector('a[href="#"]').style.display = 'none';
    }
}

function validateForm() {
    const rightAnswerSelects = document.querySelectorAll('select[name="right_answer[]"]');
    const answerInputs = document.querySelectorAll('input[name="content_dapan[]"]');
    let correctAnswerCount = 0;

    rightAnswerSelects.forEach(select => {
        if (select.value === '1') {
            correctAnswerCount++;
        }
    });

    const totalAnswers = answerInputs.length;

    if (correctAnswerCount === 0 || totalAnswers > 4) {
        alert('Bạn phải chọn ít nhất một đáp án đúng và có tối đa 4 đáp án.');
        return false;
    }

    if (correctAnswerCount > 1) {
        alert('Bạn chỉ được chọn một đáp án đúng.');
        return false;
    }

    return true;
}

    function validateForm() {
        const rightAnswerSelects = document.querySelectorAll('select[name="right_answer[]"]');
        const answerInputs = document.querySelectorAll('input[name="content_dapan[]"]');
        let correctAnswerCount = 0;

        rightAnswerSelects.forEach(select => {
            if (select.value === '1') {
                correctAnswerCount++;
            }
        });

        const totalAnswers = answerInputs.length;

        if (correctAnswerCount === 0 || totalAnswers > 4) {
            alert('Bạn phải chọn ít nhất một đáp án đúng  và có tối đa 4 đáp án.');
            return false;
        }

        if (correctAnswerCount > 1) {
            alert('Bạn chỉ được chọn một đáp án đúng.');
            return false;
        }

        return true;
    }
</script>