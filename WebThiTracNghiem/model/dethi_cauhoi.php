<?php 
function load_cauoi($id){
    $sql = "select dethi_cauhoi.*, cauhoi.content, cauhoi.image  from dethi_cauhoi  LEFT JOIN cauhoi on dethi_cauhoi.id_cauhoi = cauhoi.id_ch where dethi_cauhoi.id_dethi = '$id'";
    return pdo_query($sql);
}
function load_dapan($id){
    $sql = " SELECT * FROM dapan Where id_question = '$id'" ;
    return pdo_query($sql);
}

?>