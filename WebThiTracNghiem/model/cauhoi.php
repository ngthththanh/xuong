<?php

function insert_cauhoi($content, $image, $idcd)
{
    $sql = "insert into cauhoi(content, image, id_cd) values('$content', '$image', '$idcd')";
    pdo_execute($sql);
}
function loadall_cauhoi()
{
    $sql = "SELECT cauhoi.*,
            chuyende.name AS ten_cd
    from cauhoi
    JOIN chuyende ON cauhoi.id_cd = chuyende.id_cd
     order by id_cd desc";
    $listcauhoi = pdo_query($sql);
    return $listcauhoi;
}


function add_dapan($content_dapan, $photo, $right_answer, $id_question)
{
    $sql = "insert into dapan(content_dapan, image, right_answer, id_question) values('$content_dapan', '$photo', '$right_answer', '$id_question')";
    pdo_execute($sql);
}


function update_cauhoi($idcd, $content, $image, $id)
{
    if ($image != "") {
        $sql = "UPDATE cauhoi SET id_cd = '" . $idcd . "',content= '" . $content . "',image = '" . $image . "' WHERE id_ch=" . $id;
    } else {
        $sql = "UPDATE cauhoi SET id_cd = '" . $idcd . "',content= '" . $content . "' WHERE id_ch=" . $id;
    }
    pdo_execute($sql);
}
function loadone_cauhoi($id)
{

    $sql = "SELECT * FROM cauhoi WHERE id_ch=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function delete_cauhoi($id)
{
    $sql = "DELETE FROM cauhoi WHERE id_ch='" . $id . "'";
    pdo_execute($sql);
}