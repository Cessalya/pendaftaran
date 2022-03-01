<?php
include './connection.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "
    update siswa
    set nama = '" . $nama . "', alamat = '" . $alamat . "'
    where id = '" . $id . "';
    ";

$result = mysqli_query($conn, $sql);
if($result){
    header('Location: index.php');
}else{
    printf('Failed update siswa : '. mysqli_error($conn));
    exit();
}
?>