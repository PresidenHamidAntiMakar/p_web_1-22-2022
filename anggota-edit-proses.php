<!-- Proses Update -->
<?php
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $id_kelas = $_POST['id_kelas'];
    $id_jurusan = $_POST['id_jurusan'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $query_update = mysqli_query($koneksi,"UPDATE anggota SET nis = '$nis', 
                                                            nama = '$nama',
                                                            jk = '$jk',
                                                            tempat_lahir = '$tempat_lahir', 
                                                            tgl_lahir = '$tgl_lahir', 
                                                            id_kelas = '$id_kelas', 
                                                            id_jurusan = '$id_jurusan', 
                                                            no_telp = '$no_telp', 
                                                            alamat = '$alamat'
                                                            WHERE id_anggota = '$id'");

if($query_update)
    {
        ?>
            <div class="alert alert-success">
                Data Berhasil Diupdate !!!
            </div>
        <?php
        header('refresh:2; URL=http://localhost/01_PASGANJIL_2021_XIIRPL2_ABDULHAMIDYASIRALFALAH/admin.php?page=anggota');
    }
    else
    {
        ?>
            <div class="alert alert-danger">
                Data GAGAL Diupdate !!!!!!!!!
            </div>
        <?php
    }

////End of proses delete data/////////////////////////////////////////////////////////////////////////

?>