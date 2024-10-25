<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Pengguna</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 1;
            foreach ($users as $user){
                 ?>
                <tr>
                    <td><?php echo $nomor++;?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                        <a href="index.php?id=<?php echo $user['id']; ?>&action=detail" class="btn btn-info"><i class="bi bi-card-list"></i> Detail</a>
                        <a href="index.php?id=<?php echo $user['id']; ?>&action=edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="index.php?id=<?php echo $user['id']; ?>&action=hapus" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')"><i class="bi bi-trash3"></i> Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>