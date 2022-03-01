<?php
include './connection.php';


$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "
insert into siswa (nama, alamat)
    values ('". $nama ."','". $alamat ."');
    ";

$result = mysqli_query($conn, $sql);
if ($result){
    echo 'Success create siswa';
}else{
    printf('Failed create siswa: '.mysqli_error ($conn));
    exit();
}
