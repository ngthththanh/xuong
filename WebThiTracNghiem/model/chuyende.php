<?php
function insert_chuyende($name, $image_cd)
{
    $sql = "INSERT INTO chuyende ( `name`, `image_cd`) VALUES ('$name', '$image_cd')";
    pdo_execute($sql);
}

function loadall_chuyende()
{
    $sql = "select * from chuyende order by id_cd asc";
    $listchuyende = pdo_query($sql);
    return $listchuyende;
}
function delete_chuyende($id_cd)
{
    $sql = "delete from chuyende where id_cd=" . $id_cd;
    pdo_execute($sql);
}
function loadone_chuyende($id_cd)
{
    $sql = "select * from chuyende where id_cd=" . $id_cd;
    $a = pdo_query_one($sql);
    return $a;
}

function update_chuyende($id_cd, $name, $image_cd)
{
    if ($image_cd != "") {
    $sql = "UPDATE  chuyende SET name='" . $name . "' , image_cd ='".$image_cd."' where id_cd=" . $id_cd;
    }else{
        $sql = "UPDATE  chuyende SET name='" . $name . "'  where id_cd=" . $id_cd;

    }
    pdo_execute($sql);
}
