<?php
$db = new Database();
$result = $db->query("SELECT * FROM artikel");
?>
<h3>Daftar Artikel</h3>
<a href="/lab11_php_oop/index.php/artikel/tambah" class="btn btn-primary mb-3">Tambah Baru</a>
<table class="table table-bordered">
    <tr>
        <th>Judul</th>
        <th>Aksi</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['judul']; ?></td>
        <td>
            <a href="/lab11_php_oop/index.php/artikel/ubah/<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>