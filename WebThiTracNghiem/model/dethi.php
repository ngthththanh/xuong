<?php
function loadall_dethicauhoi($id_lichthi = null)
{

    $sql = "SELECT dethi_cauhoi.*,
    lichthi.name AS ten_kythi,
    lichthi.id AS id_lichthi,
    dethi.ten_de,
    dethi.id AS id_dethi,
    cauhoi.content AS ten_cauhoi
    FROM dethi_cauhoi 
    JOIN dethi ON dethi.id = dethi_cauhoi.id_dethi
    JOIN lichthi ON lichthi.id = dethi.id_lichthi
    JOIN cauhoi ON cauhoi.id_ch = dethi_cauhoi.id_cauhoi 
     ";
    if ($id_lichthi != null) {
        $sql .= "Where dethi.id_lichthi = $id_lichthi";
    }

    $result = pdo_query($sql);
    return $result;
}
function add_cauhoidethi($id_dethi, $id_cauhoi)
{
    $sql = "INSERT INTO `dethi_cauhoi`(`id_dethi`, `id_cauhoi`) VALUES ('$id_dethi', '$id_cauhoi')";
    pdo_execute($sql);
}
function add_dethi($ten_de, $id_lichthi)
{
    $sql = "INSERT INTO `dethi`(`ten_de`, `id_lichthi`) VALUES ('$ten_de', '$id_lichthi')";
    pdo_execute($sql);
    $sql2 = "SELECT max(id) AS max_id FROM `dethi`";
    return pdo_query_one($sql2);
}
function load_dethi($id_lichthi)
{
    $sql = "SELECT * FROM `dethi` WHERE id_lichthi = '$id_lichthi'";
    $dethi = pdo_query($sql);
    return $dethi;
}
function loadAll_dethi($id_lichthi)
{
    $sql = "SELECT * FROM `dethi` WHERE id_lichthi = '$id_lichthi' ORDER BY RAND() LIMIT 1";
    $dethi = pdo_query_one($sql);
    return $dethi;
}
