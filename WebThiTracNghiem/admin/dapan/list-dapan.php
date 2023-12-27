<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-3 text-gray-800">Danh sách đáp án</h1>

    <?php

    $maxAnswers = 4;
    if (count($listdapan) < $maxAnswers) {
        echo '    <p class="mb-3"><a href="?act=themda&id=' . $_GET['id'] . '">Thêm đáp án</a></p>';
    } else {
        echo '     <p class="mb-3"><a  href="?act=themda">Thêm đáp án</a></p>';
    }
    ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="index.php?act=dsda" method="post" enctype="multipart/form-data">
                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nội dung đáp án</th>
                                <th>Hình ảnh </th>
                                <th>Đáp án (1:Đúng, 2:Sai)</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nội dung đáp án</th>
                                <th>Hình ảnh </th>
                                <th>Đáp án (1:Đúng, 2:Sai)</th>
                                <th>Thao tác</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <div class="mb-3">
                                <?php $imagePath = "../uploads/" . (isset($oldcauhoi['image']) ? $oldcauhoi['image'] : '');
                                $hinh = '';
                                if (is_file($imagePath)) {
                                    $hinh = "<img src='" . $imagePath . "' width='150px'>";
                                } ?>
                                <p style="font-size: 20px; font-weight: 600;">Câu hỏi: <?php echo $oldcauhoi['content'] ?></p>
                                <p><?php echo $hinh ?></p>
                            </div>
                            <?php foreach ($listdapan as $key => $value) : extract($value) ?>
                                <tr>
                                    <td class="bold">
                                        <?php
                                        if ($value['right_answer'] == 1) {
                                            echo "<p class='green'>$content_dapan</p>";
                                        } else {
                                            echo "<p class='red'>$content_dapan</p>";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($hinhanh_da != "" && $hinhanh_da != null) {
                                            echo "<img width='70' src='../uploads/{$hinhanh_da}'>";
                                        }
                                        ?>
                                    </td>
                                    <td><?php
                                        if ($right_answer == 1) {
                                            echo "<p class='green'>Đúng</p>";
                                        } else {
                                            echo "<p class='red'>Sai</p>";
                                        }
                                        ?></td>
                                    <td><a class="btn btn-primary btn-circle btn-sm" href="?act=editda&idda=<?= $idda ?>"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-circle btn-sm" href="?act=deleteda&idda=<?= $idda ?>"> <i class="fas fa-trash"></i></a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->