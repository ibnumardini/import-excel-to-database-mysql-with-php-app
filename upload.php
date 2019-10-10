<?php
include "koneksi.php";
include "excel_reader2.php";

$target = basename($_FILES['santri']['name']);
move_uploaded_file($_FILES['santri']['tmp_name'], $target);

chmod($_FILES['santri']['name'], 0777);

$data = new Spreadsheet_Excel_Reader($_FILES['santri']['name'], false);

$jumlah_baris = $data->rowcount($sheet_index = 0);

for ($i = 4; $i <= $jumlah_baris; $i++) {
    $nama     = $data->val($i, 2);
    $alamat   = $data->val($i, 3);
    $jurusan  = $data->val($i, 4);
    if ($nama != "" && $alamat != "" && $jurusan != "") {
        mysqli_query($db, "INSERT into santri(nama,alamat,jurusan) values('$nama','$alamat','$jurusan')");
    }
}

unlink($_FILES['santri']['name']);
