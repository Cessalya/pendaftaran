<?php
include './connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, laudantium.</p>
    <a href="create-siswa.php">Create siswa</a>

    <hr>
    <?php
    $sql = 'select * from siswa';
    $result = mysqli_query($conn, $sql);
    ?>
    <table border="1">
        <thead>
            <tr><th>nama</th><th>alamat</th><th>action</th></tr>
</thead>
<tbody>
    <?php while($data = mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?php echo $data['nama']?></td>
        <td><?php echo $data['alamat']?></td>
        <td>
            <a href="edit-siswa.php?id=<?php echo $data['id']?>">edit</a>
            <a href="delete-siswa.post.php?id=<?php echo $data['id']?>">delete</a>

    </td>
    </tr>
    <?php } ?>
</body>
</html>