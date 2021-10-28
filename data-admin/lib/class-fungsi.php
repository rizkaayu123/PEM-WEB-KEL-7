<?php
function upload($gambar){
    $fname="";
    $fn=$_FILES[$gambar]['name'];
    $fs=$_FILES[$gambar]['size'];
    $ft=$_FILES[$gambar]['type'];
    $fe=$_FILES[$gambar]['error'];
    $tipe = array('images/jpeg','images/jpg','images/png');
    if (!in_array($ft, $tipe)) {
        echo("<script>Tipe foto tidak valid !! Tipe Harus berupa PNG,JPG</script>");
        $fname="";
    }
    elseif ($fe===0&&$ft>0) {
        $fname="VE_".date("Ymdhis").".jpg";
        $move=move_uploaded_file($_FILES[$gambar]['tmp_name'], "../../images/".$fname);
    }else
    {
        $fname="";
    }
    return $fname;
}

?>