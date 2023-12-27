<!-- Begin Page Content -->
<div class="container-fluid">
     <h1 class="h3 mb-2 text-gray-800">Thêm câu hỏi</h1>
     <p class="mb-4"><a  href="?act=dsch">Danh sách câu hỏi</a></p>
  <form action="index.php?act=addch" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Câu hỏi</label>
      <input type="text" class="form-control" id="formGroupExampleInput" required placeholder="Điền câu hỏi" name="content">
    </div>

    <div class="mb-3">
      <label for="formFile" class="form-label">Hình ảnh</label>
      <input class="form-control" type="file" id="formFile" name="image">
    </div>
    
    <div class="mb-3">
      <select  name="idcd" id="" class="form-select" aria-label="Default select example">
        <option value="0">Chuyên đề</option>
        <?php foreach ($listchuyende as $chuyende) {
          extract($chuyende);
          echo '<option value="' . $id_cd . '">' . $name . '</option>';
        } ?>
      </select>
    </div>
    <div class="mb-3">
      <input class="btn btn-success"  type="submit" name="themch" value="Thêm mới">
    </div>
  </form>
</div>