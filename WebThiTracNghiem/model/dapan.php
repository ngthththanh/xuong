<?php

function loadall_dapan($idch)
{
    $sql = "SELECT dapan.id AS idda,
    dapan.content_dapan, 
    dapan.image AS hinhanh_da, 
    dapan.right_answer,
    cauhoi.id_ch, 
    cauhoi.content AS noidung_ch
    FROM dapan
    JOIN cauhoi ON cauhoi.id_ch = dapan.id_question
    WHERE dapan.id_question = $idch";
    
    $result = pdo_query($sql);
    return $result;
}
function loadone_dapan($id)
{
    $sql = "SELECT dapan.* FROM dapan WHERE id=" . $id;
    $result = pdo_query_one($sql);
    return $result;
}

function loadid_cauhoi()
{
    $sql = "SELECT id_ch, content FROM cauhoi";
    $result = pdo_query($sql);
    return $result;
}



function edit_dapan($id, $content_dapan, $photo, $right_answer, $id_question)
{
    if ($photo == "") {
        $sql = "UPDATE `dapan` SET `content_dapan`='$content_dapan',`right_answer` = '$right_answer',`id_question`='$id_question' WHERE id = $id";
    } else {
        $sql = "UPDATE `dapan` SET `content_dapan`='$content_dapan',`image`='$photo',`right_answer` = '$right_answer',`id_question`='$id_question' WHERE id = $id";
    }
    pdo_execute($sql);
}

function delete_dapan($id)
{
    $data = loadone_dapan($id);
    unlink("../uploads/{$data['image']}");
    $sql = "DELETE FROM dapan WHERE id='" . $id . "'";
    pdo_execute($sql);
}

function get_question_id_from_answer($answer_id)
{
    $sql = "SELECT id_question FROM dapan WHERE id = $answer_id";
    $result = pdo_query_one($sql);
    
    if ($result && isset($result['id_question'])) {
        return $result['id_question'];
    }
    
    return null; // hoặc giá trị mặc định khác tùy thuộc vào logic của bạn
}
